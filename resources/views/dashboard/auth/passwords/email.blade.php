@extends('dashboard.auth.auth_layout')
@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <h3>@lang('admin.Forgot your password')</h3>
        <p>
            @lang('admin.Enter your e-mail address below to reset your password.')
        </p>
        <div class="form-group">
            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="@lang('admin.email')" name="email"/>
            </div>
        </div>
        <div class="form-actions">
            <a href="{{route('login')}}" type="button" id="back-btn" class="btn white " style=" color: #3598dc;
    background-color: #FFFFFF;">
                <i class="m-icon-swapleft"></i>  @lang('admin.login') </a>
            <button type="submit" class="btn blue pull-right">
                @lang('admin.send') <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
    <!-- END LOGIN FORM -->


@endsection


