<?php

namespace App\Http\Controllers\Api;

use App\Address;
use App\Http\Controllers\Controller;
use App\Http\Resources\AddressResource;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AddressController extends Controller
{

    use ApiResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $this->successResponse( AddressResource::collection($request->client->addresses) );
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $validate = Validator::make($request->all(),[
            'city_id'           => 'required',
            'area_id'           => 'required',
            'lat'               => 'required',
            'lng'               => 'required',
            'street'            => 'required',
            'build'             => 'required',
            'floor'             => 'required',
            'apartment_number'  => 'required',
            'phone'             => 'required',
        ]);
    
        if($validate->fails())
        {
            return $this->errorResponse($validate->errors()->all(), 200);
        }
    
        $data = $request->all();
        
        $address = $request->client->addresses()->create($data);
    
        if($address)
        {            
            return $this->successResponse( new AddressResource($address), 201);
        }
    
        return $this->errorResponse( __('api.back_end_error') ,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        return $this->successResponse( new AddressResource($address), 201);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        $validate = Validator::make($request->all(),[
            'city_id'           => 'required',
            'area_id'           => 'required',
            'lat'               => 'required',
            'lng'               => 'required',
            'street'            => 'required',
            'build'             => 'required',
            'floor'             => 'required',
            'apartment_number'  => 'required',
            'phone'             => 'required',
        ]);
    
        if($validate->fails())
        {
            return $this->errorResponse($validate->errors()->all(), 200);
        }
    
        $data = $request->all();
            
        if($address->update($data))
        {            
            return $this->successResponse( new AddressResource($address), 201);
        }
    
        return $this->errorResponse( [__('api.back_end_error')] ,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        $address->delete();
        return $this->successResponse( null, 200);

    }
}
