<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class ApiAuthController extends Controller
{
    public function authenticate()
    { 
        $credentials = request()->only('email', 'password');

        try{
            $token = JWTAuth::attempt($credentials);

            if(!$token){
                return response()->json(['error' => 'Nie poprawne email lub hasło'], 401);
            }
        } 
        catch(JWTException $e){
            return response()->json(['error' => 'Coś poszło nie tak'], 500);
        }

        return response()->json(['token' => $token], 200);
    }
    public function register()
    {
        $email = request()->email;
        $name = request()->name;
        $password = request()->password;

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password)
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(['token' => $token], 200);
    }    

    public function logout() 
    {
        JWTAuth::invalidate(JWTAuth::getToken());
        return response()->json([
            'status' => 0
        ], 200);
    }
}
