<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            //
            'name'=> 'required|unique:users',
            'email'=> 'required|unique:users',
            'password'=> 'required|unique:users',
        ];
    }
    public function messages()
{
    return [
        'name.required' => 'Username is required , kindly check the field',
        'email.required' => 'Email is required , kindly check the field',
        'password.required' => 'Password is required , kindly check the field',

    ];
}
    public function attributes()
    {
        return [
            'name' => 'Username',
            'email' => 'Email',
            'password' => 'Password',

        ];
    }
}
