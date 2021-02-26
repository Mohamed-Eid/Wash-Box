<?php

namespace App\Http\Controllers\Api;

use App\Address;
use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use Illuminate\Http\Request;
use App\Traits\ApiResponse;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    use ApiResponse;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [
            'in_process' => OrderResource::collection($request->client->orders->where('status','<','6')),
            'finished'   => OrderResource::collection($request->client->orders->where('status','6'))
        ];
        return $this->successResponse( $data, null ,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'receipt_date' => 'required',
            'receipt_time' => 'required',
            'address_id'   => 'required',
        ]);

        if($validate->fails())
        {
            return $this->errorResponse($validate->errors()->all());
        }


        $client = $request->client;

        $data = $request->all();

        $address= Address::find($request->address_id);

        $data['area_id'] = $address->area_id;
        $data['city_id'] = $address->city_id;

        $order = $client->orders()->create($data);

        return $this->successResponse( new OrderResource($order), null ,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
