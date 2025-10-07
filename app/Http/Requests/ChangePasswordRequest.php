<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Validator;

class ChangePasswordRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public static function rules(): array
    {
        return [
            'email' => 'required|email',
            'token' => 'string|between:6,12',
            'password' => 'string|min:8',
            'newPassword' => 'required|string|min:8',
            'newPassword2' => 'required|string|min:8',
        ];
    }

    public static function messages(): array
    {
        return [
            'password' => 'Password must be at least 8 characters.',
            'newPassword' => 'New Password is required of at least 8 characters.',
            'newPassword2' => 'Confirm New Password is required of at least 8 characters.',
        ];
    }

    public static function validator($data)
    {
        return Validator::make($data, self::rules(), self::messages());
    }
}
