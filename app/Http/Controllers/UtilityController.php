<?php

namespace App\Http\Controllers;

use App\Traits\HttpResponses;
use Illuminate\Support\Facades\DB;

class UtilityController extends Controller
{
    use HttpResponses;

    public function Completions()
    {
        $customers = DB::table('customer')
            ->select('id as value', 'name as label')
            ->orderByDesc('archive')
            ->orderBy('name')
            ->get();

        return  $this->success([
            "customerNames" => $customers,
            "methods" => [
                ["value" => "Cash", "label" => "Cash"],
                ["value" => "Card", "label" => "Card"],
                ["value" => "Check", "label" => "Check"],
                ["value" => "Transfer", "label" => "Transfer"]
            ]
        ]);
    }
}
