@extends('dashboard.layouts.index')

@section('title',$title)
@push('css')

@endpush('css')
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
                        <form role="form" method="post" action="{{route('dashboard.admin.store')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="col-md-12">
                                    <div class="form-group last">
                                        <div class="col-md-12 text-center">
                                            <div class="avatar fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="  ">
                                                    <img
                                                        src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
                                                        alt="" style="    ">
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

                                                                                                           name="image">
													</span>

                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" name="name"
                                                   value="{{old('name')}}" required
                                                   id="form_control_1" placeholder="@lang('admin.name')">
                                            <label for="form_control_1">@lang('admin.name')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" name="about"
                                                   value="{{old('about')}}" required
                                                   id="form_control_1" placeholder="@lang('admin.about')">
                                            <label for="form_control_1">@lang('admin.about')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="email" class="form-control" name="email"
                                                   value="{{old('email')}}" required
                                                   id="form_control_1" placeholder="@lang('admin.email')">
                                            <label for="form_control_1">@lang('admin.email')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="password" class="form-control" id="form_control_1"  required name="password"
                                                   value="{{old('password')}}" placeholder="@lang('admin.password')">
                                            <label for="form_control_1">@lang('admin.password')</label>
                                        </div>
                                    </div>




                                    </div>




                            </div>
                            <div class="form-actions noborder">
                                <button type="submit" class="btn blue">@lang('admin.save')</button>
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
