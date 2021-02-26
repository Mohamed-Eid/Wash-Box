<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'           => $this->id,
            'receipt_date' => $this->receipt_date,
            'receipt_time' => $this->receipt_time,
            'order_date'   => $this->created_at->format('Y-m-d'),
            'order_time'   => $this->created_at->format('H:i:s'),
            'type'         => get_type_text($this->type),
            'address'      => new AddressResource($this->address),
            'status'       => get_status_text($this->status),
        ];
    }
}
