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
                <form role="form" method="post" class="form-post-data" action="{{route('dashboard.article.update',$article->id)}}"
                      enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="col-md-12">
                        <div class="portlet light">
                            <div class="portlet-title tabbable-line">
                                <div class="caption   caption-md font-green">
                                    <i class="icon-settings font-green"></i>
                                    <span class="caption-subject bold uppercase">@lang('admin.edit')</span>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a href="#tab_1_1" data-toggle="tab"> @lang('admin.ar')</a>
                                    </li>
                                    <li class="active">
                                        <a href="#tab_1_2" data-toggle="tab"> @lang('admin.en')</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <!-- GENERAL QUESTION TAB -->
                                    <div class="tab-pane " id="tab_1_1">
                                        <div class="form-body">


                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control" name="ar[title]"
                                                               value="{{old('ar.title')??@$article->translate('ar')->title}}"
                                                               id="form_control_1" placeholder="@lang('admin.title') ">
                                                        <label for="form_control_1">@lang('admin.title')
                                                            (@lang('admin.ar'))*</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control" name="ar[description]"
                                                               value="{{old('ar.description')??@$article->translate('ar')->description}}"
                                                               id="form_control_1"
                                                               placeholder="@lang('admin.description')">
                                                        <label for="form_control_1">@lang('admin.description')
                                                            (@lang('admin.ar')) *</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input">
                                                        <label for="summernote_1">@lang('admin.content')
                                                            (@lang('admin.ar')) * </label>

                                                        <textarea name="ar[content]" class="ckeditor form-control">
                                                {{old('ar.content')??@$article->translate('ar')->content}}
                                            </textarea>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label"
                                                       for="keywords">@lang('admin.keywords') (@lang('admin.ar')
                                                    )</label>
                                                <div class="col-md-10">

                                                    <input id="tags_1" type="text" name="ar[keywords]"
                                                           data-role="tagsinput"
                                                           class="form-control tags "
                                                           placeholder="@lang('admin.keywords')"
                                                           value="{{old('ar.keywords')??@$article->translate('ar')->keywords}}"/>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- END GENERAL QUESTION TAB -->
                                    <!-- MEMBERSHIP TAB -->
                                    <div class="tab-pane active" id="tab_1_2">
                                        <div class="form-body">


                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control" name="en[title]"
                                                               value="{{old('en.title')??@$article->translate('en')->title}}" required
                                                               id="form_control_1" placeholder="@lang('admin.title') ">
                                                        <label for="form_control_1">@lang('admin.title')
                                                            (@lang('admin.en'))*</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control" required
                                                               name="en[description]"
                                                               value="{{old('en.description')??@$article->translate('en')->description}}"
                                                               id="form_control_1"
                                                               placeholder="@lang('admin.description')">
                                                        <label for="form_control_1">@lang('admin.description')
                                                            (@lang('admin.en')) *</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input">
                                                        <label for="summernote_1">@lang('admin.content')
                                                            (@lang('admin.en')) * </label>

                                                        <textarea name="en[content]" required class="ckeditor form-control">
                                                {{old('en.content')??@$article->translate('en')->content}}
                                            </textarea>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label"
                                                       for="keywords">@lang('admin.keywords') (@lang('admin.en')
                                                    )</label>
                                                <div class="col-md-10">

                                                    <input id="tags_1" type="text" name="en[keywords]"
                                                           data-role="tagsinput"
                                                           class="form-control tags "
                                                           placeholder="@lang('admin.keywords')"
                                                           value="{{old('en.keywords')??@$article->translate('en')->keywords}}"/>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- END MEMBERSHIP TAB -->
                                </div>

                                <br>
                                <hr/>

                                <br>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <label class="col-md-2 control-label"
                                                   for="title_id">@lang('admin.category')</label>
                                            <div class="col-md-10">
                                                <select name="category_id" class="form-control" required id="title_id">
                                                    @foreach($categories as $item)
                                                        <option value="{{$item->id}}" {{$article->category_id ==  $item->id ?"selected":""}}>{{$item->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <label class="col-md-2 control-label"
                                                   for="title_id">@lang('admin.tags')</label>
                                            <div class="col-md-10">
                                                <select name="tag_id[]" class="form-control select-2" multiple id="title_id">
                                                    @foreach($tags as $item)
                                                        <option value="{{$item->id}}" {{in_array($item->id,$selected_tags) ?"selected":""}}>{{$item->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group  form-md-line-input">
                                            <label for="form_control_1">@lang('admin.send_mail') : </label>
                                            <div
                                                class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate bootstrap-switch-on"
                                                style="width: 101px;">

                                                <div class="bootstrap-switch-container"
                                                     style="width: 148px; margin-left: 0px;">

                                                    <input type="checkbox" name="send_mail" class="make-switch"
                                                           data-on-text="ON" data-off-color="danger"></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6"><div class="form-group last">
                                            <label class="control-label col-md-3">@lang('admin.image')</label>
                                            <div class="col-md-9">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                        <img
                                                            src="{{$article->image_url}}"
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
													<input type="hidden" value="" name="image_name"><input type="file"

                                                                                                           name="image">
													</span>

                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div></div>
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

            <script src="{{url('/dashboard_assets')}}/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <script>
                $(document).ready(function () {
                    $('.summernote_1').summernote({height: 300});


                    $('.select-2').select2({
                        dir: 'rtl',
                        width: '100%'
                    });

                });
            </script>



    @endpush
