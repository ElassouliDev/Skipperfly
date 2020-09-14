<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{@$settings_website['title']}}-@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta content="{{@$settings_website['description']}}" name="description"/>
    <meta content="{{@$settings_website['title']}}" name="author"/>
    <meta content="{{@$settings_website['title']}}" name="title"/>
    <meta content="{{@$settings_website['keywords']}}" name="keywords"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{isset($settings_website['logo'])&& !empty($settings_website['logo'])?url('storage/').'/'.$settings_website['logo']:url('/website/assets/img/Logo1.svg')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('/dashboard_assets')}}/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>

    <link rel="stylesheet" href="{{url('website/')}}/assets/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.9.0/css/all.css">

    <link rel="stylesheet" type="text/css" href="{{url('/dashboard_assets')}}/global/plugins/bootstrap-toastr/toastr.min.css"/>

    <link rel="stylesheet" href="{{url('website/')}}/assets/css/style.css">
    <style>
        .user_nav_logo{
            position: absolute;
            top: 20px;
            right: 70px;
        }

            .user_nav_logo img{
                width: 50px;
                height: 50px;
                border-radius: 50%;
        }

        .user_nav_logo .social-share{
            left: auto;
            right: 0;
            bottom: -166px;

        }

        .user_nav_logo .name_admin{

                     font-size: 18px;
                     font-weight: 600;
                     padding: 10px;

        }
    </style>



    @stack('css')

</head>

<body>
@if(auth()->user())
<div class="user_nav_logo">

        <div class="share">
            <div  class="avatar_user">
            <span class="username username-hide-on-mobile name_admin ">
						{{auth()->user()->name}}
            </span>
                <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                <img alt="" class="img-circle " src="{{auth()->user()->image_url}}" width="50"/>

            </div>
            <div class="social-share">
                <ul class="list-unstyled ">
                    <li>      <a href="javascript:;" data-action="edit-profile">
                            <i class="fa fa-pencil"></i>  @lang('admin.edit_profile') </a>

                    </li>
                    <li>

                        <a href="javascript:;" data-action="change-password">
                            <i class="fa fa-key"></i>  @lang('admin.change_password') </a>

                    </li>
                    <li>

                        <a  href="#"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                        >
                            <i class="fa fa-sign-out"></i> @lang('admin.logout_title')</a>
                    </li>
                </ul>
            </div>
        </div>


</div>
@endif
<form id="logout-form" action="{{ route('website.logout') }}" method="POST" style="display: none;">
    @csrf
</form>
@yield('content')

