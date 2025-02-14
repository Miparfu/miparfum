<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:3'],
            'password' => ['required', 'min:3'],
            'phone' => ['required', 'min:10'],
            'email' => ['required', 'email','unique:users,email']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Имя не может быть пустым',
            'name.min' => 'Имя не может быть менее 3 символов',
            'phone.required' => 'Телефон не может быть пустым',
            'phone.min' => 'Не верный формат телефона',
            'password.required' => 'Пароль не может быть пустым',
            'password.min' => 'Пароль не может быть менее 3 символов',
            'email.required' => 'Email не может быть пустым',
            'email.email' => 'Email не верный',
            'email.unique' => 'Вы уже зарегистрированы'
        ];
    }
}
