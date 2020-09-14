@extends('dashboard.auth.auth_layout')
@section('content')
    <form class="login-form" action="{{route('dashboard.login')}}" method="post">
        @csrf
        <h3 class="form-title">@lang('admin.login')</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span>
			@lang('admin.login')
            </span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">			@lang('admin.email')
            </label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="@lang('admin.email')" name="email"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">@lang('admin.password')</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="@lang('admin.password')" name="password"/>
            </div>
        </div>
        <div class="form-actions">

            <label class="checkbox">
                <input type="checkbox" name="remember_me" value="1"/> @lang('admin.remember_me') </label>
            <button type="submit" class="btn blue pull-right">
                @lang('admin.login') <i class="m-icon-swapright m-icon-white"></i>
            </button>

        </div>



    </form>

    <!-- END LOGIN FORM -->


@endsection
