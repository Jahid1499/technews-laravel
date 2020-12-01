<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="text-center">
                <img src="{{asset('assets/admin')}}/images/users/avatar-1.jpg" alt="" class="img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Kenny Rigdon</a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)"> Profile</a></li>
                        <li><a href="javascript:void(0)"> Settings</a></li>
                        <li><a href="javascript:void(0)"> Lock screen</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)"> Logout</a></li>
                    </ul>
                </div>

                <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>
            </div>
        </div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{route('admin.dashboard')}}" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
                </li>

                <li>
                    <a href="typography.html" class="waves-effect"><i class="ti-ruler-pencil"></i><span> Typography <span class="badge badge-primary pull-right">6</span></span></a>
                </li>

                <li class="has_sub {{Request::is('admin.roles.*') ? 'active': ''}}">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i><span> Roles </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.roles.index')}}">Role List</a></li>
                        <li><a href="{{route('admin.roles.create')}}">Role Create</a></li>
                    </ul>
                </li>

                <li class="has_sub {{Request::is('admin.tag.*') ? 'active': ''}}">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i><span> Tags </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.tags.index')}}">Tag List</a></li>
                        <li><a href="{{route('admin.tags.create')}}">Tag Create</a></li>
                    </ul>
                </li>

                <li class="has_sub {{Request::is('admin.categories.*') ? 'active': ''}}">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i><span> Category </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.categories.index')}}">Category List</a></li>
                        <li><a href="{{route('admin.categories.create')}}">Category Create</a></li>
                    </ul>
                </li>
                <li class="has_sub {{Request::is('admin.follower.*') ? 'active': ''}}">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i><span> Follower </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.follower.index')}}">Follower List</a></li>
                    </ul>
                </li>

                <li class="has_sub {{Request::is('admin.social.*') ? 'active': ''}}">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i><span> Social Media </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.social.index')}}">Social Media List</a></li>
                    </ul>
                </li>

                <li class="has_sub {{Request::is('admin.about.*') ? 'active': ''}}">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i><span> About Us</span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.about.index')}}">About Us</a></li>
                    </ul>
                </li>

                <li class="has_sub {{Request::is('admin.images.*') ? 'active': ''}}">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i><span>Image gallery</span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.images.index')}}">Gallery List</a></li>
                        <li><a href="{{route('admin.images.create')}}">Create Image</a></li>
                    </ul>
                </li>

                <!--<li class="has_sub">-->
                <!--<a href="javascript:void(0);" class="waves-effect"><i class="ti-share"></i><span>Multi Menu </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>-->
                <!--<ul>-->
                <!--<li class="has_sub">-->
                <!--<a href="javascript:void(0);" class="waves-effect"><span>Menu Item 1.1</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>-->
                <!--<ul style="">-->
                <!--<li><a href="javascript:void(0);"><span>Menu Item 2.1</span></a></li>-->
                <!--<li><a href="javascript:void(0);"><span>Menu Item 2.2</span></a></li>-->
                <!--</ul>-->
                <!--</li>-->
                <!--<li>-->
                <!--<a href="javascript:void(0);"><span>Menu Item 1.2</span></a>-->
                <!--</li>-->
                <!--</ul>-->
                <!--</li>-->
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
