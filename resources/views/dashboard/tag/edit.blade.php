@extends('dashboard.layouts.index')
@section('title',$title)

@section('content')
    <div class="col-md-12 col-sm-12">
        <div class="profile-content">
            <div class="row">
                <form role="form"  method="post" action="{{route('dashboard.tag.update',$tag->id)}}">
                    @csrf
                    @method('put')

                    <div class="col-md-12">
                        <div class="portlet light">
                            <div class="portlet-title tabbable-line">
                                <div class="caption   caption-md font-green">
                                    <i class="icon-settings font-green"></i>
                                    <span class="caption-subject bold uppercase">@lang('admin.create')</span>
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
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" name="ar[title]"
                                                   value="{{old('ar.title')??@$tag->translate('ar')->title}}" id="form_control_1"
                                                   placeholder="@lang('admin.title')">
                                            <label for="form_control_1">@lang('admin.title') (@lang('admin.ar'))</label>
                                            {{--                            <span class="help-block">Some help goes here...</span>--}}
                                        </div>

                                    </div>
                                    <!-- END GENERAL QUESTION TAB -->
                                    <!-- MEMBERSHIP TAB -->
                                    <div class="tab-pane active" id="tab_1_2">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" required name="en[title]"
                                                   value="{{old('en.title')??@$tag->translate('en')->title}}" id="form_control_1"
                                                   placeholder="@lang('admin.title')">
                                            <label for="form_control_1">@lang('admin.title') (@lang('admin.en'))</label>
                                            {{--                            <span class="help-block">Some help goes here...</span>--}}
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
