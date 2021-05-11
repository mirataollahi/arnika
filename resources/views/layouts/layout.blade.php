
<!DOCTYPE html>


<html lang="en"  direction="rtl" style="direction: rtl;" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />

		<title>
			قیمت و خرید نرم افزار حسابداری و مالی سپیدار همکاران سیستم
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
						<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
                        <link href="{{ asset('css/persian-datepicker.css') }}" rel="stylesheet" type="text/css" />



                        
                        
                        
        
        
        
        <link rel="shortcut icon" href="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.cs') }}" />
    </head>
    <!-- end::Head -->

    
    <!-- begin::Body -->
    <body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >

        
        
		@yield('content')

                    <script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
                    <script src="{{ asset('assets/demo/demo12/base/scripts.bundle.js') }}" type="text/javascript"></script>
                <!--end::Global Theme Bundle -->

                    <!--begin::Page Vendors -->
                            <script src="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
                        <!--end::Page Vendors -->
        
                    <!--begin::Page Scripts -->
                            <script src="{{ asset('assets/app/js/dashboard.js') }}" type="text/javascript"></script>
                        <!--end::Page Scripts -->

                        <script src="js/jquery.min.js" ></script>
                        <script src="js/jquery.md.bootstrap.datetimepicker.js"></script>
                    
                        <script>

   
                            $('#birthday').MdPersianDateTimePicker({
                                targetTextSelector: '#inputDate3',
                                monthsToShow: [1, 1]
                            });
                                
                            </script>
        
                    </body>
    <!-- end::Body -->
</html>