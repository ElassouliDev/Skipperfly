@extends('dashboard.layouts.index')

@section('title',$title)
@section('content')

    <div class="col-md-12 col-sm-12">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-settings font-green"></i>
                    <span class="caption-subject bold uppercase">{{$title}}</span>
                </div>

            </div>
            <div class="row margin-top-10">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat2">
                        <div class="display">
                            <div class="number">
                                <h3 class="font-green-sharp">{{$new_article_count}}</h3>
                                <small>@lang('admin.new_article_count')</small>
                            </div>
                            <div class="icon">
                                <i class="icon-docs"></i>
                            </div>
                        </div>
                        <div class="progress-info">
                            <div class="progress">
								<span
{{--                                    style="width: {{$suggesstion_count!=0?($new_suggesstion_count/$suggesstion_count)*100:0}}%;"--}}
                                    class="progress-bar progress-bar-success green-sharp">
{{--								<span class="sr-only">76% progress</span>--}}
								</span>
                            </div>
                            <div class="status">
                                <div class="status-title">

                                </div>
                                <div class="status-number">
{{--                                    {{$suggesstion_count!=0?($new_suggesstion_count/$suggesstion_count)*100:0}}%--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat2">
                        <div class="display">
                            <div class="number">
                                <h3 class="font-red-haze">{{$new_comment_count}}</h3>
                                <small>@lang('admin.new_comments_count')</small>
                            </div>
                            <div class="icon">
                                <i class="fa fa-comments"></i>
                            </div>
                        </div>
                        <div class="progress-info">
                            <div class="progress">
								<span
{{--                                    style="width: {{$contactus_count!=0?($contactus_un_read_count/$contactus_count)*100:0}}%;"--}}
                                    class="progress-bar progress-bar-success red-haze">
{{--								<span class="sr-only">85% change</span>--}}
								</span>
                            </div>
                            <div class="status">
                                <div class="status-title">

                                </div>
                                <div class="status-number">
{{--                                    {{$contactus_count!=0?($contactus_un_read_count/$contactus_count)*100:0}}%--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat2">
                        <div class="display">
                            <div class="number">
                                <h3 class="font-blue-sharp">{{$new_users_count}}</h3>
                                <small>@lang('admin.new_admin')</small>
                            </div>
                            <div class="icon">
                                <i class="icon-users"></i>
                            </div>
                        </div>
                        <div class="progress-info">
                            <div class="progress">
								<span
{{--                                    style="width:{{$coupon_count!=0?($new_coupon_count/$coupon_count)*100:0}}%;"--}}
                                      class="progress-bar progress-bar-success blue-sharp">
{{--								<span class="sr-only">45% grow</span>--}}
								</span>
                            </div>
                            <div class="status">
                                <div class="status-title">

                                </div>
                                <div class="status-number">
{{--                                    {{$coupon_count!=0?($new_coupon_count/$coupon_count)*100:0}}%--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat2">
                        <div class="display">
                            <div class="number">
                                <h3 class="font-purple-soft">{{$new_users_count}}</h3>
                                <small>@lang('admin.new_user')</small>
                            </div>
                            <div class="icon">
                                <i class="icon-user"></i>
                            </div>
                        </div>
                        <div class="progress-info">
                            <div class="progress">
								<span
{{--                                    style="width:{{$users_count!=0?($new_users_count/$users_count)*100:0}}%;"--}}
                                      class="progress-bar progress-bar-success purple-soft">
{{--                                    <span class="sr-only">56% change</span>--}}
								</span>
                            </div>
                            <div class="status">
                                <div class="status-title">
                                    {{--                                    change--}}
                                </div>
                                <div class="status-number">
{{--                                    {{$users_count!=0?($new_users_count/$users_count)*100:0}}%--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
