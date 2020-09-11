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
                        <form role="form" method="post" action="{{route('coupon.store')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" required name="desc_ar"
                                           value="{{@$suggestion->desc??old('desc_ar')}}"
                                           id="form_control_1" placeholder="@lang('admin.desc_ar')">
                                    <label for="form_control_1">@lang('admin.desc_ar')</label>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="form_control_1" required name="desc_en"
                                           value="{{old('desc_en')}}" placeholder="@lang('admin.desc_en')">
                                    <label for="form_control_1">@lang('admin.desc_en')</label>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="form_control_1" required
                                           name="coupon_code"
                                           value="{{@$suggestion->coupon_code??old('coupon_code')}}" placeholder="@lang('admin.coupon_code')">
                                    <label for="form_control_1">@lang('admin.coupon_code')</label>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="form_control_1" name="url"
                                           value="{{old('url')}}" placeholder="@lang('admin.url')">
                                    <label for="form_control_1">@lang('admin.url')</label>
                                </div>
                                <div class="form-group form-md-line-input">

                                    <label for="form_control_1">@lang('admin.company_name')</label>
                                    <select name="company_id" class="form-control select-2">
                                        @foreach($companies as $company)
                                            <option value="{{$company->id}}"
                                                {{isset($suggestion)?
                                                    ($suggestion->company_id==$company->id?"selected":""):""}}>{{$company->name_ar}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if(isset($deal))
                                    <input hidden name="deal_id" value="{{$deal->id}}">
                                    <input hidden name="path" value="deal_coupon">
                                @else
                                <div class="form-group form-md-line-input">

                                    <label for="form_control_1">@lang('admin.deal_title')</label>
                                    <select name="deal_id" class="form-control select-2">
                                        <option value="">-- @lang('admin.deal_title') --</option>
                                        @foreach($deals as $deal)
                                            <option value="{{$deal->id}}">{{$deal->percentage .' '.$deal->desc_percentage_ar}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @endif

                                <div class="form-group form-md-line-input">
                                    <label for="form_control_1">@lang('admin.status') : </label>


                                    <div
                                        class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate bootstrap-switch-on"
                                        style="width: 133px;">

                                        <div class="bootstrap-switch-container" style="width: 148px; margin-left: 0px;">

                                            <input
                                                type="checkbox" name="status" class="make-switch" checked
                                                data-on-text="فعال" data-off-text="غير فعال" data-off-color="danger">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <label for="form_control_1">@lang('admin.allow_to_offer_count_used') : </label>


                                    <div
                                        class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate bootstrap-switch-on"
                                        style="width: 79px;">

                                        <div class="bootstrap-switch-container" style="width: 148px; margin-left: 0px;">

                                            <input
                                                type="checkbox" name="allow_to_offer_count_used" class="make-switch"
                                                checked
                                                data-on-text="نعم" data-off-text="لا" data-off-color="danger"></div>
                                    </div>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <label for="form_control_1">@lang('admin.allow_to_offer_last_use_date') : </label>


                                    <div
                                        class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate bootstrap-switch-on"
                                        style="width: 79px;">

                                        <div class="bootstrap-switch-container" style="width: 148px; margin-left: 0px;">

                                            <input
                                                type="checkbox" name="allow_to_offer_last_use_date" class="make-switch"
                                                checked
                                                data-on-text="نعم" data-off-text="لا" data-off-color="danger"></div>
                                    </div>
                                </div>


                            </div>
                            <div class="form-actions noborder">
                                <button type="submit" class="btn blue">@lang('admin.save')</button>
                                @if(isset($suggestion))
                                <input type="hidden" name="suggestion_id" value="{{$suggestion->id}}">
                                <button type="submit" name="save_and_delete" class="btn blue">@lang('admin.save_and_delete')</button>
                                @endif
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
