@extends('dashboard.layouts.index')

@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all"
          rel="stylesheet" type="text/css"/>

@endpush
@section('title',$title)
@section('content')
    <div class="col-md-12 col-sm-12">
        <div class="profile-content">
            <div class="row">
                <form role="form" method="post" action="{{route('dashboard.image.store')}}"
                      enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-12">
                        <div class="portlet light">
                            <div class="portlet-title tabbable-line">
                                <div class="caption   caption-md font-green">
                                    <i class="icon-settings font-green"></i>
                                    <span class="caption-subject bold uppercase">@lang('admin.create')</span>
                                </div>

                            </div>
                            <div class="portlet-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group last">
                                            <label class="control-label col-md-3">@lang('admin.image')</label>
                                            <div class="col-md-9">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail"
                                                         style="width: 200px; height: 150px;">
                                                        <img
                                                            src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
                                                            alt="">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                                         style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                                    <div>
													<span class="btn default btn-file">
													<span class="fileinput-new">
													Select image </span>
													<span class="fileinput-exists">
													Change </span>
												<input type="file" required

                                                       name="image">
													</span>

                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-actions noborder">
                                <button type="submit" class="btn blue">@lang('admin.save')</button>
                                <button type="reset" class="btn default">@lang('admin.cancel')</button>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>


@endsection

@push('js')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    {{--            <script type="text/javascript" src="{{url('/dashboard_assets')}}/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>--}}
    {{--            <script type="text/javascript" src="{{url('/dashboard_assets')}}/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>--}}
    {{--            <script src="{{url('/dashboard_assets')}}/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>--}}
    {{--            <script src="{{url('/dashboard_assets')}}/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>--}}
    <script src="{{url('/dashboard_assets')}}/global/plugins/bootstrap-summernote/summernote.min.js"
            type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <script>
        $(document).ready(function () {
            $('.summernote_1').summernote({height: 300});

            //       ComponentsEditors.init();

            /*    $("#input-20").fileinput({
                    browseClass: "btn btn-primary btn-block" ,
                    showCaption: false,
                    showRemove: false,
                    showUpload: false
                });*/
            $('.select-2').select2({
                dir: 'rtl',
                width: '100%'
            });

        });
    </script>



@endpush
