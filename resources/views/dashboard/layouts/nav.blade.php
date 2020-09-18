    <div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="#">
                <img src="{{isset($settings_website['logo'])&& !empty($settings_website['logo'])?url('storage/').'/'.$settings_website['logo']:url('/website/assets/img/Logo2.svg')}}" alt="logo" class="logo-default"  width="100" height="30"/>
            </a>

            <div class="menu-toggler sidebar-toggler">
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
                    <li class="dropdown dropdown-user dropdown-dark  ">
                        <a href="javascript:;" class="dropdown-toggle avatar_user" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="username username-hide-on-mobile name_admin ">
						{{auth()->user()->name}} </span>
                            <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                            <img alt="" class="img-circle" src="{{auth()->user()->image_url}}" width="50"/>
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

                                <form id="logout-form" action="{{ route('dashboard.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
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
