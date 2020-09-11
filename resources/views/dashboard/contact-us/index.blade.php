@extends('dashboard.layouts.index')
@section('title',$title)


@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>{{ $title }}
                    </div>
                </div>
                <div class="portlet-body">

                    <div class="table-scrollable">
                        {!! $dataTable->table(["class"=> "table table-striped table-bordered table-hover dataTable no-footer"],true) !!}


                    </div>
                </div>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->

    </div>


@endsection
@push('js')
    <script src="{{ asset('dashboard_assets/vendor/datatables/buttons.server-side.js') }}"></script>

    {!! $dataTable->scripts() !!}



@endpush
