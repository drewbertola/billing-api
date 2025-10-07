<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
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
            'customerId' => (string) $this->customerId,
            'amount' => (string) $this->amount,
            'date' => $this->date,
            'emailed' => $this->emailed,
            'note' => $this->note,
            'customerName' => $this->customer->name,
            'customerBillingEmail' => $this->customer->billingEmail,
        ];
    }
}
