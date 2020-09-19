@extends('dashboard.layouts.index')

@section('title',$title)
@section('content')

    <div class="col-md-12 col-sm-12">
        <div class="profile-content">
            <div class="row">
                <form role="form" method="post" action="{{route('dashboard.setting.store')}}"
                      enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-12">
                        <div class="portlet light">
                            <div class="portlet-title tabbable-line">
                                <div class="caption   caption-md font-green">
                                    <i class="icon-settings font-green"></i>
                                    <span class="caption-subject bold uppercase">{{$title}}</span>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_1_1" data-toggle="tab"> @lang('admin.en')</a>
                                    </li>
                                    <li>
                                        <a href="#tab_1_2" data-toggle="tab"> @lang('admin.ar')</a>
                                    </li>
                                    <li class="">
                                        <a href="#tab_1_3" data-toggle="tab"> @lang('admin.images')</a>
                                    </li>
                                    <li class="">
                                        <a href="#tab_1_4" data-toggle="tab"> @lang('admin.social_and_url')</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <!-- GENERAL QUESTION TAB -->
                                    <div class="tab-pane active" id="tab_1_1">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" required name="title_en"
                                                   value="{{old('title_en')??@$settings['title_en']}}"
                                                   id="form_control_1"
                                                   placeholder="@lang('admin.title')">
                                            <label for="form_control_1">@lang('admin.title') (@lang('admin.en'))</label>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" name="description_en"
                                                   value="{{old('description_en')??@$settings['description_en']}}"
                                                   id="form_control_1"
                                                   placeholder="@lang('admin.description')">
                                            <label for="form_control_1">@lang('admin.description') (@lang('admin.en')
                                                )</label>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" name="text_notification_en"
                                                   value="{{old('text_notification_en')??@$settings['text_notification_en']}}"
                                                   id="form_control_1"
                                                   placeholder="@lang('admin.text_notification')">
                                            <label for="form_control_1">@lang('admin.text_notification')
                                                (@lang('admin.en'))</label>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" name="home_page_image_title_en"
                                                   value="{{old('home_page_image_title_en')??@$settings['home_page_image_title_en']}}"
                                                   id="form_control_1"
                                                   placeholder="@lang('admin.home_page_image_title')">
                                            <label for="form_control_1">@lang('admin.home_page_image_title')
                                                (@lang('admin.en'))</label>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" name="home_page_image_desc_en"
                                                   value="{{old('home_page_image_desc_en')??@$settings['home_page_image_desc_en']}}"
                                                   id="form_control_1"
                                                   placeholder="@lang('admin.home_page_image_desc')">
                                            <label for="form_control_1">@lang('admin.home_page_image_desc')
                                                (@lang('admin.en'))</label>
                                        </div>

                                        <div class="form-group form-md-line-input" style="overflow: auto;">
                                            <label class="col-md-12 control-label"
                                                   for="keywords">@lang('admin.keywords') (@lang('admin.en'))</label>
                                            <div class="col-md-10">

                                                <input id="tags_1" type="text" name="keywords_en" data-role="tagsinput"
                                                       class="form-control tags " placeholder="@lang('admin.keywords')"
                                                       value="{{old('keywords_en')??@$settings['keywords_en']}}"/>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- END GENERAL QUESTION TAB -->
                                    <!-- GENERAL QUESTION TAB -->
                                    <div class="tab-pane" id="tab_1_2">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" name="title_ar"
                                                   value="{{old('title_ar')??@$settings['title_ar']}}"
                                                   id="form_control_1"
                                                   placeholder="@lang('admin.title')">
                                            <label for="form_control_1">@lang('admin.title') (@lang('admin.ar'))</label>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" name="description_ar"
                                                   value="{{old('description_en')??@$settings['description_ar']}}"
                                                   id="form_control_1"
                                                   placeholder="@lang('admin.description')">
                                            <label for="form_control_1">@lang('admin.description') (@lang('admin.ar')
                                                )</label>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" name="text_notification_ar"
                                                   value="{{old('text_notification_ar')??@$settings['text_notification_ar']}}"
                                                   id="form_control_1"
                                                   placeholder="@lang('admin.text_notification')">
                                            <label for="form_control_1">@lang('admin.text_notification')
                                                (@lang('admin.ar'))</label>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" name="home_page_image_title_ar"
                                                   value="{{old('home_page_image_title_ar')??@$settings['home_page_image_title_ar']}}"
                                                   id="form_control_1"
                                                   placeholder="@lang('admin.home_page_image_title')">
                                            <label for="form_control_1">@lang('admin.home_page_image_title')
                                                (@lang('admin.ar'))</label>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" name="home_page_image_desc_ar"
                                                   value="{{old('home_page_image_desc_ar')??@$settings['home_page_image_desc_ar']}}"
                                                   id="form_control_1"
                                                   placeholder="@lang('admin.home_page_image_desc')">
                                            <label for="form_control_1">@lang('admin.home_page_image_desc')
                                                (@lang('admin.ar'))</label>
                                        </div>

                                        <div class="form-group form-md-line-input" style="overflow: auto;">
                                            <label class="col-md-12 control-label"
                                                   for="keywords">@lang('admin.keywords') (@lang('admin.ar'))</label>
                                            <div class="col-md-10">

                                                <input id="tags_1" type="text" name="keywords_ar" data-role="tagsinput"
                                                       class="form-control tags " placeholder="@lang('admin.keywords')"
                                                       value="{{old('keywords_ar')??@$settings['keywords_ar']}}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END GENERAL QUESTION TAB -->
                                    <!-- MEMBERSHIP TAB -->
                                    <div class="tab-pane " id="tab_1_3">
                                        <div class="col-md-6">
                                            <div class="form-group last">
                                                <label class="control-label col-md-12">@lang('admin.logo')</label>
                                                <div class="col-md-9">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail"
                                                             style="width: 200px; height: 150px;">
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
													<input type="file" name="logo">
													</span>

                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group last">
                                                <label class="control-label col-md-12">@lang('admin.home_image')</label>
                                                <div class="col-md-9">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail"
                                                             style="width: 200px; height: 150px;">
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
                                    <div class="tab-pane " id="tab_1_4">
                                        <div class="form-group form-md-line-input">
                                            <input type="url" class="form-control" name="google_play_link"
                                                   value="{{old('google_play_link')??@$settings['google_play_link']}}"
                                                   id="form_control_1" placeholder="@lang('admin.google_play_link')">
                                            <label for="form_control_1">@lang('admin.google_play_link')</label>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <input type="url" class="form-control" name="google_play_link"
                                                   value="{{old('app_store_link')??@$settings['app_store_link']}}"
                                                   id="form_control_1"
                                                   placeholder="@lang('admin.app_store_link')">
                                            <label for="form_control_1">@lang('admin.app_store_link')</label>
                                        </div>


                                        <div class="form-group form-md-line-input">
                                            <input type="url" class="form-control" name="facebook"
                                                   value="{{old('facebook')??@$settings['facebook']}}"
                                                   id="form_control_1"
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
                                                   value="{{old('linkedin')??@$settings['linkedin']}}"
                                                   id="form_control_1"
                                                   placeholder="@lang('admin.linkedin')">
                                            <label for="form_control_1">@lang('admin.linkedin')</label>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <input type="url" class="form-control" name="linkedin"
                                                   value="{{old('instagram')??@$settings['instagram']}}"
                                                   id="form_control_1"
                                                   placeholder="@lang('admin.instagram')">
                                            <label for="form_control_1">@lang('admin.instagram')</label>
                                        </div>

                                    </div>
                                    <!-- END MEMBERSHIP TAB -->
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
