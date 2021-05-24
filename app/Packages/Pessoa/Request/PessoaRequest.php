<?php

namespace App\Packages\Pessoa\Request;

use Illuminate\Foundation\Http\FormRequest;

class PessoaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required',
            'idade' => 'required'
        ];
    }
}
