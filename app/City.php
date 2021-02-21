<?php

namespace App;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class City extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['name'];

    protected $guarded = [];

    public function areas(){
        return $this->hasMany(Area::class);
    }
    public function addresses(){
        return $this->hasMany(Address::class);
    }
}