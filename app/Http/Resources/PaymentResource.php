<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
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
            'amount' => $this->amount,
            'date' => $this->date,
            'method' => $this->method,
            'number' => $this->number,
            'customerName' => $this->customer->name,
            'customerBillingEmail' => $this->customer->billingEmail,
        ];
    }
}
