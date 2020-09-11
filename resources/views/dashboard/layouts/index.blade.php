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
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    @include('dashboard.layouts.head')
    @stack('css')

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
@include('dashboard.layouts.nav')
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
@include('dashboard.layouts.sidebar')
<!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN PAGE HEAD -->
            <div class="page-head">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1>{{$title}}</small></h1>
                </div>
                <!-- END PAGE TITLE -->

            </div>
            <!-- END PAGE HEAD -->
            <!-- BEGIN PAGE BREADCRUMB -->

            <ul class="page-breadcrumb breadcrumb">
                @if(isset($breadcrumbs))
                    @foreach($breadcrumbs as $name=>$url)

                        <li class="breadcrumb-item {{$loop->last ?"active":""}}">
                            @if($loop->last)
                                {{$name}}
                            @else
                                <a href="{{$url??"javascript:;"}}">{{$name}}</a><i class="fa fa-circle"></i>
                            @endif
                        </li>
                        {{--                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>--}}
                        {{--                    <li class="breadcrumb-item"><a href="category.html">Categories</a></li>--}}
                        {{--                    <li class="breadcrumb-item active">Add Category</li>--}}
                    @endforeach
                @endif
                {{--                <li>--}}
                {{--                    <a href="javascript:;">Home</a><i class="fa fa-circle"></i>--}}
                {{--                </li>--}}
                {{--                <li class="active">--}}
                {{--                    Dashboard--}}
                {{--                </li>--}}
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE CONTENT INNER -->
        @include('dashboard.layouts.messages')
        @yield('content')
        <!-- END PAGE CONTENT INNER -->


        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
{{--<div class="modal fade slide-up disable-scroll" id="change-password" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content-wrapper">
            <div class="modal-content">
                <div class="modal-header clearfix text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                            class="pg-close fs-14"></i></button>
                    <h5>تعديل كلمة المرور</h5>
                </div>
                <div class="modal-body">
                    <form role="form" autocomplete="off">
                        @method('put')
                        <div class="form-group-attached">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>كلمة المرور الحالية:</label>
                                        <input name="current_password" type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>كلمة المرور الجديدة:</label>
                                        <input name="new_password" type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>أعد إدخال كلمة المرور الجديدة:</label>
                                        <input name="new_password_confirmation" type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 m-t-10 sm-m-t-10">
                                <button type="submit" class="btn btn-primary btn-block m-t-5">حفظ البيانات</button>
                                <button type="reset" class="hide"></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
{{--<div class="modal fade slide-up disable-scroll" id="edit-profile" role="dialog"s>
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

                                <div class="row">
                                    <div class="col-md-12 m-t-10 sm-m-t-10 m-auto btn-div">
                                        <button type="submit"
                                                class="btn btn-primary">@lang('admin.save')</button>
                                        <button type="reset" class="btn btn-danger"
                                                data-dismiss="modal">@lang('admin.cancel')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>>--}}
<form style="display: none" method="post" id="delete_form">
    @method('DELETE')

    @csrf

</form
@include('dashboard.layouts.footer')

<script >
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
    $(document).on('click', '[data-action=delete]', function(event) {
        event.preventDefault();
        $this = $(this);

        swal({
            title: $($this).attr('data-msg'),
            icon: 'warning',
            dangerMode: true,
            buttons: ["@lang('admin.cancel')", "@lang('admin.delete')"]
        })

            .then((process) => {
                if (!process) {

                    return;
                }

                $('#delete_form').attr('action', $($this).attr('action-url'));

                $data = $('#delete_form').serialize();

                $.post($($this).attr('action-url'), $data, function(response) {
                    if (response.status == true) {
                        $('.dataTable').DataTable().ajax.reload();
                        swal(response.msg, '', 'success');
                    }
                });

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
        toastr.warning("@lang('error.in_progress')");


        var posted_data = $(this).serialize();//new FormData(this),
            url = $this.attr('action');


            $.post(url , posted_data,function (response) {
                toastr.remove();
                toastr.options.timeOut = 2000;
                toastr.success(response.message);
                $('.name_admin').html(response.user.name);
                $('#edit-profile').modal('hide');

            }).fail(function (response , exception) {
               let  message = '';
                toastr.remove();

                    for (var error in response.responseJSON.errors) {
                        for (var line in response.responseJSON.errors[error]) {
                            message += "\n" + response.responseJSON.errors[error][line];
                        }
                    }
                toastr.options.timeOut = 10000;

                toastr.error(message);


            });



    });

    // $('.name_admin').text(11);
    /*   $("#change-password").submit(function (event) {
          event.preventDefault();
          var $this = $(this);
          toastr.remove();
          toastr.warning("@lang('error.in_progress')");

        var posted_data = $this.find('form').serialize();
       $.post("{{('change-password')}}", posted_data,
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
    });*/



</script>
@stack('js')
</body>
<!-- END BODY -->
</html>
