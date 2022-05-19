<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    public function toArray($request = null)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'accessed_at' => $this->accessed_at?->format('d.m.Y H:i'),
            'accessed_at_sortable' => $this->accessed_at->timestamp,
        ];
    }
}
