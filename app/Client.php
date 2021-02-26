<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function addresses(){
        return $this->hasMany(Address::class);
    }

    public function balances(){
        return $this->hasMany(Balance::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class)->withPivot('expire_date');
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
