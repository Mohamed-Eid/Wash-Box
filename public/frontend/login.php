<!-- START:: INCLUDING THE HEADER -->
<?php include('layouts/LoginHeader.php') ?>
<!-- END:: INCLUDING THE HEADER -->

<!-- begin::Body -->
<body style="background-image: url(assets/media/demos/demo8/bg-1.jpg)" class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">

  <!-- begin:: Page -->
  <div class="kt-grid kt-grid--ver kt-grid--root kt-page">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
      <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(assets/pics/login-bg.jpg); background-size: cover">
        <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
          <div class="kt-login__container">
            <div class="kt-login__logo">
              <a href="index.php" style="color: #fff;">
								<h1 class="logo"> Wash <span> Box </span> </h1>
							</a>
            </div>

            <div class="kt-login__signin">
              <div class="kt-login__head">
                <h3 class="kt-login__title">Login</h3>
              </div>
              <form class="kt-form" action="">
                <div class="input-group">
                  <input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
                </div>
                <div class="input-group">
                  <input class="form-control" type="password" placeholder="Password" name="password">
                </div>
                <div class="row kt-login__extra">
                  <div class="col">
                    <label class="kt-checkbox">
                      <input type="checkbox" name="remember"> Remember me
                      <span></span>
                    </label>
                  </div>
                  <div class="col kt-align-right">
                    <a href="javascript:;" id="kt_login_forgot" class="kt-login__link">Forget Password ?</a>
                  </div>
                </div>
                <div class="kt-login__actions">
                  <button id="kt_login_signin_submit" class="btn btn-pill kt-login__btn-primary">Login</button>
                </div>
              </form>
            </div>

            <div class="kt-login__forgot">
              <div class="kt-login__head">
                <h3 class="kt-login__title">Forgotten Password ?</h3>
                <div class="kt-login__desc">Enter your email to reset your password:</div>
              </div>
              <form class="kt-form" action="">
                <div class="input-group">
                  <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
                </div>
                <div class="kt-login__actions">
                  <button id="kt_login_forgot_submit" class="btn btn-success btn-pill kt-login__btn-primary">Request</button>&nbsp;&nbsp;
                  <button id="kt_login_forgot_cancel" class="btn btn-secondary btn-pill kt-login__btn-secondary">Cancel</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- end:: Page -->



<!-- START:: INCLUDING THE FOOTER -->
<?php include('layouts/LoginFooter.php') ?>
<!-- END:: INCLUDING THE FOOTER -->
