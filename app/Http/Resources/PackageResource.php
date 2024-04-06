<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Resources\Json\JsonResource;

class PackageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'tracking_number' => $this->tracking_number,
            'vendor' => $this->vendor,
            'weight' => $this->weight .' (lbs)',
            'status' => $this->status,
            'order_description' => $this->order_description,
            'courier' => $this->courier,
            'usd_value' => $this->usd_value,
            "invoice_path" => Storage::url($this->invoice_path),
            'created_at' => $this->created_at->format('M d, Y'),
            'updated_at' => $this->updated_at->format('M d, Y')
        ];
    }
}
