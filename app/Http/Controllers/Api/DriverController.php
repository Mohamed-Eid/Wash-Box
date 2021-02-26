<?php

namespace App\Http\Controllers\Api;

use App\Driver;
use App\Http\Controllers\Controller;
use App\Http\Resources\DriverResource;
use App\Http\Resources\OrderResource;
use App\Order;
use Illuminate\Http\Request;
use App\Traits\ApiResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
class DriverController extends Controller
{
    use ApiResponse;

    
    public function login(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validate->fails())
        {
            return $this->errorResponse($validate->errors()->all(), 200);
        }
        
        $driver = Driver::where('email',$request->email)->first();

        if($driver)
        {
            if(Hash::check($request->password, $driver->password))
            {
                $driver->api_token = \Illuminate\Support\Str::random(100);
                $driver->save();
                return $this->successResponse(new DriverResource($driver), null ,200);
            }              
        }
        return $this->errorResponse([__('auth.failed')], 200);
    }

    public function profile(Request $request)
    {
        $driver = $request->driver;

        return $this->successResponse( new DriverResource($driver), null ,200);
    }

    public function update(Request $request)
    {
        $driver = $request->driver;
        $rules = [
            'name'        => 'required',            
            ];
        $rules += [
            'mobile' => ['required' ,Rule::unique('drivers','mobile')->ignore($driver->mobile,'mobile')],
            'email'  => ['required' ,Rule::unique('drivers','email')->ignore($driver->email,'email')]
        ];
        
        $validate = Validator::make($request->all(),$rules);

        if($validate->fails())
        {
            return $this->errorResponse($validate->errors()->all() );
        }
        
        $data = $request->except(['image']);

        if($request->has('image') && $request->image != null){
            delete_image('drivers',$driver->image);
            $data['image'] = upload_image_base64('drivers',$request->image);
        }

        $driver->update($data);
        
        return $this->successResponse(new DriverResource($driver));
    }

    public function update_fcm(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'fcm_token' => 'required',
        ]);

        if($validate->fails())
        {
            return $this->errorResponse($validate->errors()->all());
        }
        

        $driver = $request->driver;

        $driver->update([
            'fcm_token' => $request->fcm_token
        ]);
        return $this->successResponse(new DriverResource($driver));

    }
    

    public function change_password(Request $request)
    {
        //validateion
        $validate = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password'     => 'required',
        ]);
        if($validate->fails())
        {
            return $this->errorResponse($validate->errors()->all());
        }


        $driver = $request->driver;

        if(Hash::check($request->old_password, $driver->password))
        {
            $driver->update([
                'password' => bcrypt($request->new_password),
            ]);
            return $this->successResponse(  null ,200);
        }
        return $this->errorResponse( [__('api.wrong_password')]);
    }

    public function free_orders(Request $request){

        $orders = OrderResource::collection(Order::where('area_id',$request->driver->area_id)->where('status',0)->get());
        return $this->successResponse( $orders, null ,200);
    }
    
    public function order_change_status(Request $request, Order $order){

        $order->update([
            'status' => $request->status,
        ]);

        $order->drivers()->sync($request->driver->id);

        return $this->successResponse( new OrderResource($order), null ,200);
    }
    //TODO:: Send notifications

    public function driver_orders(Request $request){
        return $this->successResponse( OrderResource::collection($request->driver->orders), null ,200);
    }

}
