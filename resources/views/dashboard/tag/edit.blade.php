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
                <form role="form"  method="post" action="{{route('dashboard.tag.update',$tag->id)}}">
                    @csrf
                    @method('put')
                    <div class="form-body">
                        <div class="form-group form-md-line-input">
                            <input type="text" class="form-control"  required name="title" value="{{old('title')?:$tag->title}}" id="form_control_1" placeholder="@lang('admin.title')">
                            <label for="form_control_1">@lang('admin.title')</label>
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
