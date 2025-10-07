<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LineItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => (string) $this->id,
            'invoiceId' => (string) $this->invoiceId,
            'price' => $this->price,
            'units' => $this->units,
            'quantity' => $this->quantity,
            'description' => $this->description,
            'relationships' => [
                'id' => (string) $this->invoice->id,
                'invoiceAmount' => $this->invoice->amount,
            ]
        ];
    }
}
