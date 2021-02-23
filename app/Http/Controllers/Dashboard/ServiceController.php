<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateServiceRequest;
use App\Price;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('dashboard.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateServiceRequest $request)
    {
        $service_request = $request->except('_token','prices','icon');
        $service_request['icon'] = upload_image_without_resize('services',$request->icon);
        $service = Service::create($service_request);

        //TODO:: validate heighlights , videos

        if($request->prices){
            foreach ($this->process_prices($request) as $price) {
                $service->prices()->create($price);
            }
        }
        
        return redirect()->back()->with('success','تمت الإضافة بنجاح');
    }

    private function process_prices(Request $request){
        $data = [];
        foreach ($request->prices as $key => $price) {
            $data[$key]['ar']['name']  = $price['ar_name'];
            $data[$key]['en']['name']  = $price['en_name'];
            $data[$key]['quick_cost']  = $price['quick_cost'];
            $data[$key]['normal_cost'] = $price['normal_cost'];
        }
        return $data;
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
    public function edit(Service $service)
    {
        return view('dashboard.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        // dd($request->all());
        $service_request = $request->except('_token','prices','old_prices','icon');
        if($request->icon){
            $service_request['icon'] = upload_image_without_resize('services',$request->icon);
        }

        
        $service->update($service_request);

        //TODO:: validate heighlights , videos
        if($request->prices){
            foreach ($this->process_prices($request) as $price) {
                $service->prices()->create($price);
            }
        }
        

        
        if($request->old_prices){
            foreach ($request->old_prices as $key => $value) {
                $data = [];
                $old_inv = Price::find($key);
                $data['ar']['name']  = $value['ar_name'];
                $data['en']['name']  = $value['en_name'];
                $data['quick_cost']  = $value['quick_cost'];
                $data['normal_cost'] = $value['normal_cost'];

                $old_inv->update($data);
            }
        }
        

        return redirect()->back()->with('success','تم الحفظ بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if ($service->icon != 'default.png' ) {
            delete_image('projects',$service->icon);
        }

        $service->delete();

        return redirect()->back()->with('success','تم الحذف بنجاح');  
    }
}
