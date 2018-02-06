<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Post.
 *
 * @package namespace App\Entities;
 */
class Post extends Model implements Transformable
{
    use TransformableTrait;

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
    public function Tag() {
        return $this->belongsToMany(Tag::class);
    }
    public function Category() {
        return $this->belongsTo(Category::class);
    }
    public function User() {
        return $this->belongsTo(User::class);
    }

}