@if(auth()->user())
<!-- END CONTAINER -->
<div class="modal fade slide-up disable-scroll" id="change-password" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content-wrapper">
            <div class="modal-content">
                <div class="modal-header clearfix text-left">

                    <h4 class="modal-title w-100 font-weight-bold">@lang('admin.Edit password')</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" autocomplete="off">
                        @method('put')
                        <div class="form-group-attached">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>@lang('admin.Current password'):</label>
                                        <input name="current_password" type="password" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>@lang('admin.New password') :</label>
                                        <input name="new_password" type="password" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>@lang('admin.Confirm new password') :</label>
                                        <input name="new_password_confirmation" type="password" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 m-t-10 sm-m-t-10">
                                <button type="submit" class="btn btn-primary  m-t-5">@lang('admin.save')</button>
                                <button type="reset" class="btn btn-dark  m-t-5"  class="close" data-dismiss="modal" aria-hidden="true" >@lang('admin.cancel')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade slide-up disable-scroll" id="edit-profile" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content-wrapper">
            <div class="modal-content">
                <div class="modal-header clearfix text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                            class="pg-close fs-14"></i></button>
                    <h5 class="title">@lang('admin.edit_profile')
                    </h5>
                </div>
                <div class="modal-body">
                    <form role="form" action="{{route('edit_profile')}}" autocomplete="off"
                          enctype="multipart/form-data">
                        @method('put')
                        <input type="hidden" name="id" value="{{auth()->id()}}">
                        <span class="change_method_form"></span>
                        <div class="form-group-attached">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group last">
                                        <div class="col-md-12 text-center">
                                            <div class="avatar fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" >
                                                    <img
                                                        src="{{auth()->user()->image_url}}"
                                                        alt="{{auth()->user()->nam}}" >
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"
                                                     style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                                <div>
													<span class="btn default btn-file">
													<span class="fileinput-new">
													Change </span>
													<span class="fileinput-exists">
													Change </span>
												<input type="file"

                                                       name="image">
													</span>

                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label>@lang('admin.name'):</label>
                                                <input name="name" type="text" class="form-control"
                                                       value="{{auth()->user()->name}}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <div class="row">
                                            <div class="col-md-12  col-sm-12">
                                                <label>@lang('admin.email'):</label>
                                                <input name="email" type="email" class="form-control"
                                                       value="{{auth()->user()->email}}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 m-t-10 sm-m-t-10">
                                    <button type="submit" class="btn btn-primary  m-t-5">@lang('admin.save')</button>
                                    <button type="reset" class="btn btn-danger  m-t-5"  class="close" data-dismiss="modal" aria-hidden="true" >@lang('admin.cancel')</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@else

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content form_login_content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('website.login')}}" method="post" class="form_login">
                <div class="modal-body mx-3">
                    <div class="md-form mb-4 mt-3">
                        <input type="email" id="defaultForm-email" class="form-control validate" name="email"
                               placeholder="@lang('admin.Enter your email')" required>
                    </div>

                    <div class="md-form  mb-4">
                        <input type="password" id="defaultForm-pass" class="form-control validate" name="password"
                               placeholder="@lang('admin.Enter your password')" required>
                    </div>
                    <div class="md-form  mb-4">
                        <p>@lang('admin.I don\'t have account') <a href="#" class="show_register_form">@lang('admin.Sign up')</a></p>

                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="form-control btn btn-primary">@lang('admin.login')</button>
                </div>
            </form>

        </div>
        <div class="modal-content form_register_content" style="display: none">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Sign Up</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{route('website.register')}}" method="post" class="form_register">
                <div class="modal-body mx-3">
                    <div class="md-form mb-4 mt-3">
                        <input type="name" id="defaultForm-email" class="form-control validate" name="name"
                               placeholder="@lang('admin.Enter your name')" required>
                    </div>
                    <div class="md-form mb-4">
                        <input type="email" id="defaultForm-email" class="form-control validate" name="email"
                               placeholder="@lang('admin.Enter your email')" required>
                    </div>

                    <div class="md-form  mb-4">
                        <input type="password" id="defaultForm-pass" class="form-control validate" name="password"
                               placeholder="@lang('admin.Enter your password')" required>
                    </div>
                    <div class="md-form  mb-4">
                        <p>@lang('admin.I have account') <a href="#" class="show_login_form">@lang('admin.Sign in')</a></p>

                    </div>


                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="form-control btn btn-primary">@lang('admin.register')</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif
@include('website.layouts.footer')

<script src="{{url('website/')}}/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
<script src="{{url('website/')}}/assets/bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="{{url('/dashboard_assets')}}/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{url('/dashboard_assets')}}/global/plugins/bootstrap-toastr/toastr.min.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="{{url('/dashboard_assets')}}/admin/pages/scripts/ui-toastr.js"></script>
<script src="{{url('website/')}}/assets/js/main.js"></script>
{{--<script src="{{url('website/')}}/common.js"></script>--}}

