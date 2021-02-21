<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="row">
      <div class="col-12">

        <!--START:: ROLES PORTEL-->
        <div class="kt-portlet">
          <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title"> اضافة عروض و باقات </h3>
            </div>
          </div>

          <!--START:: ADD ROLE FORM-->
          <form class="kt-form pb-0 p-3">
            <div class="row">

              <div class="form-group col-12 col-md-4">
                <div class="row">
                  <label class="col-form-label col-12"> اسم الباقة </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i> </span>
                    <input type="text" class="form-control" placeholder=" اسم الباقة ">
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-4">
                <div class="row">
                  <label class="col-form-label col-12"> السعر </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-dollar" style="font-size: 18px"></i> </span>
                    <input type="number" min="0" class="form-control" placeholder=" السعر ">
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-4">
                <div class="row">
                  <label class="col-form-label col-12"> الخصم </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-dollar" style="font-size: 18px"></i> - </span>
                    <input type="number" min="0" class="form-control" placeholder=" الخصم ">
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-4">
                <div class="row">
                  <label class="col-form-label col-12"> مدة الاشتراك </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-calendar" style="font-size: 18px"></i></span>
                    <input type="number" min="0" class="form-control" placeholder=" مدة الاشتراك ">
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-4">
                <div class="row">
                  <label class="col-form-label col-12"> عدد القطع </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-bookmark" style="font-size: 18px"></i></span>
                    <input type="number" min="0" class="form-control" placeholder=" عدد القطع ">
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-4">
                <div class="row">
                  <label class="col-form-label col-12"> عدد الزيارات </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-bookmark" style="font-size: 18px"></i></span>
                    <input type="number" min="0" class="form-control" placeholder=" عدد الزيارات ">
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-4">
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
          <!--END::ADD ROLE FORM-->

        </div>
        <!--END:: ROLES PORTEL-->

      </div>
    </div>

	</div>
  <!-- END:: CONTENT -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->