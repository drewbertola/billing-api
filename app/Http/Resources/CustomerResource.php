<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
            'attributes' => [
                'name' => $this->name,
                'bAddress1' => $this->bAddress1,
                'bAddress2' => $this->bAddress2,
                'bCity' => $this->bCity,
                'bState' => $this->bState,
                'bZip' => $this->bZip,
                'sAddress1' => $this->sAddress1,
                'sAddress2' => $this->sAddress2,
                'sCity' => $this->sCity,
                'sState' => $this->sState,
                'sZip' => $this->sZip,
                'phoneMain' => $this->phoneMain,
                'fax' => $this->fax,
                'billingContact' => $this->billingContact,
                'billingEmail' => $this->billingEmail,
                'billingPhone' => $this->billingPhone,
                'primaryContact' => $this->primaryContact,
                'primaryEmail' => $this->primaryEmail,
                'primaryPhone' => $this->primaryPhone,
                'taxRate' => $this->taxRate,
                'archive' => $this->archive,
            ],
        ];
    }
}
