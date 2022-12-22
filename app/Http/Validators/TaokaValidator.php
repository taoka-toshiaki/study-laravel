<?php
namespace App\Http\Validators;
use Illuminate\Validation\Validator;

class TaokaValidator extends Validator
{
    public function validateTaoka($attribute,$value,$parameters)
    {
        return strcmp($value,'taoka')===0;
    }
}