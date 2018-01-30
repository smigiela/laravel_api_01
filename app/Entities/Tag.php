<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Tag.
 *
 * @package namespace App\Entities;
 */
class Tag extends Model implements Transformable
{
    use TransformableTrait;

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
