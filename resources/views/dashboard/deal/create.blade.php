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
                        <form role="form" method="post" action="{{route('deal.store')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-body">
                                <div class="form-group ">
                                    <label for="form_control_1">@lang('admin.deal_range')</label>
                                    <input type="hidden" class="form-control start_date"  name="start_date" >
                                    <input type="hidden" class="form-control end_date" name="end_date"  >

                                    <div class="input-group date defaultrange" id="defaultrange">

                                        <input type="text" class="form-control "  required>
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>

                                    </div>


                                </div>


                                <div class="form-group form-md-line-input">
                                    <input type="number" class="form-control" required name="percentage"
                                           value="{{old('percentage')}}"
                                           id="form_control_1" placeholder="@lang('admin.percentage_deal')">
                                    <label for="form_control_1">@lang('admin.percentage_deal')</label>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" required name="desc_percentage_ar"
                                           value="{{old('desc_percentage_ar')}}"
                                           id="form_control_1" placeholder="@lang('admin.desc_percentage_ar')">
                                    <label for="form_control_1">@lang('admin.desc_percentage_ar')</label>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" required name="desc_percentage_en"
                                           value="{{old('desc_percentage_en')}}"
                                           id="form_control_1" placeholder="@lang('admin.desc_percentage_en')">
                                    <label for="form_control_1">@lang('admin.desc_percentage_en')</label>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="url" class="form-control"  name="link"
                                           value="{{old('link')}}"
                                           id="form_control_1" placeholder="@lang('admin.url')">
                                    <label for="form_control_1">@lang('admin.url')</label>
                                </div>

                               <div class="form-group form-md-line-input">
                                    <label for="form_control_1">@lang('admin.all_country_selected') : </label>


                                    <div
                                        class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate bootstrap-switch-on"
                                        style="width: 81px; margin-left: 83px">

                                        <div class="bootstrap-switch-container" style="width: 148px; margin-left: 0px;">

                                            <input
                                                type="checkbox" name="all_country_selected" class="make-switch" checked
                                                data-on-text="نعم"  data-off-text="لا" data-off-color="danger"></div>
                                    </div>
                                   <label for="form_control_1">@lang('admin.status') : </label>

                                   <div
                                       class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate bootstrap-switch-on"
                                       style="width: 133px;">

                                       <div class="bootstrap-switch-container" style="width: 148px; margin-left: 0px;">

                                           <input
                                               type="checkbox" name="status" class="make-switch" checked
                                               data-on-text="فعال"  data-off-text="غير فعال" data-off-color="danger"></div>
                                   </div>
                                </div>

                                <div class="form-group form-md-line-input">

                                    <label for="form_control_1">@lang('admin.country_list')</label>
                                    <select name="country_ids[]" multiple class="form-control select-2">
                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}">{{$country->name_ar}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group last">
                                    <label class="control-label col-md-3">@lang('admin.image')</label>
                                    <div class="col-md-9">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img
                                                    src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
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
													<input type="hidden" value="" name="..."><input type="file" required
                                                                                                    name="image">
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
                $('.date-picker').datepicker({
                    // rtl: true,
                    orientation: "left",
                    autoclose: true,
                    width:"100"
                });
                $('#defaultrange').daterangepicker({
                        opens: (Metronic.isRTL() ? 'left' : 'right'),
                        format: 'MM/DD/YYYY',
                        separator: ' to ',
                        // startDate: moment().subtract('days', 29),
                        // endDate: moment(),

                    },
                    function (start, end) {
                        $('#defaultrange input').val(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                        $('.start_date').val(start.format('MMMM D, YYYY'));
                        $('.end_date').val(end.format('MMMM D, YYYY'));
                        // console.log(start.format('MMMM D, YYYY'))


                    }
                );
            </script>
    @endpush
