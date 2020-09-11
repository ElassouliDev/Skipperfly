
@extends('dashboard.auth.auth_layout')
@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <h3>@lang('admin.reset_password')</h3>

        <div class="form-group">
            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="@lang('admin.email')" name="email"  value="{{ $email ?? old('email') }}" required />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">@lang('admin.password')</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password"  placeholder="@lang('admin.password')" name="password" required autocomplete="new-password"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">@lang('admin.password')</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="new-password" placeholder="@lang('admin.password')" name="password_confirmation" required/>
            </div>
        </div>
        <div class="form-actions" style="    overflow: auto;">

            <button type="submit" class="btn blue pull-right">
                @lang('admin.reset_password')                <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
    <!-- END LOGIN FORM -->


@endsection



