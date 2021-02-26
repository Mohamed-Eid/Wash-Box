<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function address(){
        return $this->belongsTo(Address::class);
    }

    public function drivers()
    {
        return $this->belongsToMany(Driver::class, 'driver_order', 
        'order_id', 'driver_id');
    }
}
