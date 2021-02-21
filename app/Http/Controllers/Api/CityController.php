<?php

namespace App\Http\Controllers\Api;

use App\City;
use App\Http\Controllers\Controller;
use App\Http\Resources\AreaResource;
use App\Http\Resources\CityResource;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class CityController extends Controller
{
    use ApiResponse;
    
    public function index(){
        return $this->successResponse(CityResource::collection(City::all()));    
    }

    public function show(City $city){
        return $this->successResponse(AreaResource::collection($city->areas));    
    }
}
