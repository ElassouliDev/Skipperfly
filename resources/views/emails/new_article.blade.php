
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
    <div class="logo-footer " style=" margin: 30px;  text-align: center">
        <a href="{{url('/')}}" title="{{@$setting_app['title_en']}}}">
            <img src="{{isset($setting_app['logo'])&& !empty($setting_app['logo'])?url('storage/').'/'.$setting_app['logo']:url('/website/assets/img/Logo2.svg')}}" alt="{{@$setting_app['title_en']}}" height="60"
                 width="234" >
        </a>
    </div>
    <p class="lead" style="    padding: 1px 50px;">
        Hi {{@$user->name}},
        <br>
        <br>
        We have published a New Article on  {{@$setting_app['title_en']??"Skipperfly"}}   Blog:

        <br>
        <br>
        {{$article->title}}


        <br>
        <br>
        You can view it from this link:
        <a href="{{route('website.article.show',$article->slug)}}" target="_blank">{{route('website.article.show',$article->slug)}}</a>
        <br>
        <br>
        Happy reading!

        <br>
        <br>
        Thanks in advance for sharing the blog with your friends and those who are interested in Tourism.

        <br>
        <br>
        <br>


        {{@$setting_app['title_en']??"Skipperfly"}} team

    </p>
</div>


</body>
</html>


{{--@component('mail::message')--}}





{{--@endcomponent--}}
