@extends('dashboard.layouts.index')

@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all"
          rel="stylesheet" type="text/css"/>

@endpush
@section('title',$title)
@section('content')

    <div class="col-md-12 col-sm-12">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-settings font-green"></i>
                    <span class="caption-subject bold uppercase">@lang('admin.create')</span>
                </div>

            </div>
            <div class="portlet-body form">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" method="post" class="form-post-data" action="{{route('dashboard.article.store')}}"
                              enctype="multipart/form-data">
                            @csrf

                            <div class="form-body">


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" required name="title"
                                                   value="{{old('title')}}"
                                                   id="form_control_1" placeholder="@lang('admin.title')">
                                            <label for="form_control_1">@lang('admin.title')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" required name="description"
                                                   value="{{old('description')}}"
                                                   id="form_control_1" placeholder="@lang('admin.description')">
                                            <label for="form_control_1">@lang('admin.description')</label>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <form class="form-horizontal form-bordered">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-1">Default Editor</label>
                                                    <div class="col-md-11">
                                                        <div name="summernote" id="summernote_1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" required name="desc_ar"
                                                   value="{{old('desc_ar')}}"
                                                   id="form_control_1" placeholder="@lang('admin.desc_ar')">
                                            <label for="form_control_1">@lang('admin.desc_ar')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" id="form_control_1" required
                                                   name="desc_en"
                                                   value="{{old('desc_en')}}" placeholder="@lang('admin.desc_en')">
                                            <label for="form_control_1">@lang('admin.desc_en')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="number" class="form-control" id="form_control_1" required
                                                   name="number_reviews"
                                                   value="{{old('number_reviews')??0}}"
                                                   placeholder="@lang('admin.number_reviews')">
                                            <label for="form_control_1">@lang('admin.number_reviews')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="number" class="form-control" id="form_control_1" required
                                                   name="number_orders"
                                                   value="{{old('number_orders')??0}}"
                                                   placeholder="@lang('admin.number_orders')">
                                            <label for="form_control_1">@lang('admin.number_orders')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" id="form_control_1" required
                                                   name="rate"
                                                   value="{{old('rate')??0}}" placeholder="@lang('admin.rate')">
                                            <label for="form_control_1">@lang('admin.rate')</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" id="form_control_1"
                                                   name="coupon_code"
                                                   value="{{old('coupon_code')}}"
                                                   placeholder="@lang('admin.coupon_code')">
                                            <label for="form_control_1">@lang('admin.coupon_code')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="url" class="form-control" id="form_control_1" name="url"
                                                   value="{{old('url')}}" placeholder="@lang('admin.url')">
                                            <label for="form_control_1">@lang('admin.url')</label>
                                        </div>
                                    </div>
                    {{--                <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <label class="col-md-2 control-label"
                                                   for="title_id">@lang('admin.product_titles')</label>
                                            <div class="col-md-10">
                                                <select name="title_id" class="form-control" required id="title_id">
                                                    @foreach($titles as $item)
                                                        <option value="{{$item->id}}">{{$item->title_ar}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>--}}

                                </div>

                            </div>

                                    <div class="form-group last">
                                        <label class="control-label col-md-3">@lang('admin.image')</label>
                                        <div class="col-md-9">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
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
													<input type="hidden" value="" name="image_name"><input type="file" required

                                                                                                           name="image">
													</span>
                                                    {{--                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">--}}
                                                    {{--                                                    Remove </a>--}}
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>


                            <div>

                            </div>
                            <div class="form-actions noborder">
                                <button type="submit" class="btn blue " id="submitBtn">@lang('admin.save')</button>
                                {{--                                <button  class="btn blue" id="submitFile">@lang('admin.saveششش')</button>--}}
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>


    @endsection

    @push('js')
        <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script type="text/javascript" src="{{url('/dashboard_assets')}}/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
            <script type="text/javascript" src="{{url('/dashboard_assets')}}/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
            <script src="{{url('/dashboard_assets')}}/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
            <script src="{{url('/dashboard_assets')}}/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
            <script src="{{url('/dashboard_assets')}}/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <script>
                $(document).ready(function () {
                    $('#summernote_1').summernote({height: 300});

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
