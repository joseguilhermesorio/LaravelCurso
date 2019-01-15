<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'     => 'required|email',
            'mensagem'  => 'required',
            'arquivo'   => 'required'
        ];
    }

    public function messages() {
        return [
            'required'  => 'O campo :attribute precisa ser preenchido',
            'email'     => 'O email precisa ser válido',
            'arquivo'   => 'Selecione um arquivo para enviar, formato jpeg,jpg, etc..'
        ];
    }
}
