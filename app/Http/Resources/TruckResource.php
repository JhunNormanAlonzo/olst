<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TruckResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'plate_number' => $this->plate_number,
            'status' => $this->status,
            'created_at' => $this->created_at->toFormattedDateString()
        ];
//        return parent::toArray($request);
    }
}