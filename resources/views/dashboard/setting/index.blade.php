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
                <form role="form"  method="post" action="{{route('setting.store')}}">
                    @csrf
                    <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    <input type="url" class="form-control"  required name="instagram" value="{{old('instagram')??$settings['instagram']}}" id="form_control_1" placeholder="@lang('admin.instagram')">
                                    <label for="form_control_1">@lang('admin.instagram')</label>
                                </div>


                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control"  required name="telegram" value="{{old('telegram')??$settings['telegram']}}" id="form_control_1" placeholder="@lang('admin.telegram')">
                                    <label for="form_control_1">@lang('admin.telegram')</label>
                                </div>


                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control"  required name="snapchat" value="{{old('snapchat')??$settings['snapchat']}}" id="form_control_1" placeholder="@lang('admin.snapchat')">
                                    <label for="form_control_1">@lang('admin.snapchat')</label>
                                </div>


                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="form_control_1"  name="title_ads_ar"  value="{{old('title_ads_ar')??$settings['title_ads_ar']}}" placeholder="@lang('admin.moved_title')">
                                    <label for="form_control_1">@lang('admin.moved_title')  (عربي ) </label>
                                </div>

                             <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="form_control_1"  name="title_ads_en"  value="{{old('title_ads_en')??@$settings['title_ads_en']}}" placeholder="@lang('admin.moved_title')">
                                    <label for="form_control_1">@lang('admin.moved_title') (إنجليزي ) </label>
                                </div>






                    </div>
                    <div class="form-actions noborder">
                        <button type="submit" class="btn blue">@lang('admin.save')</button>
                    </div>
                </form>
            </div>
        </div>


@endsection
