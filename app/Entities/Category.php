<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Category.
 *
 * @package namespace App\Entities;
 */
class Category extends Model implements Transformable
{
    use TransformableTrait;

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

}
