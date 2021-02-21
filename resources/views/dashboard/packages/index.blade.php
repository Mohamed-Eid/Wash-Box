@extends('dashboard.layouts.app')

@section('content')

<!-- START:: CONTENT -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="row">
        <div class="col-12">
            <!--START::PORTEL-->
            <div class="kt-portlet">

                <!-- START:: TITLE -->
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label d-flex justify-content-between w-100">
                        <h3 class="kt-portlet__head-title"> قائمة الباقات </h3>
                        <div class="btns-box">
                            <a href="{{ route('packages.create') }}" type="button"
                                class="btn btn-outline-success mx-1 mb-1"> <i class="la la-plus"></i> اضافة مشروع </a>
                        </div>
                    </div>
                </div>
                <!--END:: TITLE-->

                <!--START: NEW package DATATABLE-->
                <div class="kt-portlet__body kt-portlet__body--fit">

                    <table class="standard table table-responsive-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th class="text-center" style="width: 130px !important;"> الاسم </th>
                                <th> الباقة </th>
                                <th> السعر </th>
                                <th> الخصم </th>
                                <th> مدة الاشتراك </th>
                                <th> عدد القطع </th>
                                <th> عدد الزيارات </th>
                                <th> الصورة </th>
                                <th class="action" style="width: 85px !important;">إجراء</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($packages as $index => $package)
                                <tr>
                                    <td>{{$index + 1 }}</td>
                                    <td> {{ $package->name }} </td>
                                    <td> {{ $package->price }} </td>
                                    <td> {{ $package->discount }} </td>
                                    <td> {{ $package->subscribtion_term }} </td>
                                    <td> {{ $package->number_of_pieces }}</td>
                                    <td> {{ $package->number_of_visits }} </td>
                                    <td>
                                        <span class="kt-media kt-media--lg">
                                            <img src="{{ $package->image_path }}" alt="image">
                                        </span>
                                    </td>
                                    <td align="right" class="d-flex">
                                        @include('dashboard.layouts.includes.partials._edit_btn',['route' => route('packages.edit',['package'=>$package])])
                                        @include('dashboard.layouts.includes.partials._delete_btn',['route' => route('packages.destroy',['package'=>$package])])
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
                <!--END: NEW package DATATABLE-->

            </div>
        </div>

    </div>
    <!-- END:: CONTENT -->
</div>

@endsection
