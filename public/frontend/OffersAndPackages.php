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
                <h3 class="kt-portlet__head-title"> العروض و الباقات </h3>
                <div class="btns-box">
                  <a href="AddOffersAndPackages.php" type="button" class="btn btn-outline-success mx-1 mb-1"> <i class="la la-plus"></i> إضافة عروض و باقات </a>
                </div>
            </div>
          </div>

        <!--START: NEW USER DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="standard table table-responsive-sm" width="100%">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th> الباقة </th>
                <th> السعر </th>
                <th> الخصم </th>
                <th> مدة الاشتراك </th>
                <th> عدد القطع </th>
                <th> عدد الزيارات </th>
                <th> الصورة </th>
                <th class="action">إجراء</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td> باقة 1 </td>
                <td> 120 </td>
                <td> 30 </td>
                <td> 60 يوم </td>
                <td> 15 قطعة  </td>
                <td> 70 </td>
                <td> 
                  <span class="kt-media kt-media--lg">
                    <img src="assets/pics/7.png" alt="image">
                  </span>
                </td>
                <td align="right">
                  <button type="button" class="kt-badge kt-badge--outline kt-badge--primary" data-skin="dark" data-toggle="modal" data-target="#kt_modal_4_2"  title="تعديل">
                    <i class="la la-edit"></i>
                  </button>

                  <a href="#" class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حذف">
                    <i class="la la-trash"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>

          <!--begin::Modal-->
          <div class="modal fade" id="kt_modal_4_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> تعديل </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  </button>
                </div>
                <div class="modal-body">
                  <!-- START:: EDIT FORM -->
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
                          <label class="col-form-label col-12"> السعر </label>
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-dollar" style="font-size: 18px"></i> </span>
                            <input type="number" min="0" class="form-control" placeholder=" السعر ">
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-12 col-md-6">
                        <div class="row">
                          <label class="col-form-label col-12"> الخصم </label>
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-dollar" style="font-size: 18px"></i> - </span>
                            <input type="number" min="0" class="form-control" placeholder=" الخصم ">
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-12 col-md-6">
                        <div class="row">
                          <label class="col-form-label col-12"> مدة الاشتراك </label>
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-calendar" style="font-size: 18px"></i></span>
                            <input type="number" min="0" class="form-control" placeholder=" مدة الاشتراك ">
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-12 col-md-6">
                        <div class="row">
                          <label class="col-form-label col-12"> عدد القطع </label>
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-bookmark" style="font-size: 18px"></i></span>
                            <input type="number" min="0" class="form-control" placeholder=" عدد القطع ">
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-12 col-md-6">
                        <div class="row">
                          <label class="col-form-label col-12"> عدد الزيارات </label>
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-bookmark" style="font-size: 18px"></i></span>
                            <input type="number" min="0" class="form-control" placeholder=" عدد الزيارات ">
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

                      <div class="form-group col-12 px-4">
                        <div class="input-group">
                          <div class="row">
                            <button type="submit" class="btn btn-success" style="background-color:#17b978; border:none;">حفظ</button> 
                          </div>
                        </div>
                      </div>

                    </div>
                  </form>
                  <!-- END:: EDIT FORM -->
                </div>
              </div>
            </div>
          </div>
          <!--end::Modal-->

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