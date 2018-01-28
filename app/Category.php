<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
        /**
     * The table associated with the model.
     *
     */
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'description',
        'keywords',
        'meta_content'
    ];


    /**
     * relationships
     *
     */
     public function Post(){
         return $this->hasMany('App\Post');
     }
}
