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
                <div class="row">
                    <div class="col-md-6">
                        <form role="form" method="post" action="{{route('country.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" required name="name_ar" value="{{old('name_ar')}}"
                                           id="form_control_1" placeholder="@lang('admin.name_ar')">
                                    <label for="form_control_1">@lang('admin.name_ar')</label>
                                    {{--                            <span class="help-block">Some help goes here...</span>--}}
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="form_control_1" required name="name_en"
                                           value="{{old('name_en')}}" placeholder="@lang('admin.name_en')">
                                    <label for="form_control_1">@lang('admin.name_en')</label>
                                    {{--                            <span class="help-block">Some help goes here...</span>--}}
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="form_control_1" required name="order"
                                           value="{{old('order')??0}}" placeholder="@lang('admin.order')">
                                    <label for="form_control_1">@lang('admin.order')</label>
                                    {{--                            <span class="help-block">Some help goes here...</span>--}}
                                </div>

                                <div class="form-group last">
                                    <label class="control-label col-md-3">@lang('admin.image')</label>
                                    <div class="col-md-9">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                            <div>
													<span class="btn default btn-file">
													<span class="fileinput-new">
													Select image </span>
													<span class="fileinput-exists">
													Change </span>
													<input type="hidden" value="" name="..."><input type="file" required  name="flag">
													</span>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-actions noborder">
                                <button type="submit" class="btn blue">@lang('admin.save')</button>
                                <button type="reset" class="btn default">@lang('admin.cancel')</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>


@endsection
@push('js')

            <script>
                $('.select-2').select2({
                    dir: 'rtl',
                    width: '100%'
                });

            </script>
    @endpush
