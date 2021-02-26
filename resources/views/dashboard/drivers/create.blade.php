@extends('dashboard.layouts.app')

@section('content')
<!-- START:: CONTENT -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="row">
        <div class="col-12">

            <div class="kt-portlet">


                <!-- START:: TITLE -->
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label d-flex justify-content-between w-100">
                        <h3 class="kt-portlet__head-title"> اضافة سائق جديد </h3>
                    </div>
                </div>
                <!--END:: TITLE-->

                <!--START:: ADD NEW EMPLOYEE FORM-->
                <form class="kt-form p-3 " method="POST" action="{{ route('drivers.store') }}" enctype="multipart/form-data">
                    <div class="row">
                        @csrf


                        <div class="form-group col-12 col-md-6">
                            <div class="row">
                                <label class="col-form-label col-12">صورة السائق</label>
                                <div class="input-group-prepend col-12">
                                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                    </span>
                                    <input type="file" name="image" onchange="changeImagePreview(event);" class="form-control d-block {{ input_has_error('image',$errors) }}" placeholder="Image" >
                                    @include('dashboard.layouts.includes.partials._input_validate',['field' => 'image'])
                                </div>
                                <div class="border mt-2">
            
                                </div>
                            </div>
                        </div>


                        <div class="form-group col-12 col-md-6">
                            <div class="row">
                                <label class="col-form-label col-12">اسم السائق</label>
                                <div class="input-group-prepend col-12">
                                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                    </span>
                                    <input type="text" name="name" class="form-control {{ input_has_error('name',$errors) }}" placeholder="الإسم">
                                    @include('dashboard.layouts.includes.partials._input_validate',['field' => 'name'])

                                </div>
                            </div>
                        </div>

                        <div class="form-group col-12 col-md-6">
                            <div class="row">
                              <label class="col-form-label col-12">المدينه - المنطقه</label>
                              <div class="input-group-prepend col-12">
                                <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                                <select class="form-control kt-selectpicker" name="area" id="cities" data-size="7" data-live-search="true">
                                    @foreach ($areas as $area)
                                    <option value="{{ $area->id }}"> {{ $area->name . ' - '. $area->city->name }} </option>
                                    @endforeach
                                </select>
                              </div>
                            </div>
                        </div>



                        <div class="form-group col-12 col-md-6">
                            <div class="row">
                                <label class="col-form-label col-12">البريد الإلكترونى</label>
                                <div class="input-group-prepend col-12">
                                    <span class="input-group-text"> <i class="la la-at" style="font-size: 18px"></i>
                                    </span>
                                    <input type="text" name="email" class="form-control" placeholder="البريد الإلكترونى">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <div class="row">
                                <label class="col-form-label col-12">الهاتف</label>
                                <div class="input-group-prepend col-12">
                                    <span class="input-group-text"> <i class="la la-at" style="font-size: 18px"></i>
                                    </span>
                                    <input type="text" name="mobile" class="form-control" placeholder="رقم الهاتف">
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-12 col-md-6">
                            <div class="row">
                                <label class="col-form-label col-12"> كلمة المرور </label>
                                <div class="input-group-prepend col-12">
                                    <span class="input-group-text"> <i class="la la-lock" style="font-size: 18px"></i>
                                    </span>
                                    <input type="password" name="password" class="form-control" placeholder=" كلمة المرور">
                                </div>
                            </div>
                        </div>


                        <div class="form-group col-12 px-4">
                            <div class="input-group">
                                <div class="row">
                                    <button type="submit" class="btn btn-success"
                                        style="background-color:#17b978; border:none;">حفظ</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
                <!--END::ADD NEW EMPLOYEE FORM-->

            </div>
        </div>

    </div>

    <!-- END:: CONTENT -->
</div>
@endsection

@push('scripts')
    <script>
    $('#cities').on('change',function(){
        city_id = $( "#cities" ).val();
        var url = "{{ route('cities.ajax.show','') }}"+"/"+city_id;
        $.ajax({
            url: url,
            success: function (res) {
                $(document).find('#areas').empty();
                $(document).find('#areas').append(res);
            }
        });
    });        
    </script>






<!--begin::Page Scripts(used by this page) -->

<script>
    function readURL(input) {
        
        el = 'input[name='+ "'" + input.name + "'" +']';
        $(el).on('change', function () {
            console.log(el + ' - ' +'changed');
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = (e) => {
                    $(el).next('img').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            };
        });
    }
</script>
<script src="{{ asset('assets/js/pages/crud/file-upload/ktavatar.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/pages/crud/forms/widgets/form-repeater.js') }}" type="text/javascript"></script>


@endpush
