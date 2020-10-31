
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{@$setting_app['title_en']}}</title>
    <link rel="stylesheet" href="{{url('website/')}}/assets/bootstrap/bootstrap.css">
    <script src="{{url('website/')}}/assets/bootstrap/bootstrap.js"></script>


</head>
<body>
<div class="container" style="padding: 22px">

    {!! \Illuminate\Support\Str::replaceLast('unsubscribe','<a href="'.route('website.unsubscribe',['email'=>$email]).'" target="_blank">unsubscribe</a>' , @$setting_app['subscribe_email_content'])!!}
</div>


</body>
</html>



