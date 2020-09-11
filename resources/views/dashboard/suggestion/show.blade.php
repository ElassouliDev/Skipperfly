@extends('dashboard.layouts.index')
@section('title',$title)
@push('css')
    <style>
        .border_bottom{
            border-bottom: 1px outset #eee;
            padding: 8px;
        }
        .portlet-body{
            margin-bottom:30px;
        }
    </style>

@endpush
@section('content')

    <div class="col-md-12 col-sm-12">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption font-red-sunglo">
                    <i class="icon-settings font-red-sunglo"></i>
                    <span class="caption-subject bold uppercase">@lang('admin.show')</span>
                </div>

            </div>
            <div class="portlet-body form">

                <div class="row">
                    <h2 class="col-md-12 border_bottom" >
                        @lang('admin.email') :
                        <span class=" lead " > {{$result->email}} </span>
                    </h2>
                    <h2 class="col-md-12 border_bottom" >
                        @lang('admin.mobile') :
                        <span class=" lead " > {{$result->mobile}} </span>
                    </h2>
                    <h2 class="col-md-12 border_bottom" >
                        @lang('admin.company_name') :
                        <span class=" lead " > {{$result->company?$result->company->name_ar:"-"}} </span>
                    </h2>
                    <h2 class="col-md-12 border_bottom" >
                        @lang('admin.country_name') :
                        <span class=" lead " >  {{$result->country?$result->country->name_ar:"-"}} </span>
                    </h2>
                    <h2 class="col-md-12 border_bottom" >
                        @lang('admin.coupon_code') :
                        <span class=" lead " > {{$result->coupon_code}} </span>
                    </h2>
                    <h2 class="col-md-12 border_bottom" >
                        @lang('admin.desc') :
                        <span class=" lead " > {{@$result->desc}} </span>
                    </h2>


                </div>



            </div>
        </div>


@endsection
