<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class LoginFormRequest extends FormRequest
{
    /**
     * @var string
     */
    protected $redirectTo = '/';

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
            'password' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'remember' => ['boolean']
        ];
    }

   /* protected function prepareForValidation()
    {
        if ($this->get('remember') == 'on') {
            $remember = true;
        } else {
            $remember = false;
        }

        return $this->merge(['remember' => $remember]);
    }*/

    public function messages()
    {
        return [
            'password.required' => 'Пароль не может быть пустым',
            'password.min' => 'Пароль не может быть менее 3 символов',
            'email.required' => 'Email не может быть пустым',
            'email.email' => 'Email не верный'
        ];
    }
}

