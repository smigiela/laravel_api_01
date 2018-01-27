<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Daniel Śmigiela',
            'email' => 'biuro@app.com',
            'password' => bcrypt('pass123'),
        ]);
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@test.pl',
            'password' => bcrypt('pass123'),
        ]);
    }
}
