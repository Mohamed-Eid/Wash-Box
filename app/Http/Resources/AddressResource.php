<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
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
            'id'                => $this->id ,
            'city'              => new CityResource($this->city),
            'area'              => new AreaResource($this->area),
            'name'              => $this->name,
            'lat'               => $this->lat,
            'lng'               => $this->lng,
            'street'            => $this->street,
            'build'             => $this->build,
            'floor'             => $this->floor,
            'apartment_number'  => $this->apartment_number,
            'phone'             => $this->phone,
            'notes'             => $this->notes ,
        ];
    }
}
