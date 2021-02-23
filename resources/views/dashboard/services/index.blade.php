@extends('dashboard.layouts.app')

@section('content')

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <div class="row">
          <div class="col-12">
    
            <div class="kt-portlet">
    
              <div class="kt-portlet__head">
                <div class="kt-portlet__head-label d-flex justify-content-between w-100">
                    <h3 class="kt-portlet__head-title"> قائمة الاسعار </h3>
                    <div class="btns-box">
                      <a href="{{ route('services.create') }}" type="button" class="btn btn-outline-success mx-1 mb-1"> <i class="la la-plus"></i> إضافة قائمة اسعار  </a>
                    </div>
                </div>
              </div>
    
            <!--START: NEW USER DATATABLE-->
            <div class="kt-portlet__body kt-portlet__body--fit">
    
              <table class="standard table table-responsive-sm" width="100%">
                <thead class="thead-dark">
                  <tr>
                    <th>#</th>
                    <th> القسم </th>
                    <th> الصورة </th>
                    <th> الخدمات </th>
                    <th class="action">إجراء</th>
    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($services as $index => $service)
                    <tr>
                        <td>{{ $index + 1}}</td>
                        <td> {{ $service->translate('ar')->name }} - {{ $service->translate('en')->name }} </td>
                        <td> 
                        <span class="kt-media kt-media--lg">
                            <img src="{{ $service->image_path }}" alt="image">
                        </span>
                        </td>
                        <td> 
                        <button type="button" class="kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="modal" data-target="#serv-{{$service->id}}"  title="تعديل">
                            <i class="la la-list"></i>
                        </button>
                        </td>
                        <td align="right">

        
                        @include('dashboard.layouts.includes.partials._edit_btn',['route' => route('services.edit',['service'=>$service])])
                        @include('dashboard.layouts.includes.partials._delete_btn',['route' => route('services.destroy',['service'=>$service])])

                        </td>
                    </tr>    
                                        
                    @endforeach

                </tbody>
              </table>

              <!--begin:: Services Modal-->
              @foreach ($services as $index => $service)
              <div class="modal fade" id="serv-{{$service->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"> خدمات {{ $service->translate('ar')->name }} </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      </button>
                    </div>
                    <div class="modal-body">
                      <!-- START:: SERVICES TABLE -->
                      <table class="standard table table-responsive-sm" width="100%">
                        <thead class="thead-dark">
                          <tr>
                            <th>#</th>
                            <th> الخدمة </th>
                            <th> سعر عادى </th>
                            <th> سعر مستعجل </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($service->prices as $index => $price)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td> {{ $price->translate('ar')->name }} - {{ $price->translate('en')->name }} </td>
                                <td> {{ $price->normal_cost }} </td>
                                <td> {{ $price->quick_cost }} </td>
                            </tr>   
                            @endforeach
                        </tbody>
                      </table>
                      <!-- END:: SERVICES TABLE -->
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
                <!--end:: Services Modal-->

            </div>
            <!--END: NEW USER DATATABLE-->
    
          </div>  
        </div>
    
        </div>
      <!-- END:: CONTENT -->
    
    </div>
    

@endsection
