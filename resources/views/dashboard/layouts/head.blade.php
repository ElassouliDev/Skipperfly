<meta charset="utf-8"/>
<title>{{@$settings_website['title']}}-@yield('title')</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="{{@$settings_website['description']}}" name="description"/>
<meta content="{{@$settings_website['title']}}" name="author"/>
<meta content="{{@$settings_website['title']}}" name="title"/>
<meta content="{{@$settings_website['keywords']}}" name="keywords"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="{{asset('dashboard_assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('dashboard_assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('dashboard_assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('dashboard_assets/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('dashboard_assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="{{asset('dashboard_assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('dashboard_assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('dashboard_assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('dashboard_assets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="{{asset('dashboard_assets/admin/pages/css/tasks-rtl.css')}}" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="{{asset('dashboard_assets/global/css/components-rounded.css')}}" id="style_components" rel="stylesheet" type="text/css"/>
<link href="{{asset('dashboard_assets/global/css/plugins-rtl.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('dashboard_assets/admin/layout4/css/layout.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('dashboard_assets/admin/layout4/css/themes/light.css')}}" rel="stylesheet" type="text/css" id="style_color"/>
<link href="{{asset('dashboard_assets/admin/layout4/css/custom.css')}}" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="{{isset($settings_website['logo'])&& !empty($settings_website['logo'])?url('storage/').'/'.$settings_website['logo']:url('/website/assets/img/Logo1.svg')}}"/>
<link rel="stylesheet" type="text/css" href="{{url('/dashboard_assets')}}/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>


<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="{{url('/dashboard_assets')}}/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="{{url('/dashboard_assets')}}/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
<link rel="stylesheet" type="text/css" href="{{url('/dashboard_assets')}}/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
<link rel="stylesheet" type="text/css" href="{{url('/dashboard_assets')}}/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{url('/dashboard_assets')}}/datatable_custom/style2.css" />

<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="{{url('/dashboard_assets')}}//global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
<link rel="stylesheet" type="text/css" href="{{url('/dashboard_assets')}}//global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" type="text/css" href="{{url('/dashboard_assets')}}/global/plugins/bootstrap-summernote/summernote.css">
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="{{url('/dashboard_assets')}}/global/plugins/clockface/css/clockface.css"/>
<link rel="stylesheet" type="text/css" href="{{url('/dashboard_assets')}}/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"/>
<link rel="stylesheet" type="text/css" href="{{url('/dashboard_assets')}}/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
<link rel="stylesheet" type="text/css" href="{{url('/dashboard_assets')}}/global/plugins/bootstrap-colorpicker/css/colorpicker.css"/>
<link rel="stylesheet" type="text/css" href="{{url('/dashboard_assets')}}/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
<link rel="stylesheet" type="text/css" href="{{url('/dashboard_assets')}}/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
<!-- END PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="{{url('/dashboard_assets')}}/global/plugins/bootstrap-toastr/toastr.min.css"/>
<link rel="stylesheet" type="text/css" href="{{url('dashboard_assets')}}/taginput/bootstrap-tagsinput.css"/>
<style>
    .bootstrap-tagsinput .tag {

        display: inline-block;
    }
    .category_show_text_temp {
        text-transform: capitalize;
        font-size: 14px;
        border-radius: 3px;
        display: inline-block;
        font-weight: 500;
        text-align: center;
        padding: 15px;
    }
</style>
<style>
    .avatar.fileinput .thumbnail{
        width: 100px;
        height: 100px;
        padding: 0;
        overflow: hidden;
        border-radius: 50%;
        outline: none;
    }
    .avatar.fileinput {
               margin-bottom: 30px;
    }
    .avatar.fileinput .thumbnail > img{
        width: 100px;
        height: 100px;
        padding: 2px;
        border-radius: 50%;


    }
</style>

<!-- BEGIN PAGE LEVEL STYLES -->
{{--<link href="{{url('/dashboard_assets')}}/global/plugins/dropzone/css/dropzone.css" rel="stylesheet"/>--}}
{{--<link rel="stylesheet" type="text/css" href="{{url('/dashboard_assets')}}/global/plugins/jquery-tags-input/jquery.tagsinput.css"/>--}}

<!-- END PAGE LEVEL STYLES -->
{{--<script src="{{url('dashboard_assets')}}/taginput/bootstrap-tagsinput.min.js" type="text/javascript"></script>--}}
