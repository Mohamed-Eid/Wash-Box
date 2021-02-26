<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DriverResource extends JsonResource
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
            'id'                   => $this->id,
            'name'                 => $this->name,
            'email'                => $this->email,
            'mobile'               => $this->mobile,
            'image'                => $this->image_path,
            'api_token'            => $this->api_token,
            'fcm_token'            => $this->fcm_token,
        ];
    }
}
