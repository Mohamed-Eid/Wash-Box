<?php

namespace App\Http\Controllers\Dashboard;

use App\Area;
use App\City;
use App\Driver;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::all();
        return view('dashboard.drivers.index',compact('drivers'));
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $areas  = Area::all();
        return view('dashboard.drivers.create',compact('cities','areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|unique:drivers',
            'mobile'    => 'required|unique:drivers',
            'password' => 'required',
            'image'    => 'required',
            'area'  => 'required',
        ]);

        $data = $request->except(['area']);
        $data['password'] = bcrypt($data['password']);
        $data['image']    = \upload_image_without_resize('drivers',$request->image);
        $data['city_id']  = Area::find($request->area)->city->id;
        $data['area_id']  = $request->area;
        
        $driver = Driver::create($data);

        if($driver)
            return redirect()->back()->with('success','تم إضافة سائق بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        $areas  = Area::all();
        return view('dashboard.drivers.edit',compact('driver','areas'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|unique:drivers,email,'.$driver->id,
            'mobile'    => 'required|unique:drivers,mobile,'.$driver->id,
            'area'  => 'required',
        ]);

        $data = $request->except(['area','password','image']);
        $data['city_id']  = Area::find($request->area)->city->id;
        $data['area_id']  = $request->area;
        
        if($request->has('password') && $request->password != null ){
            $data['password'] = bcrypt($request->password);
        }

        if($request->has('image')){
            delete_image('drivers',$driver->image);
            $data['image']    = \upload_image_without_resize('drivers',$request->image);
        }


        $driver->update($data);

        if($driver)
            return redirect()->back()->with('success','تم تعديل سائق بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        if ($driver->image != 'default.png' ) {
            delete_image('drivers',$driver->image);
        }

        $driver->delete();

        return redirect()->back()->with('success','تم الحذف بنجاح');     
    }
}
