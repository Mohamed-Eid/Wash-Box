<?php

namespace App;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Package extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['name', 'description'];
    protected  $appends = ['image_path'];

    protected $guarded = [];
    
    public  function getImagePathAttribute(){
        return asset('uploads/packages/'.$this->image);
    }

    public function clients()
    {
        return $this->belongsToMany(Client::class)->withPivot('expire_date');;
    }
}
