<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PackageResource extends JsonResource
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
            'id'                => $this->id,
            'name'              => $this->name,
            'description'       => $this->description,
            'price'             => $this->price,
            'discount'          => $this->discount,
            'image'             => $this->image_path,
            'subscription_term' => $this->subscription_term,
            'number_of_pieces'  => $this->number_of_pieces,
            'number_of_visits'  => $this->number_of_visits,
            'badge'             => 'most_ordered',
            'expire_date'       => $this->pivot->expire_date ?? null,
        ];
    }
}
