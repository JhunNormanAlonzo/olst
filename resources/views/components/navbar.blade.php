<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('images/olst.png')}}" width="200" height="70" alt="">
            {{--                    {{ config('app.name', 'Laravel') }}--}}
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->



    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    <span class="badge bg-primary badge-number">4</span>
                </a><!-- End Notification Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                    <li class="dropdown-header">
                        You have 1 new notifications
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-info-circle text-primary"></i>
                        <div>
                            <h4>Order Request</h4>
                            <p>Sir pa order po ng dalawang mix</p>
                            <p>4 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="dropdown-footer">
                        <a href="#">Show all notifications</a>
                    </li>

                </ul><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->

{{--            <li class="nav-item dropdown">--}}

{{--                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">--}}
{{--                    <i class="bi bi-chat-left-text"></i>--}}
{{--                    <span class="badge bg-success badge-number">3</span>--}}
{{--                </a><!-- End Messages Icon -->--}}

{{--                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">--}}
{{--                    <li class="dropdown-header">--}}
{{--                        You have 3 new messages--}}
{{--                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <hr class="dropdown-divider">--}}
{{--                    </li>--}}

{{--                    <li class="message-item">--}}
{{--                        <a href="#">--}}
{{--                            <img src="{{asset('NiceAdmin/assets/img/messages-1.jpg')}}" alt="" class="rounded-circle">--}}
{{--                            <div>--}}
{{--                                <h4>Maria Hudson</h4>--}}
{{--                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>--}}
{{--                                <p>4 hrs. ago</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <hr class="dropdown-divider">--}}
{{--                    </li>--}}

{{--                    <li class="message-item">--}}
{{--                        <a href="#">--}}
{{--                            <img src="{{asset('NiceAdmin/assets/img/messages-2.jpg')}}" alt="" class="rounded-circle">--}}
{{--                            <div>--}}
{{--                                <h4>Anna Nelson</h4>--}}
{{--                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>--}}
{{--                                <p>6 hrs. ago</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <hr class="dropdown-divider">--}}
{{--                    </li>--}}

{{--                    <li class="message-item">--}}
{{--                        <a href="#">--}}
{{--                            <img src="{{asset('NiceAdmin/assets/img/messages-3.jpg')}}" alt="" class="rounded-circle">--}}
{{--                            <div>--}}
{{--                                <h4>David Muldon</h4>--}}
{{--                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>--}}
{{--                                <p>8 hrs. ago</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <hr class="dropdown-divider">--}}
{{--                    </li>--}}

{{--                    <li class="dropdown-footer">--}}
{{--                        <a href="#">Show all messages</a>--}}
{{--                    </li>--}}

{{--                </ul><!-- End Messages Dropdown Items -->--}}

{{--            </li><!-- End Messages Nav -->--}}

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{asset('NiceAdmin/assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{auth()->user()->nickname}}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{auth()->user()->name}}</h6>
                        <span>{{auth()->user()->getRoleNames()->first()}}</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

{{--                    <li>--}}
{{--                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">--}}
{{--                            <i class="bi bi-person"></i>--}}
{{--                            <span>My Profile</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <hr class="dropdown-divider">--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">--}}
{{--                            <i class="bi bi-gear"></i>--}}
{{--                            <span>Account Settings</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <hr class="dropdown-divider">--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">--}}
{{--                            <i class="bi bi-question-circle"></i>--}}
{{--                            <span>Need Help?</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <hr class="dropdown-divider">--}}
{{--                    </li>--}}

                    <li>
                        <a class="dropdown-item d-flex align-items-center"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()" >
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
