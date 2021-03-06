<?php

namespace App;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Price extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['name'];

    protected $guarded = [];

    public function service(){
        return $this->belongsTo(Service::class);
    }
    
}
