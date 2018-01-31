<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class CategoryValidator.
 *
 * @package namespace App\Validators;
 */
class CategoryValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required|min:5|max:50',
            'description' => 'min:10|max:255',
            'keywords' => 'required',
            'meta_content' => 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [],
    ];
}
