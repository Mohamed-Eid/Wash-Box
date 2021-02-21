<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

	<!-- START::HEAD -->
	<head>
		<meta charset="utf-8" />
		<title>Wash Box</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles -->

		<!-- START:: DATATABLE STYLES -->
		<link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
		<!-- END:: DATATABLE STYLES -->

		<!-- START:: SIMPLESELECT STYLE -->
		<link href="assets/css/jquery.simpleselect.min.css" rel="stylesheet" type="text/css" />
		<!-- END:: SIMPLESELECT STYLE -->

		<!-- START:: UPLOADFILES STYLE -->
		<link href="assets/plugins/custom/uppy/uppy.bundle.css" rel="stylesheet" type="text/css" />
    <!-- END:: UPLOADFILES STYLE -->

    <!-- START:: FORM REPEATER STYLE -->
    <!-- END:: FORM REPEATER STYLE -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<!-- <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" /> -->
		<link href="assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles -->

		<link rel="shortcut icon" href="assets/pics/fav-icon.png" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap">
	</head>
	<!-- END::HEAD -->

	<!-- START::BODY -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- START:: HEADER MOBILE -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">

			<div class="kt-header-mobile__logo">
				<a href="index.php">
          <h3 class="logo"> Tech <span> CRM </span> </h3>
				</a>
			</div>

			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
			</div>

		</div>
		<!-- END:: HEADER MOBILE -->

		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- START:: ASIDE -->
				<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
				<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

					<!-- START:: ASIDE -->
					<div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
						<div class="kt-aside__brand-logo">
							<a href="index.php" style="color: #fff;">
								<h3 class="logo"> Wash <span> Box </span> </h3>
							</a>
						</div>
						<div class="kt-aside__brand-tools">
							<button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler"><span></span></button>
						</div>
					</div>
					<!-- END:: ASIDE -->

					<!-- SART:: ASIDE MENU -->
					<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
						<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
							<ul class="kt-menu__nav ">

								<li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true">
									<a href="index.php" class="kt-menu__link ">
										<i class="kt-menu__link-icon la la-home la-2x"></i>
										<span class="kt-menu__link-text">الرئيسية</span>
									</a>
								</li>

                <li class="kt-menu__item" aria-haspopup="false">
									<a href="usersList.php" class="kt-menu__link ">
                  <i class="kt-menu__link-icon la la-user la-2x" style="font-size: 20px"></i>
										<span class="kt-menu__link-text">إدارة المستخدمين</span>
									</a>
								</li>

                <li class="kt-menu__item" aria-haspopup="false">
									<a href="OffersAndPackages.php" class="kt-menu__link ">
                  <i class="kt-menu__link-icon la la-star-o la-2x" style="font-size: 20px"></i>
										<span class="kt-menu__link-text">عروض و باقات</span>
									</a>
								</li>

                <li class="kt-menu__item" aria-haspopup="false">
									<a href="PriceList.php" class="kt-menu__link ">
                  <i class="kt-menu__link-icon la la-dollar la-2x" style="font-size: 20px"></i>
										<span class="kt-menu__link-text"> قائمة الاسعار </span>
									</a>
								</li>

								<!-- <li class="kt-menu__item"  aria-haspopup="true">
									<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
										<i class="kt-menu__link-icon la la-users la-2x" style="font-size: 20px"></i>
										<span class="kt-menu__link-text">ادارة الموارد البشرية</span>
										<i class="kt-menu__ver-arrow la la-chevron-down"></i>
									</a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">

											<li class="kt-menu__item">
												<a href="hrAddNewEmployee.php" class="kt-menu__link kt-menu__toggle"> إضافة موظف جديد</a>
											</li>

											<li class="kt-menu__item">
												<a href="hrManageEmployees.php" class="kt-menu__link kt-menu__toggle"> قائمة الموظفين</a>
											</li>

											<li class="kt-menu__item">
												<a href="hrManageEmployessFinac.php" class="kt-menu__link kt-menu__toggle"> إضافة حوافز او خصومات للموظفين</a>
											</li>

											<li class="kt-menu__item">
												<a href="hrEmployeesArchive.php" class="kt-menu__link kt-menu__toggle"> قائمة ارشيف الموظفين </a>
											</li>

											<li class="kt-menu__item">
												<a href="hrAccounting.php" class="kt-menu__link kt-menu__toggle">   حسابات الموظفين </a>
											</li>

										</ul>
									</div>
								</li> -->

								<!-- <li class="kt-menu__item" aria-haspopup="false">
									<a href="mainServices.php" class="kt-menu__link ">
										<i class="kt-menu__link-icon la la-diamond" style="font-size: 20px;"></i>
										<span class="kt-menu__link-text">ادارة الخدمات</span>
									</a>
								</li> -->

								<!-- <li class="kt-menu__item"  aria-haspopup="true">
									<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
										<i class="kt-menu__link-icon la la-cloud" style="font-size: 20px"></i>
										<span class="kt-menu__link-text">ادارة الإستضافات</span>
										<i class="kt-menu__ver-arrow la la-chevron-down"></i>
									</a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">

											<li class="kt-menu__item">
												<a href="hosting.php" class="kt-menu__link kt-menu__toggle"> الإستضافات </a>
											</li>

											<li class="kt-menu__item">
												<a href="packages.php" class="kt-menu__link kt-menu__toggle"> باقات الإستضافات </a>
											</li>

										</ul>
									</div>
								</li> -->

								<!-- <li class="kt-menu__item" aria-haspopup="false">
									<a href="contracts.php" class="kt-menu__link ">
										<i class="kt-menu__link-icon la la-check-square" style="font-size: 20px;"></i>
										<span class="kt-menu__link-text"> ادارة التعاقدات </span>
									</a>
								</li> -->

								<!-- <li class="kt-menu__item"  aria-haspopup="true">
									<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
										<i class="kt-menu__link-icon la la-briefcase" style="font-size: 20px"></i>
										<span class="kt-menu__link-text">ادارة العملاء</span>
										<i class="kt-menu__ver-arrow la la-chevron-down"></i>
									</a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">

                      <li class="kt-menu__item">
												<a href="clients-list.php" class="kt-menu__link kt-menu__toggle"> قائمة  العملاء  </a>
                      </li>

											<li class="kt-menu__item">
												<a href="add-leads.php" class="kt-menu__link kt-menu__toggle"> إضافة عميل محتمل  </a>
                      </li>

                      <li class="kt-menu__item">
												<a href="leads-list.php" class="kt-menu__link kt-menu__toggle"> قائمة العملاء المحتملين  </a>
                      </li>

                      <li class="kt-menu__item">
												<a href="leads-archive.php" class="kt-menu__link kt-menu__toggle"> قائمة ارشيف العملاء المحتملين  </a>
                      </li>

                      <li class="kt-menu__item">
												<a href="follow-up-list.php" class="kt-menu__link kt-menu__toggle"> قائمة المتابعات  </a>
                      </li>

                      <li class="kt-menu__item">
												<a href="project-managers-list.php" class="kt-menu__link kt-menu__toggle"> قائمة توزيع المشاريع  </a>
											</li>

										</ul>
									</div>
								</li> -->

                <!-- <li class="kt-menu__item"  aria-haspopup="true">
									<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
										<i class="kt-menu__link-icon la la-dollar" style="font-size: 20px"></i>
										<span class="kt-menu__link-text">ادارة المالية</span>
										<i class="kt-menu__ver-arrow la la-chevron-down"></i>
									</a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">

                      <li class="kt-menu__item">
												<a href="payments.php" class="kt-menu__link kt-menu__toggle">   المصروفات  </a>
                      </li>

											<li class="kt-menu__item">
												<a href="ProfitsAndLoses.php" class="kt-menu__link kt-menu__toggle">  الارباح و الخسائر  </a>
                      </li>

										</ul>
									</div>
								</li> -->

							</ul>
						</div>
					</div>
					<!-- END:: ASIDE MENU -->

				</div>
				<!-- END:: ASIDE -->

				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- START:: HEADER -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

						<!-- START:: HEADER TOPBAR -->
						<div class="kt-header__topbar">

							<!--START:: NOTIFICATIONS -->
							<div class="kt-header__topbar-item dropdown">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px,0px" aria-expanded="true">
									<span class="kt-header__topbar-icon kt-pulse kt-pulse--brand">
										<i class="flaticon2-bell-alarm-symbol"></i>
										<span class="kt-pulse__ring"></span>
									</span>
								</div>

								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">

                  <ul class="list-unstyled">
                    <li class="alert alert-solid-warning alert-bold my-2">
                      <a href="#" class="alert-text"> اشعار 1 </a>
                    </li>

                    <li class="alert alert-solid-warning alert-bold my-2">
                      <a href="#" class="alert-text"> اشعار 2 </a>
                    </li>
                  </ul>

								</div>
							</div>
							<!--END:: NOTIFICATIONS -->

							<!--START:: USER BAR -->
							<div class="kt-header__topbar-item kt-header__topbar-item--user">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
									<div class="kt-header__topbar-user">
										<span class="kt-header__topbar-username kt-hidden-mobile">محمود سليمان</span>
										<img alt="Pic" class="kt-radius-100" src="assets/pics/user.jpg" />
									</div>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

									<!--START: HEAD -->
									<div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(assets/pics/bg-2.jpg">
										<div class="kt-user-card__avatar">
											<img class="" alt="Pic" src="assets/pics/user.jpg" />
										</div>
										<div class="kt-user-card__name">
											محمود سليمان
										</div>
									</div>
									<!--END: HEAD -->

									<!--START: NAVIGATION -->
									<div class="kt-notification">
										<a href="userProfile.php" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-calendar-3 kt-font-success"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													الصفحة الشخصية
												</div>
											</div>
										</a>

                    <a href="edit-profile.php" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon-cogwheel-1 kt-font-success"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													تعديل الصفحة الشخصية
												</div>
											</div>
										</a>

										<a href="#" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-mail kt-font-warning"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													صندوق الوارد
												</div>
											</div>
										</a>

										<div class="kt-notification__custom kt-space-between">
											<a href="custom/user/login-v2.html" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold"> تسجيل خروج </a>
										</div>
									</div>
									<!--END: NAVIGATION -->

								</div>
							</div>
							<!--END:: USER BAR -->

						</div>
						<!-- END:: HEADER TOPBAR -->

					</div>
					<!-- END:: HEADER -->

					<!-- START:: SUBHEADER -->
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content" style="flex: 0 0 auto">
						
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">

								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										<a href="index.php"> الرئيسية </a>
									</h3>
									<span class="kt-subheader__separato"></span>
									<div class="kt-subheader__breadcrumbs">
										<a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
										<span class="kt-subheader__breadcrumbs-separator"></span>
										<a href="" class="kt-subheader__breadcrumbs-link"> الصفحة الحالية </a>
									</div>

								</div>

							</div>
						</div>		

					</div>
					<!-- END:: SUBHEADER -->