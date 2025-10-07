<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Validator;

class RegisterRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public static function rules(): array
    {
        return [
            'name' => 'required|string|min:3',
            'email' => 'required|email:rfc,strict|unique:users,email',
            'password' => 'required|string|min:8',
            'password2' => 'required|string|min:8',
        ];
    }

    public static function messages(): array
    {
        return [
            'password' => 'Password of at least 8 characters is required.',
            'password2' => 'Confirm Password is required and must match Password.',
        ];
    }

    public static function validator($data)
    {
        return Validator::make($data, self::rules(), self::messages());
    }
}
