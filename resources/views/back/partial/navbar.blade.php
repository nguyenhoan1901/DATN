
<div class="navbar navbar-expand-md navbar-dark">
    <div class="navbar-brand" style="padding: 0px">
        <a href="{{route('home')}}" class="d-inline-block">
            <img style="height:45px" src="{{asset('logo.png')}}" alt="">
            <span style="font-size: 15px; position: absolute; left: 70px; top: 15px; color: #fff; text-shadow: 2px 3px #000;">{{ _config('web_title') }}</span>
        </a>
    </div>


    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>

            <li class="nav-item dropdown show">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true">
{{--                    <i class="icon-git-compare"></i>--}}
                    <i class="fa fa-bell" aria-hidden="true"></i>
                    <span class="d-md-none ml-2">Thông báo</span>
                    <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">0</span>
                </a>

                <div class="dropdown-menu dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Thông báo</span>
{{--                        <a href="#" class="text-default"><i class="icon-sync"></i></a>--}}
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media" style="background-color: aliceblue;">
                                <div class="mr-3" >
                                    <a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
                                </div>

                                <div class="media-body">
                                    Hai Vu cập nhật thông tin lịch học
                                    <div class="text-muted font-size-sm">4 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3" >
                                    <a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
                                </div>

                                <div class="media-body">
                                    Hai Vu cập nhật thông tin lịch học
                                    <div class="text-muted font-size-sm">4 minutes ago</div>
                                </div>
                            </li>


                            {{--                            <li class="media">--}}
{{--                                <div class="mr-3">--}}
{{--                                    <a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-git-commit"></i></a>--}}
{{--                                </div>--}}

{{--                                <div class="media-body">--}}
{{--                                    Add full font overrides for popovers and tooltips--}}
{{--                                    <div class="text-muted font-size-sm">36 minutes ago</div>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li class="media">--}}
{{--                                <div class="mr-3">--}}
{{--                                    <a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i class="icon-git-branch"></i></a>--}}
{{--                                </div>--}}

{{--                                <div class="media-body">--}}
{{--                                    <a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch--}}
{{--                                    <div class="text-muted font-size-sm">2 hours ago</div>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li class="media">--}}
{{--                                <div class="mr-3">--}}
{{--                                    <a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-git-merge"></i></a>--}}
{{--                                </div>--}}

{{--                                <div class="media-body">--}}
{{--                                    <a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches--}}
{{--                                    <div class="text-muted font-size-sm">Dec 18, 18:36</div>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li class="media">--}}
{{--                                <div class="mr-3">--}}
{{--                                    <a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>--}}
{{--                                </div>--}}

{{--                                <div class="media-body">--}}
{{--                                    Have Carousel ignore keyboard events--}}
{{--                                    <div class="text-muted font-size-sm">Dec 12, 05:46</div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
                        </ul>
                    </div>

{{--                    <div class="dropdown-content-footer bg-light">--}}
{{--                        <a href="#" class="text-grey mr-auto">All updates</a>--}}
{{--                        <div>--}}
{{--                            <a href="#" class="text-grey" data-popup="tooltip" title="" data-original-title="Mark all as read"><i class="icon-radio-unchecked"></i></a>--}}
{{--                            <a href="#" class="text-grey ml-2" data-popup="tooltip" title="" data-original-title="Bug tracker"><i class="icon-bug2"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-md-3 mr-md-auto">
{{--            <li class="nav-item">--}}
{{--                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">--}}
{{--                    <i class="icon-paragraph-justify3"></i>--}}
{{--                </a>--}}
{{--            </li>--}}
        </ul>
{{--        <span class="badge bg-success ml-md-3 mr-md-auto">Online</span>--}}
        <ul class="navbar-nav"><li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                    <img src="back/global_assets/images/demo/users/face11.jpg" class="rounded-circle mr-2" height="34" alt="">
                    <span>{{Auth::user()->name}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{route('back_get_logout')}}" class="dropdown-item"><i class="icon-switch2"></i> Đăng xuất</a>
                </div>
            </li>
        </ul>
    </div>
</div>
