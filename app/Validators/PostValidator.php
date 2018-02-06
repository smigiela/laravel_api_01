<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class PostValidator.
 *
 * @package namespace App\Validators;
 */
class PostValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'title' => 'required|max:255',
            'slug' => 'required|min:5|max:180',
            'body' => 'required',
            'category_id' => 'integer|required',
            'image' => 'sometimes',
            'status' => 'required',
            'alt_tag' => 'required',
            'meta_description' => 'min:10|max:190',
            'keywords' => 'min:5|max:190'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'title' => 'required|max:255',
            'slug' => 'required|min:5|max:180',
            'body' => 'required',
            'category_id' => 'integer|required',
            'image' => 'sometimes|image',
            'status' => 'required',
            'alt_tag' => 'required',
            'meta_description' => 'min:10|max:190',
            'keywords' => 'min:5|max:190'
        ],
    ];
}
