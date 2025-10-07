<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Validator;

class LoginRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public static function rules(): array
    {
        return [
            'email' => 'required|email:rfc,strict',
            'password' => 'required|string|min:8',
        ];
    }

    public static function messages(): array
    {
        return [
            'email' => 'A valid email is required.',
            'password' => 'A password is required of at least 8 characters.',
        ];
    }

    public static function validator($data)
    {
        return Validator::make($data, self::rules(), self::messages());
    }
}
