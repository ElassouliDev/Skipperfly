<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 4.1.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="rtl">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Coupon - login</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="{{url('/public/dashboard_assets')}}/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/public/dashboard_assets')}}/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/public/dashboard_assets')}}/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/public/dashboard_assets')}}/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{url('/public/dashboard_assets')}}/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/public/dashboard_assets')}}/admin/pages/css/login-soft-rtl.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="{{url('/public/dashboard_assets')}}/global/css/components-rounded-rtl.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="{{url('/public/dashboard_assets')}}/global/css/plugins-rtl.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/public/dashboard_assets')}}/admin/layout/css/layout-rtl.css" rel="stylesheet" type="text/css"/>
    <link id="style_color" href="{{url('/public/dashboard_assets')}}/admin/layout/css/themes/default-rtl.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/public/dashboard_assets')}}/admin/layout/css/custom-rtl.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="#">
{{--        <img src="{{url('/public/dashboard_assets')}}/admin/layout4/img/logo-big.png" alt=""/>--}}
    </a>
    <h1 class="text-center bold ">                    {{ config('app.name', 'Coupon App') }}    </h1>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">

    @yield('content')

    <!-- END LOGIN FORM -->
    @if(count($errors->all()) > 0)
        <div class="alert alert-danger">
            <ol>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ol>
        </div>
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger">
            <button class="close" data-close="alert"></button>

            <span> {{ session('error') }} </span>
        </div>
    @endif

</div>
<!-- END LOGIN -->

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="{{url('/public/dashboard_assets')}}/global/plugins/respond.min.js"></script>
<script src="{{url('/public/dashboard_assets')}}/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="{{url('/public/dashboard_assets')}}/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="{{url('/public/dashboard_assets')}}/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="{{url('/public/dashboard_assets')}}/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{url('/public/dashboard_assets')}}/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="{{url('/public/dashboard_assets')}}/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="{{url('/public/dashboard_assets')}}/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{url('/public/dashboard_assets')}}/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="{{url('/public/dashboard_assets')}}/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{{url('/public/dashboard_assets')}}/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{url('/public/dashboard_assets')}}/global/scripts/metronic.js" type="text/javascript"></script>
<script src="{{url('/public/dashboard_assets')}}/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="{{url('/public/dashboard_assets')}}/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="{{url('/public/dashboard_assets')}}/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Login.init();
        Demo.init();
        // init background slide images
        $.backstretch([
                "{{url('/public/dashboard_assets')}}/admin/pages/media/bg/1.jpg",
                "{{url('/public/dashboard_assets')}}/admin/pages/media/bg/2.jpg",
                "{{url('/public/dashboard_assets')}}/admin/pages/media/bg/3.jpg",
                "{{url('/public/dashboard_assets')}}/admin/pages/media/bg/4.jpg"
            ], {
                fade: 1000,
                duration: 8000
            }
        );
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
