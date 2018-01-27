<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The table associated with the model.
     *
     */
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'meta_description',
        'keywords',
        'slug',
        'category_id',
        'image',
        'alt_tag',
        'body',
        'status'
    ];
    /**
     * relationships
     *
     */

}
