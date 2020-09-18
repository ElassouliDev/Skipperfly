@extends('dashboard.layouts.index')

@section('title',$title)
@section('content')

    <div class="col-md-12 col-sm-12">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-settings font-green"></i>
                    <span class="caption-subject bold uppercase">{{$title}}</span>
                </div>

            </div>
            <div class="portlet-body form">
                <form role="form" method="post" action="{{route('dashboard.setting.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="form-group form-md-line-input">
                            <input type="text" class="form-control" required name="title"
                                   value="{{old('title')??@$settings['title']}}" id="form_control_1"
                                   placeholder="@lang('admin.title')">
                            <label for="form_control_1">@lang('admin.title')</label>
                        </div>
                        <div class="form-group form-md-line-input">
                            <input type="text" class="form-control"  name="description"
                                   value="{{old('description')??@$settings['description']}}" id="form_control_1"
                                   placeholder="@lang('admin.description')">
                            <label for="form_control_1">@lang('admin.description')</label>
                        </div>
                        <div class="form-group form-md-line-input">
                            <input type="url" class="form-control" name="google_play_link"
                                   value="{{old('google_play_link')??@$settings['google_play_link']}}"
                                   id="form_control_1" placeholder="@lang('admin.google_play_link')">
                            <label for="form_control_1">@lang('admin.google_play_link')</label>
                        </div>
                        <div class="form-group form-md-line-input">
                            <input type="url" class="form-control" name="google_play_link"
                                   value="{{old('app_store_link')??@$settings['app_store_link']}}" id="form_control_1"
                                   placeholder="@lang('admin.app_store_link')">
                            <label for="form_control_1">@lang('admin.app_store_link')</label>
                        </div>


                        <div class="form-group form-md-line-input">
                            <input type="url" class="form-control" name="facebook"
                                   value="{{old('facebook')??@$settings['facebook']}}" id="form_control_1"
                                   placeholder="@lang('admin.facebook')">
                            <label for="form_control_1">@lang('admin.facebook')</label>
                        </div>
                        <div class="form-group form-md-line-input">
                            <input type="url" class="form-control" name="twitter"
                                   value="{{old('twitter')??@$settings['twitter']}}" id="form_control_1"
                                   placeholder="@lang('admin.twitter')">
                            <label for="form_control_1">@lang('admin.twitter')</label>
                        </div>
                        <div class="form-group form-md-line-input">
                            <input type="url" class="form-control" name="linkedin"
                                   value="{{old('linkedin')??@$settings['linkedin']}}" id="form_control_1"
                                   placeholder="@lang('admin.linkedin')">
                            <label for="form_control_1">@lang('admin.linkedin')</label>
                        </div>
                        <div class="form-group form-md-line-input">
                            <input type="url" class="form-control" name="linkedin"
                                   value="{{old('instagram')??@$settings['instagram']}}" id="form_control_1"
                                   placeholder="@lang('admin.instagram')">
                            <label for="form_control_1">@lang('admin.instagram')</label>
                        </div>
                        <div class="form-group form-md-line-input">
                            <input type="text" class="form-control" name="text_notification"
                                   value="{{old('text_notification')??@$settings['text_notification']}}" id="form_control_1"
                                   placeholder="@lang('admin.text_notification')">
                            <label for="form_control_1">@lang('admin.text_notification')</label>
                        </div>
                        <div class="form-group form-md-line-input">
                            <input type="text" class="form-control" name="home_page_image_title"
                                   value="{{old('home_page_image_title')??@$settings['home_page_image_title']}}" id="form_control_1"
                                   placeholder="@lang('admin.home_page_image_title')">
                            <label for="form_control_1">@lang('admin.home_page_image_title')</label>
                        </div>
                        <div class="form-group form-md-line-input">
                            <input type="text" class="form-control" name="home_page_image_desc"
                                   value="{{old('home_page_image_desc')??@$settings['home_page_image_desc']}}" id="form_control_1"
                                   placeholder="@lang('admin.home_page_image_desc')">
                            <label for="form_control_1">@lang('admin.home_page_image_desc')</label>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group form-md-line-input">
                                    <label class="col-md-12 control-label"
                                           for="keywords">@lang('admin.keywords')</label>
                                    <div class="col-md-10">

                                        <input id="tags_1" type="text" name="keywords" data-role="tagsinput"
                                               class="form-control tags " placeholder="@lang('admin.keywords')"
                                               value="{{old('keywords')??@$settings['keywords']}}"/>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-4">
                                <div class="col-md-6"><div class="form-group last">
                                        <label class="control-label col-md-12">@lang('admin.logo')</label>
                                        <div class="col-md-9">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;"   >
                                                    <img
                                                        src="{{isset($settings['logo'])&& !empty($settings['logo'])?url('storage/').'/'.$settings['logo']:url('/website/assets/img/Logo2.svg')}}"
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
													<input type="file"  name="logo">
													</span>

                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-md-6"><div class="form-group last">
                                        <label class="control-label col-md-12">@lang('admin.home_image')</label>
                                        <div class="col-md-9">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img
                                                        src="{{isset($settings['home_image']) && !empty($settings['home_image']) ?url('storage/').'/'.$settings['home_image']:url('/website/assets/img/header.png')}}"

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
													<input type="file"

                                                                                                           name="home_image">
													</span>

                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>



                    </div>
                    <div class="form-actions noborder">
                        <button type="submit" class="btn blue">@lang('admin.save')</button>
                    </div>
                </form>
            </div>
        </div>


@endsection
