<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('website/')}}/assets/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="{{url('website/')}}/assets/css/style.css">
    <title>Skipper</title>

    @stack('css')

</head>

<body>



@yield('content')

@include('website.layouts.footer')

<script src="{{url('website/')}}/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
<script src="{{url('website/')}}/assets/bootstrap/bootstrap.js"></script>
<script src="{{url('website/')}}/assets/js/main.js"></script>
@stack('js')

</body>

</html>
