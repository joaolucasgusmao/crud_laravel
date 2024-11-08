<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'name' => 'required',
            'cpf' => 'required',
            'password' => ['required', 'min:7']
        ];
    }

    public function messages(): array
    {

        return [
            'email.required' => 'O email é obrigatório',
            'email.email' => 'O email deve ser válido',
            'name.required' => 'O nome é obrigatório',
            'cpf.required' => 'O CPF é obrigatório',
            'password.required' => 'A senha é obrigatória.',
            'password.min' => 'É necessário no minimo :min carecteres.'
        ];
    }
}
