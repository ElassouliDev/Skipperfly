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
{{--
<div class="container" style="padding: 22px">
    <div class="logo-footer " style=" margin: 30px;  text-align: center">
        <a href="{{url('/')}}" title="{{@$setting_app['title_en']}}}">
            <img
                src="{{isset($setting_app['logo'])&& !empty($setting_app['logo'])?url('storage/').'/'.$setting_app['logo']:url('/website/assets/img/Logo2.svg')}}"
                alt="{{@$setting_app['title_en']}}" height="60"
                width="234">
        </a>
    </div>
    <p class="lead" style="    padding: 1px 50px;">
        Hi {{@$user->name}},
        <br>
        <br>
        We have published a New Article on {{@$setting_app['title_en']??"Skipperfly"}} Blog:

        <br>
        <br>
        {{$article->title}}


        <br>
        <br>
        You can view it from this link:
        <a href="{{route('website.article.show',$article->slug)}}"
           target="_blank">{{route('website.article.show',$article->slug)}}</a>
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

--}}
<div class="container" style="padding: 22px">

    <p style="text-align:center">&nbsp;</p>

    <p style="text-align:center">&nbsp;</p>

    <p style="text-align:center"><img alt="" src="{{$article->image_url}}" style="width:580px"/></p>

    <p style="margin-left:240px">&nbsp;</p>

    <p style="margin-left:240px">&nbsp;</p>

    <p><span style="font-size:16px"><span
                style="color:#000080"><strong><em> Hi {{@$user->name}},</em></strong></span></span></p>

    <p><strong><span style="color:#333333"><em>        We have published a New Article on  {{@$setting_app['title_en']??"Skipperfly"}}   Blog:
</em></span></strong></p>

    <p><strong><span style="color:#333333;border-bottom: 2px solid"><em>        {{$article->title}}</em></span></strong>
    </p>
    <p><strong><span style="color:#333333"><em>         You can view it from this link:
        <a href="{{route('website.article.show',$article->slug)}}"
           target="_blank">{{route('website.article.show',$article->slug)}}</a>
       </em></span></strong></p>

    <p><strong><span style="color:#333333"><em>        Happy reading!</em></span></strong></p>
    <p><strong><span style="color:#333333"><em>        Thanks in advance for sharing the blog with your friends and those who are interested in Tourism.
</em></span></strong></p>

    <p><br/>
        <span style="font-size:14px"><span style="color:#000080"><em><strong>Skipperfly Team</strong></em></span></span>
    </p>

    <p style="text-align:left">&nbsp;</p>

    <p style="text-align:center"><a href="mailto:info@skipperfly.com"><img alt=""
                                                                           src="https://skipperfly.com/blog/storage/articles/wuXW9bPxSFRZAvakNgEkopYFWjaocSZqCSu8mzAN.png"
                                                                           style="height:30px; width:30px"/></a>&nbsp;&nbsp;<a
            href="https://www.facebook.com/skipperflyco"><img alt=""
                                                              src="https://skipperfly.com/blog/storage/articles/cokyYFhzNWs8FF74jRRGcHAo8z5eic5cH93TudLP.png"
                                                              style="height:30px; width:30px"/></a>&nbsp;&nbsp;<a
            href="https://twitter.com/skipperflyco"><img alt=""
                                                         src="https://skipperfly.com/blog/storage/articles/62zG7SVsdtaW0eOqYF6q9GfbDkKUAoPX0bksmHNV.png"
                                                         style="height:30px; width:30px"/></a>&nbsp;&nbsp;<a
            href="https://www.instagram.com/skipperflyco"><img alt=""
                                                               src="https://skipperfly.com/blog/storage/articles/VDj84kWLDUP2OTzogCsjTsjn424S2PvXlfZBYwPf.png"
                                                               style="height:30px; width:30px"/></a>&nbsp;&nbsp;&nbsp;&nbsp;<a
            href="https://www.linkedin.com/in/skipperflyco"><img alt=""
                                                                 src="https://skipperfly.com/blog/storage/articles/Mkbmuk0jnIQUOD1sYc2cN24vdYO2w5MxG52EJ4gQ.png"
                                                                 style="height:28px; width:28px"/></a>&nbsp;&nbsp;&nbsp;&nbsp;<a
            href="https://skipperfly.com/blog/en"><img alt=""
                                                       src="https://skipperfly.com/blog/storage/articles/e8q0iO1d67hIO2eWzcguompZtsA34KgxPwDth4K7.png"
                                                       style="height:28px; width:28px"/></a>&nbsp;&nbsp;&nbsp;&nbsp;<a
            href="https://www.youtube.com/channel/UC7hFaF-KxZg0ewIItZ3ZNtQ/featured"><img alt=""
                                                                                          src="https://skipperfly.com/blog/storage/articles/tyHbBG9XYSFVudkc00IYwtYpzF0rzqMYf7IU2odE.png"
                                                                                          style="height:28px; width:28px"/></a>
    </p>

    <div>
        <table border="0" cellpadding="0" cellspacing="0" class="MsoNormalTable" style="background:white; width:99.08%">
            <tbody>
            <tr>
                <td style="height:121.85pt; width:428.05pt">
                    <div>
                        <table border="0" cellpadding="0" cellspacing="0" class="MsoNormalTable" style="width:100%">
                            <tbody>
                            <tr>
                                <td style="height:10.0pt">
                                    <div>
                                        <table border="0" cellpadding="0" cellspacing="0" class="MsoNormalTable"
                                               style="width:100%">
                                            <tbody>
                                            <tr>
                                                <td style="height:10.05pt">
                                                    <table border="0" cellpadding="0" cellspacing="0"
                                                           class="MsoNormalTable"
                                                           style="width:100%">
                                                        <tbody>
                                                        <tr>
                                                            <td style="height:9.0pt">
                                                                <table align="left" border="0" cellpadding="0"
                                                                       cellspacing="0" class="MsoNormalTable"
                                                                       style="width:100%">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td style="background-color:rgb(241, 243, 244);    padding-top: 30px; height:8.05pt ">
                                                                            <p style="text-align:center"><em><span
                                                                                        style="color:#656565; font-family:helvetica,sans-serif; font-size:9.0pt">Copyright &copy; 2020&nbsp; Skipperfly, Swedish&nbsp;</span></em><em><span
                                                                                        style="color:#656565; font-family:helvetica,sans-serif; font-size:9.0pt">Company, All rights reserved.</span></em><br/>
                                                                                <span
                                                                                    style="color:#656565; font-family:helvetica,sans-serif; font-size:9.0pt">Registered Office: Gustavstorpsv&auml;gen 6,&nbsp;M&ouml;rrum, 37534&nbsp;</span>
                                                                            </p>

                                                                            <p style="text-align:center"><span
                                                                                    style="font-size:12px">Want to change how you receive these emails?<br/>
															You can <u><strong>
                                                                                         {{--   <a href="{{route('website.unsubscribe',['email'=>$email])}}"
                                                                                               target="_blank">unsubscribe</a>  --}}

                                                                                            <a href="{{url('unsubscribe'.'?email='.$email)}}"
                                                                                               target="_blank">unsubscribe</a>

                                                                                        </strong></u>from this list</span><br/>
                                                                                <span
                                                                                    style="color:#656565; font-family:helvetica,sans-serif; font-size:9.0pt"><!--[if !supportLineBreakNewLine]--><br/>
                                                                                    <!--[endif]--></span></p>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</div>
</body>
</html>


{{--@component('mail::message')--}}


{{--@endcomponent--}}
