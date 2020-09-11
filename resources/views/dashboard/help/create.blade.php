@extends('dashboard.layouts.index')

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
                <form role="form"  method="post" action="{{route('help.store')}}">
                    @csrf
                    <div class="form-body">
                        <div class="form-group form-md-line-input">
                            <input type="text" class="form-control"  required name="content_ar" value="{{old('content_ar')}}" id="form_control_1" placeholder="@lang('admin.content_ar')">
                            <label for="form_control_1">@lang('admin.content_ar')</label>
{{--                            <span class="help-block">Some help goes here...</span>--}}
                        </div>
                        <div class="form-group form-md-line-input">
                            <input type="text" class="form-control" id="form_control_1" required name="content_en"  value="{{old('content_en')}}" placeholder="@lang('admin.content_en')">
                            <label for="form_control_1">@lang('admin.content_en')</label>
{{--                            <span class="help-block">Some help goes here...</span>--}}
                        </div>

                    </div>
                    <div class="form-actions noborder">
                        <button type="submit" class="btn blue">@lang('admin.save')</button>
                        <button type="reset" class="btn default">@lang('admin.cancel')</button>
                    </div>
                </form>
            </div>
        </div>


@endsection
