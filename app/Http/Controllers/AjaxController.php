<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function areas(City $city){
        return view('dashboard.drivers.areas_ajax',['areas'=>$city->areas]);
    }
}
