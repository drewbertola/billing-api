<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Validator;

class PaymentRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public static function rules(): array
    {
        return [
            'customerId' => 'required|integer',
            'amount' => 'numeric',
            'date' => 'required|date',
            'method' => 'in:Cash,Check,Card,Transfer',
            'number' => 'string',
        ];
    }

    public static function messages(): array
    {
        return [
            'date' => 'Please provide a date.'
        ];
    }

    public static function validator($data)
    {
        return Validator::make($data, self::rules(), self::messages());
    }
}
