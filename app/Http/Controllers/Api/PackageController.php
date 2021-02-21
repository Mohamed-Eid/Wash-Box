<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClientResource;
use App\Http\Resources\PackageResource;
use App\Package;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    use ApiResponse;

    public function index(){
        return $this->successResponse( PackageResource::collection(Package::all()), null ,200);
    }
    public function show(Package $package){
        return $this->successResponse( new PackageResource($package), null ,200);
    }

    public function subscribe(Request $request, Package $package){
        $client = $request->client;
        //TODO:: check for coupon and discount
        if(!( $client->balance >= $package->price )){
            return $this->errorResponse( [__('site.not_enough_balance')], null ,201);
        }

        $client->packages()->attach([
            $package->id =>
            ['expire_date' => date('Y-m-d', strtotime('+'.$package->subscription_term.' month'))]
        ]);
        
        return $this->successResponse( new ClientResource($client), null ,201);

    }

    public function my_packages(Request $request){
        return $this->successResponse( PackageResource::collection($request->client->packages), null ,200);
    }
}
