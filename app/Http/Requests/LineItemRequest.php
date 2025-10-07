<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Validator;

class LineItemRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public static function rules(): array
    {
        return [
            'invoiceId' => 'required|integer',
            'price' => 'numeric',
            'units' => 'max:16',
            'quantity' => 'numeric',
            'description' => 'max:64',
        ];
    }

    public static function messages(): array
    {
        return [
            'price' => 'Must be a number.',
            'units' => 'Limited to 16 characters.',
            'quantity' => 'Must be a number.',
            'description' => 'Limited to 64 characters.'
        ];
    }

    public static function validator($data)
    {
        return Validator::make($data, self::rules(), self::messages());
    }
}
