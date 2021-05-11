
<!DOCTYPE html>


<html lang="en"  direction="rtl" style="direction: rtl;" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />

		<title>
			پنل مدیریت محصولات 
		</title>
        <meta name="description" content="Latest updates and statistic charts"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

        <!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!--end::Web font -->

        <!--begin::Global Theme Styles -->
                    <link href="{{ asset('assets/vendors/base/vendors.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
                    <link href="{{ asset('assets/demo/demo12/base/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

                    <!--begin::Page Vendors Styles -->
                            <link href="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.cs') }}s" rel="stylesheet" type="text/css" />
                        <!--end::Page Vendors Styles -->
                        
                        
        
        
        
        <link rel="shortcut icon" href="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.cs') }}" />



		<style>

			
		</style>
		<link href="{{ asset('css/adminstyle.css') }}" rel="stylesheet" type="text/css""
    </head>
    <!-- end::Head -->

    
    <!-- begin::Body -->
    <body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >

        
        
    	<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    
	
				<!-- BEGIN: Header -->
@include('admin.inc.navigation')








<!-- END: Header -->		
		<!-- begin::Body -->
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
			
											<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>

<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">	
	<!-- BEGIN: Aside Menu -->
	@include('admin.inc.menu')
	<!-- END: Aside Menu -->
</div>
<!-- END: Left Aside -->							
		   	<div class="m-grid__item m-grid__item--fluid m-wrapper">
			    			    
<!-- BEGIN: Subheader -->
				<div class="m-subheader ">
					<div class="d-flex align-items-center">
						<div class="mr-auto">
							<h3 class="m-subheader__title ">داشبورد</h3>
						</div>
						<div>
  							<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
					<span class="m-subheader__daterange-label">
						<span class="m-subheader__daterange-title">امروز:</span>
						<?php
						$data = Carbon\Carbon::now() ;
						$persianTime = \App\Services\ChangeTime::gregorianToJalali($data->year,$data->month,$data->day);
						?>
						<span class="">
							سال
							{{ $persianTime['year'] }}
							ماه
							{{ $persianTime['monthName'] }}
							روز
							{{ $persianTime['day'] }}
							ساعت 
							{{ $data->hour }}
							, 
							{{ $data->minute }}
							دقیقه

						</span>
					</span>
					<a href="index.html#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
						<i class="la la-angle-down"></i>
					</a>
				</span>
						</div>
					</div>
				</div>
<!-- END: Subheader -->		       

<!--Begin::Section-->
				
@include('inc.message')
@yield('content')


<!--End::Section-->   		       
		
				<!-- end:: Body -->


<!-- begin::Footer -->

<!-- end::Footer -->


</div>
<!-- end:: Page -->

    		        <!-- begin::Quick Sidebar -->
		<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
			<div class="m-quick-sidebar__content m--hide">
				<span id="m_quick_sidebar_close" class="m-quick-sidebar__close"><i class="la la-close"></i></span>
				<ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link active" data-toggle="tab" href="index.html#m_quick_sidebar_tabs_messenger" role="tab">پیام ها</a>
					</li>
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link" 		data-toggle="tab" href="index.html#m_quick_sidebar_tabs_settings" role="tab">تنظیمات</a>
					</li>
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link" data-toggle="tab" href="index.html#m_quick_sidebar_tabs_logs" role="tab">لاگ ها</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
						<div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
							<div class="m-messenger__messages m-scrollable">
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="assets/app/media/img/users/user3.jpg" alt=""/>
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													مریم حسینی
												</div>
												<div class="m-messenger__message-text">
													سلام وقت بخیر، کی می تونم حضوری یک وقت ملاقات بگیرم؟
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													سلام خانم مریم حسینی ، ساعت 4 عصر امروز
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="assets/app/media/img/users/user3.jpg" alt=""/>
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													مریم حسینی
												</div>
												<div class="m-messenger__message-text">
													شما یک تیم توسعه دهنده نیاز دارید؟
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													بله ، از شما دعوت میکنیم به همراه تیمتون تشریف بیارید
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__datetime">2:30PM</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="assets/app/media/img/users/user3.jpg"  alt=""/>
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													مریم حسینی
												</div>
												<div class="m-messenger__message-text">
													ممنونم از شما										</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													خواهش می کنم
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													لطفا نمونه کارهای خودتون هم بیارید
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__datetime">3:15PM</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-no-pic m--bg-fill-danger">
											<span>M</span>
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													مریم حسینی

												</div>
												<div class="m-messenger__message-text">
													حتما
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													ممنون ، می بینمتون
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="assets/app/media/img/users/user3.jpg"  alt=""/>
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													مریم حسینی

												</div>
												<div class="m-messenger__message-text">
													خدانگهدار
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="m-messenger__seperator"></div>

							<div class="m-messenger__form">
								<div class="m-messenger__form-controls">
									<input type="text" name="" placeholder="اینجا تایپ کنید ....." class="m-messenger__form-input">
								</div>
								<div class="m-messenger__form-tools">
									<a href="index.html" class="m-messenger__form-attachment">
										<i class="la la-paperclip"></i>
									</a>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
<!-- end::Quick Sidebar -->
	    <!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
	<i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->		    <!-- begin::Quick Nav -->
<!-- begin::Quick Nav -->
        <!--begin::Global Theme Bundle -->
                    <script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
                    <script src="{{ asset('assets/demo/demo12/base/scripts.bundle.js') }}" type="text/javascript"></script>
                <!--end::Global Theme Bundle -->

                    <!--begin::Page Vendors -->
                            <script src="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
                        <!--end::Page Vendors -->
        
                    <!--begin::Page Scripts -->
                            <script src="{{ asset('assets/app/js/dashboard.js') }}" type="text/javascript"></script>
                        <!--end::Page Scripts -->
						<script src="{{ asset('assets/demo/default/custom/header/actions.js') }}" type="text/javascript"></script>
						<script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
						<script src="{{ asset('js/admin.js') }}" type="text/javascript"></script>


        
                    </body>
    <!-- end::Body -->
</html>