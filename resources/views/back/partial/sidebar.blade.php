<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        @php
            $prefix = '';
        @endphp
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"><img src="back/global_assets/images/demo/users/face11.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold">{{Auth::user()->name}}</div>
                        <div class="font-size-xs opacity-50">
                            <i class="icon-pin font-size-sm"></i> &nbsp; Hà Nội, Việt Nam
                        </div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link  {{Request::is($prefix)?'active':''}}">
                        <i class="icon-home4"></i>
                        <span>
                            Bảng điều khiển
                        </span>
                    </a>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="fa fa-cogs"></i>
                        <span>
                           Manager Users
                        </span>
                    </a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts" style="display: none;">
                        <li class="nav-item">
                            <a href="{{route('users.index')}}" class="nav-link active  {{Request::is($prefix)?'active':''}}">
                                <i class="fa fa-users"></i><span>Users</span>
                            </a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link active">--}}
{{--                                <i class="fa fa-user"></i><span>Roles</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('lichtruc.index')}}" class="nav-link {{Request::is($prefix.'/lichtruc*')?'active':''}}">
                        <i class="icon-calendar3"></i>
                        <span>
                            Lịch trực
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('phandoi.index')}}" class="nav-link {{Request::is($prefix.'/phandoi*')?'active':''}}">
                        <i class="icon-map5"></i>
                        <span>
                            Phân đội
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('lichhoc.index')}}" class="nav-link {{Request::is($prefix.'/lichhoc*')?'active':''}}">
                        <i class="icon-insert-template"></i>
                        <span>
                            Lịch học
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('hocphi.index')}}" class="nav-link {{Request::is($prefix.'/hocphi*')?'active':''}}">
                        <i class="icon-copy"></i>
                        <span>
                            Học phí
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('hoctap.index')}}" class="nav-link {{Request::is($prefix.'/hoctap*')?'active':''}}">
                        <i class="icon-grid7"></i>
                        <span>
                            Kết quả học tập
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('theluc.index')}}" class="nav-link {{Request::is($prefix.'/theluc*')?'active':''}}">
                        <i class="icon-people"></i>
                        <span>
                            Kết quả thể lực
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('renluyen.index')}}" class="nav-link {{Request::is($prefix.'/renluyen*')?'active':''}}">
                        <i class="icon-stack2"></i>
                        <span>
                            Rèn luyện
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('khenthuong.index')}}" class="nav-link {{Request::is($prefix.'/khenthuong*')?'active':''}}">
                        <i class="icon-gift"></i>
                        <span>
                            Thành tích khen thưởng
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('vipham.index')}}" class="nav-link {{Request::is($prefix.'/vipham*')?'active':''}}">
                        <i class="icon-puzzle4"></i>
                        <span>
                            Vi phạm
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('documents.index')}}" class="nav-link {{Request::is($prefix.'/documents*')?'active':''}}">
                        <i class="icon-spell-check"></i>
                        <span>
                            Văn bản
                        </span>
                    </a>
                </li>
                <li class="nav-item">
{{--                    @php if(Auth::user()->is_admin == 1) { @endphp--}}
                    <a href="{{route('account.index')}}" class="nav-link {{Request::is($prefix.'/account*')?'active':''}}">
                        <i class="fa fa-user"></i>
                        <span>
                            Thông tin cá nhân
                        </span>
                    </a>
{{--                    @php } else { @endphp--}}
{{--                    <a href="{{route('account.show', Auth::user()->id)}}" class="nav-link {{Request::is($prefix.'/account*')?'active':''}}">--}}
{{--                        <i class="fa fa-user"></i>--}}
{{--                        <span>--}}
{{--                            Thông tin cá nhân--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                    @php } @endphp--}}
                </li>
                <li class="nav-item">
                    <a href="{{route('config.index')}}" class="nav-link {{Request::is($prefix.'/config*')?'active':''}}">
                        <i class="icon-wrench3"></i>
                        <span>
                            Cài đặt chung
                        </span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
