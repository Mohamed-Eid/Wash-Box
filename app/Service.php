<?php

namespace App;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Service extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['name'];
    protected  $appends = ['image_path'];

    protected $guarded = [];
    
    public function prices(){
        return $this->hasMany(Price::class);
    }

    public  function getImagePathAttribute(){
        return asset('uploads/services/'.$this->icon);
    }
}
