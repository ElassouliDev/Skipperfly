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
                    <div class="col-md-12">
                        <form role="form" method="post" action="{{route('ads.update',$Ads->id)}}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" name="title_ar"
                                                   value="{{old('title_ar')?:$Ads->title_ar}}"
                                                   id="form_control_1" placeholder="@lang('admin.title_ar')">
                                            <label for="form_control_1">@lang('admin.title_ar')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" name="title_en"
                                                   value="{{old('title_en')?:$Ads->title_en}}"
                                                   id="form_control_1" placeholder="@lang('admin.title_en')">
                                            <label for="form_control_1">@lang('admin.title_en')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" id="form_control_1" name="desc_ar"
                                                   value="{{old('desc_ar')?:$Ads->desc_ar}}" placeholder="@lang('admin.desc_ar')">
                                            <label for="form_control_1">@lang('admin.desc_ar')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" id="form_control_1" name="desc_en"
                                                   value="{{old('desc_en')?:$Ads->desc_en}}" placeholder="@lang('admin.desc_en')">
                                            <label for="form_control_1">@lang('admin.desc_en')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="url" class="form-control" id="form_control_1" name="link"
                                                   value="{{old('link')?:$Ads->link}}" placeholder="@lang('admin.url')">
                                            <label for="form_control_1">@lang('admin.url')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <label for="form_control_1">@lang('admin.status') : </label>


                                            <div
                                                class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate bootstrap-switch-on"
                                                style="width: 133px;">

                                                <div class="bootstrap-switch-container"
                                                     style="width: 148px; margin-left: 0px;">

                                                    <input
                                                        type="checkbox" name="status" class="make-switch"  {{$Ads->status?"checked":""}}
                                                        data-on-text="فعال" data-off-text="غير فعال"
                                                        data-off-color="danger">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">

                                            <label for="form_control_1">@lang('admin.ads_type')</label>
                                            <select name="ads_type" required class="form-control">
                                                @foreach(\App\Models\Ads::ads_type as $type)
                                                    <option value="{{$type}}" {{$Ads->ads_type == $type?"selected":""}}>@lang("admin.type_$type")</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input company_id " @if($Ads->ads_type != "company")style="display: none" @endif>

                                            <label for="form_control_1">@lang('admin.company_name')</label>
                                            <select name="company_id" class="form-control <!-- select-2-->">
                                                <option></option>
                                                @foreach($companies as $company)
                                                    <option value="{{$company->id}}" {{$Ads->company_id == $company->id?"selected":""}}>{{$company->name_ar}}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                    </div>


                                </div>


                                <div class="form-group last">
                                    <label class="control-label col-md-3">@lang('admin.image')</label>
                                    <div class="col-md-9">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img
                                                    src="{{$Ads->image_url?$Ads->image_url:"http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"}}"
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
                                                {{--                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">--}}
                                                {{--                                                    Remove </a>--}}
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


                $(document).on('change','[name=ads_type]',function () {
                    $val = $(this).val();
                    if($val == 'company'){

                        $('.company_id').show();
                        $('.company_id select').attr('required',true);


                    }else{

                        $('.company_id').hide();
                        $('.company_id select').attr('required',false);

                    }


                })

            </script>
    @endpush
