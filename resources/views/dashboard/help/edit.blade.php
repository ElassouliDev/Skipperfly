@extends('dashboard.layouts.index')
@section('title',$title)

@section('content')

    <div class="col-md-12 col-sm-12">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption font-red-sunglo">
                    <i class="icon-settings font-red-sunglo"></i>
                    <span class="caption-subject bold uppercase">@lang('admin.edit')</span>
                </div>

            </div>
            <div class="portlet-body form">
                <form role="form"  method="post" action="{{route('help.update',$help->id)}}">
                    @csrf
                    @method('put')
                    <div class="form-body">
                        <div class="form-group form-md-line-input">
                            <input type="text" class="form-control"  required name="content_ar" value="{{old('content_ar')?:$help->content_ar}}" id="form_control_1" placeholder="@lang('admin.content_ar')">
                            <label for="form_control_1">@lang('admin.content_ar')</label>
                            {{--                            <span class="help-block">Some help goes here...</span>--}}
                        </div>
                        <div class="form-group form-md-line-input">
                            <input type="text" class="form-control" id="form_control_1" required name="content_en"  value="{{old('content_en')?:$help->content_en}}" placeholder="@lang('admin.content_en')">
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
