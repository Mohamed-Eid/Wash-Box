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
                        <h3 class="kt-portlet__head-title"> اضافة باقة جديدة </h3>
                    </div>
                </div>
                <!--END:: TITLE-->

                <!--START:: ADD NEW EMPLOYEE FORM-->
                <form class="kt-form p-3 " method="POST" action="{{ route('packages.store') }}" enctype="multipart/form-data">
                    <div class="row">
                        @csrf


                        <div class="form-group col-12 col-md-6">
                            <div class="row">
                                <label class="col-form-label col-12">اسم الباقة باللغة العربية</label>
                                <div class="input-group-prepend col-12">
                                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                    </span>
                                    <input type="text" name="ar[name]" class="form-control {{ input_has_error('ar.name',$errors) }}" placeholder="الإسم">
                                    @include('dashboard.layouts.includes.partials._input_validate',['field' => 'ar.name'])

                                </div>
                            </div>
                        </div>

                        <div class="form-group col-12 col-md-6">
                            <div class="row">
                                <label class="col-form-label col-12">اسم الباقة باللغة الانجليزية</label>
                                <div class="input-group-prepend col-12">
                                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                    </span>
                                    <input type="text" name="en[name]" class="form-control {{ input_has_error('ar.name',$errors) }}" placeholder="الإسم">
                                    @include('dashboard.layouts.includes.partials._input_validate',['field' => 'en.name'])
                                </div>
                            </div>
                        </div>


                        <div class="form-group col-12 col-md-6">
                            <div class="row">
                              <label class="col-form-label col-12"> السعر </label>
                              <div class="input-group-prepend col-12">
                                <span class="input-group-text"> <i class="la la-dollar" style="font-size: 18px"></i> </span>
                                <input type="number" min="0" name="price" class="form-control" placeholder=" السعر ">
                              </div>
                            </div>
                          </div>
            
                          <div class="form-group col-12 col-md-6">
                            <div class="row">
                              <label class="col-form-label col-12"> الخصم </label>
                              <div class="input-group-prepend col-12">
                                <span class="input-group-text"> <i class="la la-dollar" style="font-size: 18px"></i> - </span>
                                <input type="number" min="0" name="discount" class="form-control" placeholder=" الخصم ">
                              </div>
                            </div>
                          </div>
            
                          <div class="form-group col-12 col-md-6">
                            <div class="row">
                              <label class="col-form-label col-12"> مدة الاشتراك بالشهور </label>
                              <div class="input-group-prepend col-12">
                                <span class="input-group-text"> <i class="la la-calendar" style="font-size: 18px"></i></span>
                                <input type="number" min="0" name="subscription_term" class="form-control" placeholder=" مدة الاشتراك ">
                              </div>
                            </div>
                          </div>
            
                          <div class="form-group col-12 col-md-6">
                            <div class="row">
                              <label class="col-form-label col-12"> عدد القطع </label>
                              <div class="input-group-prepend col-12">
                                <span class="input-group-text"> <i class="la la-bookmark" style="font-size: 18px"></i></span>
                                <input type="number" min="0" name="number_of_pieces" class="form-control" placeholder=" عدد القطع ">
                              </div>
                            </div>
                          </div>
            
                          <div class="form-group col-12 col-md-6">
                            <div class="row">
                              <label class="col-form-label col-12"> عدد الزيارات </label>
                              <div class="input-group-prepend col-12">
                                <span class="input-group-text"> <i class="la la-bookmark" style="font-size: 18px"></i></span>
                                <input type="number" min="0" name="number_of_visits" class="form-control" placeholder=" عدد الزيارات ">
                              </div>
                            </div>
                          </div>
            

                        <div class="form-group col-12">
                            <div class="row">
                                <label class="col-form-label col-12"> الوصف باللغة العربية </label>
                                <div class="input-group-prepend col-12">
                                <textarea class="default-ar {{ input_has_error('ar.description',$errors) }}" name="ar[description]"></textarea>
                                @include('dashboard.layouts.includes.partials._input_validate',['field' => 'ar.description'])

                                </div>

                            </div>
                        </div>

                        <div class="form-group col-12">
                            <div class="row">
                                <label class="col-form-label col-12"> الوصف باللغة الانجليزية </label>
                                <div class="input-group-prepend col-12">
                                    <textarea class="default-en" name="en[description]"></textarea>
                                </div>
                            </div>
                        </div>



                        <div class="form-group col-12 col-md-12">
                            <div class="row">
                                <label class="col-form-label col-12">صورة الباقة</label>
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
        ClassicEditor
            .create( document.querySelector( '.default-ar' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
        } );
    </script>

<script>
    ClassicEditor
        .create( document.querySelector( '.default-en' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
    } );
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
