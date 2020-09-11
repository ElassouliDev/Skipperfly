<div class="page-sidebar-wrapper">
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->

    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="start {{isset($route)&& $route=='dashboard'?"active":""}} " >
                <a href="{{'dashboard'}}">
{{--                <a href="{{('dashboard')}}">--}}
                    <i class="icon-home"></i>
                    <span class="title">@lang('admin.dashboard')</span>
                </a>
            </li>
           {{-- <li class="start ">
                <a href="{{('company.index')}}">
                    <i class="icon-briefcase"></i>
                    <span class="title">@lang('admin.company')</span>
                </a>
            </li>--}}
            <li>
                <a href="javascript:;">
                    <i class="icon-bar-chart"></i>
                    <span class="title">  @lang('admin.store')</span>
{{--                    <span class="arrow {{\Illuminate\Support\Str::contains($route,'store')?"open":""}} "></span>--}}
                </a>
                <ul class="sub-menu"  style="{{\Illuminate\Support\Str::contains($route?? '','store')?"display: block":""}}">
                    <li class="{{isset($route)&& $route=='store'?"active":""}} ">
                        <a href="{{('store.index')}}">
                            @lang('admin.store')</a>
                    </li>
                    <li  class="{{isset($route)&& $route=='store.create'?"active":""}} ">
                        <a href="{{('store.create')}}">
                            @lang('admin.add')</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-globe-alt"></i>
                    <span class="title">  @lang('admin.company')</span>
                    <span class="arrow {{\Illuminate\Support\Str::contains($route,'company')?"open":""}} "></span>
                </a>
                <ul class="sub-menu" style="{{\Illuminate\Support\Str::contains($route,'company')?"display: block":""}}">
                    <li class="{{ isset($route)&& $route=='company'?"active":""}} ">
                        <a href="{{('company.index')}}">
                            @lang('admin.company')</a>
                    </li>

                    <li class="{{isset($route)&& $route=='company.create'?"active":""}} ">
                        <a href="{{('company.create')}}">
                            @lang('admin.add')</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="javascript:;">
                    <i class="icon-present"></i>
                    <span class="title">  @lang('admin.coupon')</span>
                    <span class="arrow  {{\Illuminate\Support\Str::contains($route,'coupon')?"open":""}}"></span>
                </a>
                <ul class="sub-menu"  style="{{\Illuminate\Support\Str::contains($route,'coupon') || $route=='suggestion'?"display: block":""}}" >
                    <li class="{{isset($route)&& $route=='coupon'?"active":""}} ">
                        <a href="{{('coupon.index')}}">
                            @lang('admin.coupon')</a>
                    </li>
                    <li class="{{$route=='coupon.create'?"active":""}} ">
                        <a href="{{('coupon.create')}}">
                            @lang('admin.add')</a>
                    </li>
                    <li class="{{$route=='suggestion'?"active":""}} ">
                        <a href="{{('suggestion.index')}}">
                            @lang('admin.suggestion_coupon')</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;  ">
                    <i class="icon-briefcase"></i>
                    <span class="title">  @lang('admin.deal')</span>
                    <span class="arrow {{\Illuminate\Support\Str::contains($route,'deal')?"open":""}}"></span>
                </a>
                <ul class="sub-menu" style="{{\Illuminate\Support\Str::contains($route,'deal')?"display: block":""}}" >
                    <li class="{{ isset($route)&& $route=='deal'?"active":""}} ">
                        <a href="{{('deal.index')}}">
                            @lang('admin.deal')</a>
                    </li>
                    <li class="{{$route=='deal.create'?"active":""}} ">
                        <a href="{{('deal.create')}}">
                            @lang('admin.add')</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-rocket"></i>
                    <span class="title">  @lang('admin.ads')</span>
                    <span class="arrow {{\Illuminate\Support\Str::contains($route,'ads')?"open":""}}"></span>
                </a>
                <ul class="sub-menu" style="{{\Illuminate\Support\Str::contains($route,'ads')?"display: block":""}}" >
                    <li class="{{ isset($route)&& $route=='ads'?"active":""}} ">
                        <a href="{{('ads.index')}}">
                            @lang('admin.ads')</a>
                    </li>
                    <li class="{{ isset($route)&& $route=='ads.create'?"active":""}} ">
                        <a href="{{('ads.create')}}">
                            @lang('admin.add')</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-user-follow"></i>
                    <span class="title">  @lang('admin.users')</span>
                    <span class="arrow {{\Illuminate\Support\Str::contains($route,'users')?"open":""}} "></span>
                </a>
                <ul class="sub-menu" style="{{\Illuminate\Support\Str::contains($route,'users')?"display: block":""}}">
                    <li class="{{ isset($route)&& $route=='users'?"active":""}} ">
                        <a href="{{('users.index')}}">
                            @lang('admin.users')</a>
                    </li>
                    <li class="{{$route=='users.create'?"active":""}} ">
                        <a href="{{('users.create')}}">
                            @lang('admin.add')</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-users"></i>
                    <span class="title">  @lang('admin.admin')</span>
                    <span class="arrow" style="{{\Illuminate\Support\Str::contains($route,'admin')?"open":""}}"></span>
                </a>
                <ul class="sub-menu" style="{{\Illuminate\Support\Str::contains($route,'admin')?"display: block":""}}">
                    <li class="{{ isset($route)&& $route=='admin'?"active":""}} ">
                        <a href="{{('admin.index')}}">
                            @lang('admin.admin')</a>
                    </li>
                    <li class="{{ isset($route)&& $route=='admin.create'?"active":""}} ">
                        <a href="{{('admin.create')}}">
                            @lang('admin.add')</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-pointer"></i>
                    <span class="title">  @lang('admin.country')</span>
                    <span class="arrow {{\Illuminate\Support\Str::contains($route,'country')?"open":""}}"></span>
                </a>
                <ul class="sub-menu" style= "{{\Illuminate\Support\Str::contains($route,'country')?"display: block":""}}">
                    <li class="{{ isset($route)&& $route=='country'?"active":""}} ">
                        <a href="{{('country.index')}}">
                            @lang('admin.country')</a>
                    </li>
                    <li class="{{ isset($route)&& $route=='country.create'?"active":""}} ">
                        <a href="{{('country.create')}}">
                            @lang('admin.add')</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-list"></i>
                    <span class="title">  @lang('admin.product_title')</span>
                    <span class="arrow {{\Illuminate\Support\Str::contains($route,'title')?"open":""}}"></span>
                </a>
                <ul class="sub-menu" style= "{{\Illuminate\Support\Str::contains($route,'title')?"display: block":""}}">
                    <li class="{{ isset($route)&& $route=='title'?"active":""}} ">
                        <a href="{{('title.index')}}">
                            @lang('admin.product_title')</a>
                    </li>
                    <li class="{{isset($route)&& $route=='title.create'?"active":""}} ">
                        <a href="{{('title.create')}}">
                            @lang('admin.add')</a>
                    </li>

                </ul>
            </li>
    {{--        <li>
                <a href="javascript:;">
                    <i class="icon-handbag"></i>
                    <span class="title">  @lang('admin.product')</span>
                    <span class="arrow {{\Illuminate\Support\Str::contains($route,'product')?"open":""}}"></span>
                </a>
                <ul class="sub-menu" style= "{{\Illuminate\Support\Str::contains($route,'product')?"display: block":""}}">
                    <li class="{{$route=='product'?"active":""}} ">
                        <a href="{{('product.index')}}">
                            @lang('admin.product')</a>
                    </li>
                    <li class="{{$route=='product.create'?"active":""}} ">
                        <a href="{{('product.create')}}">
                            @lang('admin.add')</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-tag"></i>
                    <span class="title">  @lang('admin.help')</span>
                    <span class="arrow {{\Illuminate\Support\Str::contains($route,'help')?"open":""}}"></span>
                </a>
                <ul class="sub-menu" style="{{\Illuminate\Support\Str::contains($route,'help')?"display: block":""}}">
                    <li class="{{$route=='help'?"active":""}} ">
                        <a href="{{('help.index')}}">
                            @lang('admin.help')</a>
                    </li>
                    <li class="{{$route=='help.create'?"active":""}} ">
                        <a href="{{('help.create')}}">
                            @lang('admin.add')</a>
                    </li>

                </ul>
            </li>

            <li class="start {{$route=='notification.create'?"active":""}} ">
                <a href="{{('notification.create')}}">
                    <i class="icon-bell"></i>
                    <span class="title">@lang('admin.notification')</span>
                </a>
            </li>
            <li class="start  {{$route=='setting'?"active":""}}">
                <a href="{{('setting.index')}}">
                    <i class="icon-settings"></i>
                    <span class="title">@lang('admin.setting')</span>
                </a>
            </li>
            <li class="start ">
                <a href="javascript:;" data-action="edit-profile">
                    <i class="icon-pencil"></i>
                    <span class="title">@lang('admin.edit_profile')</span>
                </a>
            </li>
            <li class="start ">
                <a  href="javascript:;" data-action="change-password">
                    <i class="icon-key"></i>
                    <span class="title">@lang('admin.change_password')</span>
                </a>
            </li>
        <li class="start">
                <a href="{{ ('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="icon-logout"></i>
                    <span class="title">@lang('admin.logout_title')</span>
                </a>
            </li>
--}}

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
