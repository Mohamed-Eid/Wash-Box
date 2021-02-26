<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $guarded = [];

    protected  $appends = ['image_path'];

    public  function getImagePathAttribute(){
        return asset('uploads/drivers/'.$this->image);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'driver_order', 
         'driver_id','order_id');
    }
}