<script>
    const in_progress = "@lang('admin.in_progress')"

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "positionClass": "toast-bottom-right",
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": 0,//"5000",
        "extendedTimeOut": 0,//"1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };


    $(document).on('click',".favorite_item",function (event) {
        var $this = $(this);
        var url = $(this).attr('data-action');

        let data = {is_action : $(this).hasClass('active')?1:0};
        // console.log(data)
        // alert(data)

        $.post(url, data, function (response) {

            if ( $($this).hasClass('active')){
                $($this).removeClass('active');
            }else{
                $($this).addClass('active');

            }
            $($this).prev().text(response.count_favorite);




        });
    });

    $(".subscribe_form").submit(function (event) {
        event.preventDefault();
        var $this = $(this);
        {{--toastr.remove();--}}
        {{--toastr.warning("@lang('error.in_progress')");--}}


        var posted_data = $(this).serialize();//new FormData(this),
        url ='{{route('website.subscribe.create')}}';// $this.attr('action');
        $.post(url, posted_data, function (response) {

            $($this).find("[name='email']").val('');
            $($this).find('.msg').text(response.msg);
            $($this).parent().find('.msg').text(response.msg);
            setTimeout(function () {
                $('#popup').hide();
            }, 3000);



        });
    });


    $('.show_register_form').on('click',function show_login() {
        $('.form_login_content').fadeOut(1000 , function () {
            $('.form_register_content').fadeIn(1000);

        });


        //    $('.form_register_content').slideDown();

    });

    $('.show_login_form').on('click',function show_login() {
        $('.form_register_content').fadeOut(1000 , function () {
            $('.form_login_content').fadeIn(1000);

        });

    });

    $(".form_register_content form ,.form_login_content form").submit(function (event) {
        event.preventDefault();
        var $this = $(this);
        toastr.remove();
        toastr.warning("@lang('admin.in_progress')");

        var posted_data = $(this).serialize();
        var url = $(this).attr('action');
        $.post(url, posted_data,
            function (response, status) {

                toastr.remove();
                toastr.options.timeOut = 2000;
                if(response.status==true){
                    toastr.success(response.message);
                    setTimeout(function () {
                        location.reload();
                    },2000);

                }
                else
                toastr.error(response.message);
            })
            .fail(function (response) {
                let  message = '';
                toastr.remove();

                for (var error in response.responseJSON.errors) {
                    for (var line in response.responseJSON.errors[error]) {
                        message += "\n" + response.responseJSON.errors[error][line];
                    }
                }

                console.log(response);
                if(message=="")
                    message = response.responseJSON.message;
                toastr.options.timeOut = 10000;

                toastr.error(message);

            });
    });
    $('[data-action="change-password"]').click(function () {
        $('#change-password').modal('show');
    });


    $('[data-action="edit-profile"]').click(function () {
        $('#edit-profile').modal('show');
    });



    $("#edit-profile form").submit(function (event) {
        event.preventDefault();
        var $this = $(this);
        toastr.remove();
        toastr.warning("@lang('admin.in_progress')");


        // var posted_data = new FormData(this);//$(this).serialize();//new FormData(this),
        var posted_data = new  FormData(this); //$(this).serialize();//new FormData(this),
        url = $this.attr('action');

        $.ajax({
            url: url,
            data: posted_data,
            processData: false,
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            type: 'POST',
            success: function ( response ) {
                toastr.remove();
                toastr.options.timeOut = 2000;
                toastr.success(response.message);
                $('.name_admin').html(response.user.name);
                $('.avatar_user img').attr('src',response.user.image_url);
                $('#edit-profile').modal('hide');
            },
            fail:function (response , exception) {
                let  message = '';
                toastr.remove();

                for (var error in response.responseJSON.errors) {
                    for (var line in response.responseJSON.errors[error]) {
                        message += "\n" + response.responseJSON.errors[error][line];
                    }
                }
                toastr.options.timeOut = 10000;

                toastr.error(message);


            }
        });




    });

    // $('.name_admin').text(11);
    $("#change-password").submit(function (event) {
        event.preventDefault();
        var $this = $(this);
        toastr.remove();
        toastr.warning("@lang('admin.in_progress')");

        var posted_data = $this.find('form').serialize();
        $.post("{{route('change-password')}}", posted_data,
            function (response, status) {
                $this.find('[type="reset"]').click();
                $this.modal('hide');
                toastr.remove();
                toastr.options.timeOut = 2000;
                toastr.success(response.message);
            })
            .fail(function (response) {
                let  message = '';
                toastr.remove();

                for (var error in response.responseJSON.errors) {
                    for (var line in response.responseJSON.errors[error]) {
                        message += "\n" + response.responseJSON.errors[error][line];
                    }
                }

                console.log(response);
                if(message=="")
                    message = response.responseJSON.message;
                toastr.options.timeOut = 10000;

                toastr.error(message);

            });
    });



</script>
@stack('js')

</body>

</html>
