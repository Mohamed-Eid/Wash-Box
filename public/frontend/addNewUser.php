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
              <h3 class="kt-portlet__head-title"> اضافة دور </h3>
            </div>
          </div>

          <!--START:: ADD ROLE FORM-->
          <form class="kt-form pb-0 p-3">
            <div class="row">

              <div class="form-group col-12 col-md-4">
                <div class="row">
                  <label class="col-form-label col-12"> اسم المستخدم </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                    <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                      <option> اختار اسم المستخدم </option>
                      <option value="1"> محمود سليمان </option>
                      <option value="2"> محمد عيد </option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-4">
                <div class="row">
                  <label class="col-form-label col-12"> الدور </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i> </span>
                    <input type="text" class="form-control" placeholder=" الدور ">
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-4">
                <div class="row">
                  <label class="col-form-label col-12">الصلاحيات  </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-unlock" style="font-size: 18px"></i> </span>
                    <select class="form-control kt-select2" id="permissions_select2_3" name="param" multiple="multiple" placeholder="اختار الصلاحيات">
                      <option value="1">صلاحيه 1</option>
                      <option value="2">صلاحيه 2</option>
                      <option value="3">صلاحيه 3</option>
                    </select>
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

          <!--START: ROLES DATATABLE-->
          <div class="kt-portlet__body kt-portlet__body--fit">

            <table class="standard table table-responsive-xs" width="100%">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th> المستخدم </th>
                  <th> الدور </th>
                  <th> الصلاحيات </th>
                  <th class="action">إجراء</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td> محمد عيد </td>
                  <td> دور 1 </td>
                  <td> صلاحية 1 </td>
                  <td align="right">
                    <a href="#" class="kt-badge kt-badge--outline kt-badge--primary" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تعديل">
                      <i class="la la-edit"></i>
                    </a>

                    <a href="#" class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حذف">
                      <i class="la la-trash"></i>
                    </a>
                  </td>
                </tr>

              </tbody>
            </table>

          </div>
          <!--END: ROLES DATATABLE-->

        </div>
        <!--END:: ROLES PORTEL-->

        <!--START:: PERMISSIONS PORTEL-->
        <div class="kt-portlet">
          <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title"> اضافة صلاحية </h3>
            </div>
          </div>

          <!--START:: ADD NEW PERMISSION FORM-->
          <form class="kt-form pb-0 p-3">
            <div class="row">

              <div class="form-group col-12 col-md-6">
                <div class="row">
                  <label class="col-form-label col-12"> الصلاحية </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-bookmark" style="font-size: 18px"></i> </span>
                    <input type="text" class="form-control" placeholder=" الصلاحية ">
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-6">
                <div class="row">
                  <label class="col-form-label col-12"> الاسم المعروض </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-bookmark" style="font-size: 18px"></i> </span>
                    <input type="text" class="form-control" placeholder="الاسم المعروض ">
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
          <!--END::ADD NEW PERMISSION FORM-->

          <!--START: ROLES DATATABLE-->
          <div class="kt-portlet__body kt-portlet__body--fit">

            <table class="standard table table-responsive-xs" width="100%">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th> الصلاحية </th>
                  <th> الاسم المعروض </th>
                  <th class="action">إجراء</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td> صلاحية 1 </td>
                  <td> اسم 1 </td>
                  <td align="right">
                    <a href="#" class="kt-badge kt-badge--outline kt-badge--primary" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تعديل">
                      <i class="la la-edit"></i>
                    </a>

                    <a href="#" class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حذف">
                      <i class="la la-trash"></i>
                    </a>
                  </td>
                </tr>

              </tbody>
            </table>

          </div>
          <!--END: ROLES DATATABLE-->

        </div>
        <!--END:: PERMISSIONS PORTEL-->

      </div>
    </div>

	</div>
  <!-- END:: CONTENT -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->