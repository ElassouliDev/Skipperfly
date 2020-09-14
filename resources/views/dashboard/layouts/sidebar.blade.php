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
                    <i class="icon-list"></i>
                    <span class="title">  @lang('admin.category')</span>
                    <span class="arrow {{\Illuminate\Support\Str::contains($route,'category')?"open":""}} "></span>
                </a>
                <ul class="sub-menu"  style="{{\Illuminate\Support\Str::contains($route?? '','category')?"display: block":""}}">
                    <li class="{{isset($route)&& $route=='dashboard.category'?"active":""}} ">
                        <a href="{{route('dashboard.category.index')}}">
                            @lang('admin.category')</a>
                    </li>
                    <li  class="{{isset($route)&& $route=='dashboard.category.create'?"active":""}} ">
                        <a href="{{route('dashboard.category.create')}}">
                            @lang('admin.add')</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-rocket"></i>
                    <span class="title">  @lang('admin.tag')</span>
                    <span class="arrow {{\Illuminate\Support\Str::contains($route,'tag')?"open":""}} "></span>
                </a>
                <ul class="sub-menu" style="{{\Illuminate\Support\Str::contains($route,'tag')?"display: block":""}}">
                    <li class="{{ isset($route)&& $route=='dashboard.tag'?"active":""}} ">
                        <a href="{{route('dashboard.tag.index')}}">
                            @lang('admin.tag')</a>
                    </li>

                    <li class="{{isset($route)&& $route=='dashboard.tag.create'?"active":""}} ">
                        <a href="{{route('dashboard.tag.create')}}">
                            @lang('admin.add')</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="javascript:;">
                    <i class="icon-docs"></i>
                    <span class="title">  @lang('admin.article')</span>
                    <span class="arrow  {{\Illuminate\Support\Str::contains($route,'article')?"open":""}}"></span>
                </a>
                <ul class="sub-menu"  style="{{\Illuminate\Support\Str::contains($route,'coupon') || $route=='suggestion'?"display: block":""}}" >
                    <li class="{{isset($route)&& $route=='dashboard.article'?"active":""}} ">
                        <a href="{{route('dashboard.article.index')}}">
                            @lang('admin.article')</a>
                    </li>
                    <li class="{{$route=='dashboard.article.create'?"active":""}} ">
                        <a href="{{route('dashboard.article.create')}}">
                            @lang('admin.add')</a>
                    </li>

                </ul>
            </li>



            <li>
                <a href="javascript:;">
                    <i class="icon-user-follow"></i>
                    <span class="title">  @lang('admin.users')</span>
                    <span class="arrow {{\Illuminate\Support\Str::contains($route,'.user')?"open":""}} "></span>
                </a>
                <ul class="sub-menu" style="{{\Illuminate\Support\Str::contains($route,'user')?"display: block":""}}">
                    <li class="{{ isset($route)&& $route=='dashboard.user'?"active":""}} ">
                        <a href="{{route('dashboard.user.index')}}">
                            @lang('admin.users')</a>
                    </li>
                    <li class="{{$route=='users.create'?"active":""}} ">
                        <a href="{{route('dashboard.user.create')}}">
                            @lang('admin.add')</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-users"></i>
                    <span class="title">  @lang('admin.admins')</span>
                    <span class="arrow" style="{{\Illuminate\Support\Str::contains($route,'admin')?"open":""}}"></span>
                </a>
                <ul class="sub-menu" style="{{\Illuminate\Support\Str::contains($route,'admin')?"display: block":""}}">
                    <li class="{{ isset($route)&& $route=='dashboard.admin'?"active":""}} ">
                        <a href="{{route('dashboard.admin.index')}}">
                            @lang('admin.admins')</a>
                    </li>
                    <li class="{{ isset($route)&& $route=='dashboard.admin.create'?"active":""}} ">
                        <a href="{{route('dashboard.admin.create')}}">
                            @lang('admin.add')</a>
                    </li>

                </ul>
            </li>


            <li class="start  {{$route=='dashboard.setting'?"active":""}}">
                <a href="{{route('dashboard.setting.index')}}">
                    <i class="icon-settings"></i>
                    <span class="title">@lang('admin.setting')</span>
                </a>
            </li>
            <li class="start ">
                <a  href="javascript:;" data-action="change-password">
                    <i class="icon-key"></i>
                    <span class="title">@lang('admin.change_password')</span>
                </a>
            </li>
            <li class="start ">
                <a href="javascript:;" data-action="edit-profile">
                    <i class="icon-pencil"></i>
                    <span class="title">@lang('admin.edit_profile')</span>
                </a>
            </li>
            <li class="start">
                <a href="#"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="icon-logout"></i>
                    <span class="title">@lang('admin.logout_title')</span>
                </a>
            </li>
    {{--



--}}

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
