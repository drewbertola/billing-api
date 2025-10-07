<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Validator;

class CustomerRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public static function rules(): array
    {
        return [
            'name' => 'required|max:64',
            'bAddress1' => 'max:64',
            'bAddress2' => 'max:64',
            'bCity' => 'max:32',
            'bState' => 'max:32',
            'bZip' => 'max:16',
            'sAddress1' => 'max:64',
            'sAddress2' => 'max:64',
            'sCity' => 'max:32',
            'sState' => 'max:32',
            'sZip' => 'max:16',
            'phoneMain' => 'max:16',
            'fax' => 'max:16',
            'billingContact' => 'max:32',
            'billingEmail' => 'max:64',
            'billingPhone' => 'max:16',
            'primaryContact' => 'max:32',
            'primaryEmail' => 'max:64',
            'primaryPhone' => 'max:16',
            'archive' => 'in:Y,N',
        ];
    }

    public static function messages(): array
    {
        return [
            'name' => 'Customer Name and limited to characters.',
            'bAddress1' => 'Limited to 64 characters.',
            'bAddress2' => '64 characters.',
            'bCity' => 'Limited to 32 characters.',
            'bState' => 'Limited to 32 characters.',
            'bZip' => 'Limited to 16 characters.',
            'sAddress1' => 'Limited to 64 characters.',
            'sAddress2' => 'Limited to 64 characters.',
            'sCity' => 'Limited to 32 characters.',
            'sState' => 'Limited to 32 characters.',
            'sZip' => 'Limited to 16 characters.',
            'phoneMain' => 'Limited to 16 characters.',
            'fax' => 'Limited to 16 characters.',
            'billingContact' => 'Limited to 32 characters.',
            'billingEmail' => 'Limited to 64 characters.',
            'billingPhone' => 'Limited to 16 characters.',
            'primaryContact' => 'Limited to 32 characters.',
            'primaryEmail' => 'Limited to 64 characters.',
            'primaryPhone' => 'Limited to 16 characters.',
        ];
    }

    public static function validator($data)
    {
        return Validator::make($data, self::rules(), self::messages());
    }
}
