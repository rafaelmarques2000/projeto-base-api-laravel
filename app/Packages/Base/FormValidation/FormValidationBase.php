<?php

namespace App\Packages\Base\FormValidation;

use Illuminate\Foundation\Http\FormRequest;

class FormValidationBase extends FormRequest
{
    public function authorize()
    {
        return true;
    }

}
