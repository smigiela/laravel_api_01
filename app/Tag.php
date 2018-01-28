<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The table associated with the model.
     *
     */
    protected $table = 'tags';
    protected $fillable = [
        'name'
    ];

    /**
     * Relationships
     *
     */
    public function Post() {
        return $this->belongsToMany(Post::class);
    }
}
