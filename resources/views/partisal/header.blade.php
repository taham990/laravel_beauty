<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>



    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <a href="cart">
                <i class="fa fa-shopping-cart" style="font-size:24px"></i>
            </a>
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="/login" id="alertsDropdown"
                    data-bs-toggle="dropdown">
                    <div class="position-relative">
                        {{-- <i class="align-middle" data-feather="bell"></i> --}}
                        <span style="font-size:18px">دوره های من</span>
                    </div>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="/home" id="alertsDropdown"
                    data-bs-toggle="dropdown">
                    <div class="position-relative">
                        {{-- <i class="align-middle" data-feather="bell"></i> --}}
                        <span style="font-size:18px">خانه</span>
                    </div>
                </a>

                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                    aria-labelledby="alertsDropdown">
                    {{-- <div class="dropdown-menu-header">
                        4 New Notifications
                    </div> --}}
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    {{-- <i class="text-danger" data-feather="alert-circle"></i> --}}
                                </div>
                                <div class="col-10">
                                    {{-- <div class="text-dark">Update completed</div>
                                    <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                    <div class="text-muted small mt-1">30m ago</div> --}}
                                </div>
                            </div>
                        </a>

                    </div>

                </div>
            </li>
            @if (Route::has('login'))
                @auth
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-icon dropdown-toggle" href="/login" id="alertsDropdown"
                            data-bs-toggle="dropdown">
                            <div class="position-relative">
                                {{-- <i class="align-middle" data-feather="bell"></i> --}}
                                <span style="font-size:18px"> <a href="{{ url('/dashboard') }}"
                                        class="">پروفایل</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="">ورود
                                    </a></span>
                            </div>
                        </a>
                    </li>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-icon dropdown-toggle" href="/register" id="alertsDropdown"
                            data-bs-toggle="dropdown">
                            <div class="position-relative">
                                {{-- <i class="align-middle" data-feather="bell"></i> --}}

                                <span style="font-size:18px">
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="">ثبت
                                            نام</a>
                                    @endif
                                </span>
                            </div>
                        </a>
                    </li>
                @endauth
            @endif
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown"
                    data-bs-toggle="dropdown">
                    <div class="position-relative">
                        <i class="align-middle"></i>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0">


                    {{-- <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                    data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a> --}}

                    {{-- <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                    data-bs-toggle="dropdown">
                    {{-- <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1"
                        alt="Charles Hall" /> <span class="text-dark">Charles Hall</span> 
                </a> --}}
                    {{-- <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                            data-feather="user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="align-middle me-1"
                            data-feather="pie-chart"></i> Analytics</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/"><i class="align-middle me-1"
                            data-feather="settings"></i> Settings & Privacy</a>
                    <a class="dropdown-item" href="#"><i class="align-middle me-1"
                            data-feather="help-circle"></i> Help Center</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Log out</a>
                </div> --}}
            </li>
        </ul>
    </div>
</nav>