@extends('dashboard.layouts.app')

@section('content')
<!-- START:: CONTENT -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="row">
        <div class="col-12">

            <!--START:: ROLES PORTEL-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title"> اضافة قائمة اسعار </h3>
                    </div>
                </div>

                <!--START:: ADD PRICE LIST FORM-->
                <form class="kt-form pb-0 p-3" method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
                    <div class="row">
                        @csrf
                        <div class="form-group col-12 col-md-4">
                            <div class="row">
                                <label class="col-form-label col-12"> اسم القائمه باللغة العربيه </label>
                                <div class="input-group-prepend col-12">
                                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                    </span>
                                    <input type="text" name="ar[name]"  class="form-control" placeholder=" اسم القائمه باللغة العربيه ">
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-12 col-md-4">
                            <div class="row">
                                <label class="col-form-label col-12"> اسم القائمه باللغة الانجليزيه </label>
                                <div class="input-group-prepend col-12">
                                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                    </span>
                                    <input type="text" name="en[name]" class="form-control"
                                        placeholder=" اسم القائمه باللغة الانجليزيه ">
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-12 col-md-4">
                            <div class="row">
                                <label class="col-form-label col-12"> الصورة </label>
                                <div class="input-group-prepend col-12">
                                    <input type="file" name="icon" class="offer-image border d-block p-2 col-12">
                                </div>
                                <div class="offer-pic mt-3 mx-3">
                                    <div class="overlay">
                                        <i id="remove-offer-pic" class="la la-times-circle text-danger"></i>
                                    </div>
                                    <img src="assets/pics/fav-icon.png" alt="..." class="offer-image-preview">
                                </div>
                            </div>
                        </div>

                        <div id="kt_repeater_1" class="form-group col-12 col-md-6 ">

                            <div class="form-group form-group-last row mb-3">
                                <div>
                                    <a href="javascript:;" data-repeater-create=""
                                        class="btn btn-bold btn-md btn-label-brand">
                                        <i class="la la-plus"></i> الاسعار
                                    </a>
                                </div>
                            </div>

                            <div class="form-group form-group-last row" id="kt_repeater_1">
                                <div data-repeater-list="prices" class="col-12">
                                    <div data-repeater-item class="form-group row align-items-center">

                                        <div class="col-6 my-2">
                                            <div class="kt-form__group--inline">
                                                <div class="kt-form__label">
                                                    <label>اسم الخدمة باللغة العربيه</label>
                                                </div>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="la la-bookmark"
                                                            style="font-size: 18px"></i> </span>
                                                    <input type="text" name="ar_name" class="form-control"
                                                        placeholder=" اسم الخدمة باللغة العربيه ">
                                                </div>
                                            </div>
                                            <div class="d-md-none kt-margin-b-10"></div>
                                        </div>

                                        <div class="col-6 my-2">
                                            <div class="kt-form__group--inline">
                                                <div class="kt-form__label">
                                                    <label>اسم الخدمة باللغة الانجليزيه</label>
                                                </div>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="la la-bookmark"
                                                            style="font-size: 18px"></i> </span>
                                                    <input type="text" name="en_name" class="form-control"
                                                        placeholder=" اسم الخدمة باللغة الانجليزيه ">
                                                </div>
                                            </div>
                                            <div class="d-md-none kt-margin-b-10"></div>
                                        </div>

                                        <div class="col-6 my-2">
                                            <div class="kt-form__group--inline">
                                                <div class="kt-form__label">
                                                    <label class="kt-label m-label--single"> سعر عادى </label>
                                                </div>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="la la-dollar"
                                                            style="font-size: 18px"></i> </span>
                                                    <input type="number" name="normal_cost" min="0" class="form-control"
                                                        placeholder="  سعر عادى ">
                                                </div>
                                            </div>
                                            <div class="d-md-none kt-margin-b-10"></div>
                                        </div>

                                        <div class="col-6 my-2">
                                            <div class="kt-form__group--inline">
                                                <div class="kt-form__label">
                                                    <label class="kt-label m-label--single">سعر مستعجل</label>
                                                </div>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="la la-dollar"
                                                            style="font-size: 18px"></i> </span>
                                                    <input type="number" name="quick_cost" min="0" class="form-control"
                                                        placeholder="  سعر مستعجل ">
                                                </div>
                                            </div>
                                            <div class="d-md-none kt-margin-b-10"></div>
                                        </div>

                                        <div class="col-4 my-2">
                                            <a href="javascript:;" data-repeater-delete=""
                                                class="btn-sm btn btn-label-danger btn-bold">
                                                <i class="la la-trash-o"></i>
                                                حذف
                                            </a>
                                        </div>
                                    </div>
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
                <!--END::ADD PRICE LIST FORM-->

            </div>
            <!--END:: ROLES PORTEL-->

        </div>
    </div>

</div>
<!-- END:: CONTENT -->

@endsection

@push('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('.default-ar'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

    </script>

    <script>
        ClassicEditor
            .create(document.querySelector('.default-en'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

    </script>
    <!--begin::Page Scripts(used by this page) -->

    <script>
        function readURL(input) {

            el = 'input[name=' + "'" + input.name + "'" + ']';
            $(el).on('change', function () {
                console.log(el + ' - ' + 'changed');
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
    <script src="{{ asset('assets/js/pages/crud/file-upload/ktavatar.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/form-repeater.js') }}"
        type="text/javascript"></script>


@endpush
