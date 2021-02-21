<?php

namespace App;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Area extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['name'];

    protected $guarded = [];

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function addresses(){
        return $this->hasMany(Address::class);
    }
}