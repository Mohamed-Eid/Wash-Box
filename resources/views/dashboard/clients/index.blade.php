@extends('dashboard.layouts.app')

@section('content')

<!-- START:: CONTENT -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="row">
        <div class="col-12">

            <div class="kt-portlet">

                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label d-flex justify-content-between w-100">
                        <h3 class="kt-portlet__head-title"> قائمة العملاء </h3>
                    </div>
                </div>

                <!--START: CLIENTS DATATABLE-->
                <div class="kt-portlet__body kt-portlet__body--fit">

                    <table class="standard table table-responsive-sm" width="100%">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th> الاسم </th>
                                <th> رقم الهاتف </th>
                                <th> البريد الالكترونى </th>
                                <th> الرصيد </th>
                                <th> الصورة </th>
                                <th class="action">إجراء</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $index => $client)
                                <tr>
                                    <td> {{ $index + 1 }} </td>
                                    <td>
                                        <a href="{{ route('clients.show',$client) }}" class="kt-link kt-link--state kt-link--warning">
                                            {{ $client->name }} </a>
                                    </td>
                                    <td> {{ $client->mobile }}  </td>
                                    <td> {{ $client->email }}  </td>
                                    <td> {{ $client->balance }} </td>
                                    <td>
                                        <span class="kt-media kt-media--lg">
                                            <img src="{{ $client->image_path }}" alt="image">
                                        </span>
                                    </td>
                                    <td align="right">
                                        <a href="{{ route('clients.show',$client) }}" class="kt-badge kt-badge--outline kt-badge--success"
                                            data-skin="dark" data-toggle="kt-tooltip" title="تفاصيل">
                                            <i class="la la-expand"></i>
                                        </a>

                                        @include('dashboard.layouts.includes.partials._delete_btn',['route' => route('clients.destroy',['client'=>$client])])

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
                <!--END: CLIENTS DATATABLE-->

            </div>
        </div>

    </div>
    <!-- END:: CONTENT -->

</div>


@endsection
