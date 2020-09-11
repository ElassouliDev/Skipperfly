@extends('dashboard.layouts.index')
@section('title',$title)
@push('css')
    <style>
        .border_bottom{
            border-bottom: 1px outset #eee;
            /* border-style: outset; */
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
                        <span class=" lead " > {{$contact_us->email}} </span>
                    </h2>
                    <h2 class="col-md-12 border_bottom" >
                        @lang('admin.title') :
                        <span class=" lead " > {{$contact_us->subject}} </span>
                    </h2>
                    <h2 class="col-md-12 border_bottom">
                        @lang('admin.content') :
                        <span class=" lead " > {{$contact_us->content}} </span>
                    </h2>

                </div>



            </div>
        </div>


@endsection
