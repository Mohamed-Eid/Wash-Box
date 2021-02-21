<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="row">
      <div class="col-12">

        <div class="kt-portlet">

          <div class="kt-portlet__head">
            <div class="kt-portlet__head-label d-flex justify-content-between w-100">
                <h3 class="kt-portlet__head-title"> قائمة الاسعار </h3>
                <div class="btns-box">
                  <a href="AddPriceList.php" type="button" class="btn btn-outline-success mx-1 mb-1"> <i class="la la-plus"></i> إضافة قائمة اسعار  </a>
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
              <tr>
                <td>1</td>
                <td> قسم 1 </td>
                <td> 
                  <span class="kt-media kt-media--lg">
                    <img src="assets/pics/2.png" alt="image">
                  </span>
                </td>
                <td> 
                  <button type="button" class="kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="modal" data-target="#serv"  title="تعديل">
                    <i class="la la-list"></i>
                  </button>
                </td>
                <td align="right">
                  <button type="button" class="kt-badge kt-badge--outline kt-badge--primary" data-skin="dark" data-toggle="modal" data-target="#edit-cat"  title="تعديل">
                    <i class="la la-edit"></i>
                  </button>

                  <a href="#" class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حذف">
                    <i class="la la-trash"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>

          <!--begin:: Services Modal-->
          <div class="modal fade" id="serv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> خدمات قسم 1 </h5>
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
                      <tr>
                        <td>1</td>
                        <td> خدمة 1 </td>
                        <td> 100 </td>
                        <td> 150 </td>
                      </tr>

                      <tr>
                        <td>2</td>
                        <td> خدمة 2 </td>
                        <td> 80 </td>
                        <td> 120 </td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- END:: SERVICES TABLE -->
                </div>
              </div>
            </div>
          </div>
          <!--end:: Services Modal-->

          <!--begin:: Edit Modal-->
          <div class="modal fade" id="edit-cat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> تعديل </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  </button>
                </div>
                <div class="modal-body">
                  <!--START:: ADD PRICE LIST FORM-->
                  <form class="kt-form pb-0 p-3">
                    <div class="row">

                      <div class="form-group col-12 col-md-6">
                        <div class="row">
                          <label class="col-form-label col-12"> اسم الباقة </label>
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i> </span>
                            <input type="text" class="form-control" placeholder=" اسم الباقة ">
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-12 col-md-6">
                        <div class="row">
                          <label class="col-form-label col-12"> الصورة </label>
                          <div class="input-group-prepend col-12">
                            <input type="file" class="offer-image border d-block p-2 col-12">
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
                            <a href="javascript:;" data-repeater-create="" class="btn btn-bold btn-md btn-label-brand">
                              <i class="la la-plus"></i> اضافة خدمة
                            </a>
                          </div>
                        </div>

                        <div class="form-group form-group-last row" id="kt_repeater_1">
                          <div data-repeater-list="" class="col-12">
                            <div data-repeater-item class="form-group row align-items-center">

                              <div class="col-12 my-2">
                                <div class="kt-form__group--inline">
                                  <div class="kt-form__label">
                                    <label>اسم الخدمة</label>
                                  </div>
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="la la-bookmark" style="font-size: 18px"></i> </span>
                                    <input type="text" class="form-control" placeholder=" اسم الخدمة ">
                                  </div>
                                </div>
                                <div class="d-md-none kt-margin-b-10"></div>
                              </div>

                              <div class="col-12 my-2">
                                <div class="kt-form__group--inline">
                                  <div class="kt-form__label">
                                    <label class="kt-label m-label--single"> سعر عادى </label>
                                  </div>
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="la la-dollar" style="font-size: 18px"></i> </span>
                                    <input type="number" min="0" class="form-control" placeholder="  سعر عادى ">
                                  </div>
                                </div>
                                <div class="d-md-none kt-margin-b-10"></div>
                              </div>

                              <div class="col-12 my-2">
                                <div class="kt-form__group--inline">
                                  <div class="kt-form__label">
                                    <label class="kt-label m-label--single">سعر مستعجل</label>
                                  </div>
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="la la-dollar" style="font-size: 18px"></i> </span>
                                    <input type="number" min="0" class="form-control" placeholder="  سعر مستعجل ">
                                  </div>
                                </div>
                                <div class="d-md-none kt-margin-b-10"></div>
                              </div>

                              <div class="col-4 my-2">
                                <a href="javascript:;" data-repeater-delete="" class="btn-sm btn btn-label-danger btn-bold">
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
                            <button type="submit" class="btn btn-success" style="background-color:#17b978; border:none;">حفظ</button> 
                          </div>
                        </div>
                      </div>

                    </div>
                  </form>
                  <!--END::ADD PRICE LIST FORM-->
                </div>
              </div>
            </div>
          </div>
          <!--end:: Edit Modal-->

        </div>
        <!--END: NEW USER DATATABLE-->

      </div>  
    </div>

	</div>
  <!-- END:: CONTENT -->

</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->