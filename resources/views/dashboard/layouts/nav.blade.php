<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="#">
{{--            <a href="{{route('dashboard')}}">--}}
                <img src="{{asset('public/dashboard_assets/admin/layout4/img/logo-light.png')}}" alt="logo" class="logo-default"/>
{{--                    <h2 class="text-center bold" class="logo-default">Coupon App</h2>--}}
            </a>

            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->

        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN HEADER SEARCH BOX -->

            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="separator hide">
                    </li>


                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="username username-hide-on-mobile name_admin">
						{{auth()->user()->name??'admin'}} </span>
                            <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                            <img alt="" class="img-circle" src="{{asset('public/dashboard_assets/admin/layout4/img/avatar9.jpg')}}"/>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">




                            <li class="divider">
                            </li>
                            <li>
                                <a href="javascript:;" data-action="edit-profile">
                                    <i class="icon-pencil"></i>  @lang('admin.edit_profile') </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="javascript:;" data-action="change-password">
                                    <i class="icon-key"></i>  @lang('admin.change_password') </a>
                            </li>

                            <li class="divider">
                            </li>

                            <li>
                                <a  href="#{{--{{ route('logout') }}--}}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                >
                                    <i class="icon-logout"></i> @lang('admin.logout_title')</a>
{{--
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>--}}
                            </li>

                            <li class="divider">
                            </li>
                        </ul>
                    </li>

                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
{{--                    <li class="dropdown dropdown-extended quick-sidebar-toggler">--}}
{{--                        <span class="sr-only">Toggle Quick Sidebar</span>--}}
{{--                        <i class="icon-logout"></i>--}}
{{--                    </li>--}}
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
