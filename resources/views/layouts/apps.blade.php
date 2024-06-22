<!DOCTYPE html>
<html class="loading semi-dark-layout" lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    data-layout="semi-dark-layout" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="author" content="Tawassol">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ُEvaluation') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" href="{!! secure_asset('app-assets/images/ico/apple-icon-120.png') !!}">
    <link rel="shortcut icon" type="image/x-icon" href="{!! secure_asset('app-assets/images/ico/favicon.ico') !!}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{!! secure_asset('app-assets/vendors/css/vendors-rtl.min.css') !!}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{!! secure_asset('app-assets/css-rtl/bootstrap.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! secure_asset('app-assets/css-rtl/bootstrap-extended.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! secure_asset('app-assets/css-rtl/colors.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! secure_asset('app-assets/css-rtl/components.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! secure_asset('app-assets/css-rtl/themes/dark-layout.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! secure_asset('app-assets/css-rtl/themes/bordered-layout.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! secure_asset('app-assets/css-rtl/themes/semi-dark-layout.css') !!}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{!! secure_asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! secure_asset('app-assets/css-rtl/plugins/forms/form-validation.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! secure_asset('app-assets/css-rtl/pages/authentication.css') !!}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{!! secure_asset('app-assets/css-rtl/custom-rtl.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! secure_asset('assets/css/style-rtl.css') !!}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo-->
                        {{-- @include('components.logo') --}}
                           

                        
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex flex-column col-lg-8 align-items-center p-5">
                            <h2 class="brand-text text-primary ms-1">
                                وزارة الداخلية والجماعات المحلية والتهيئة العمرانية
  
                                </h2> 
                              <h3 class="brand-text text-primary ms-1"> 
                                  المديرية العامة للموارد البشرية و التكوين و القوانين الأساسية
                              </h3>
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img
                                    class="img-fluid w-50" src="{!! secure_asset('logo_minister.svg') !!}" alt="MICLAT" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                @yield('content')
                               
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{!! secure_asset('app-assets/vendors/js/vendors.min.js') !!}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{!! secure_asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') !!}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{!! secure_asset('app-assets/js/core/app-menu.js') !!}"></script>
    <script src="{!! secure_asset('app-assets/js/core/app.js') !!}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{!! secure_asset('app-assets/js/scripts/pages/auth-login.js') !!}"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>
