<link rel="stylesheet" href="{{ asset('assets/vendor/themify-icons/themify-icons.css') }}">
<!-- ======= Header ======= -->

<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav header">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="{{asset('img/lamp.png')}}" alt="" width="55" height="55">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{ url('/categories') }}" class="">Home</a></li>
                        <li class="scroll-to-section"><a href="{{ url('/jobs') }}">Jobs</a></li>
                        <li class="scroll-to-section"><a href="{{ url('/finds/my') }}">Proposals</a></li>
                        <li class="scroll-to-section"><a href="/wallet">Wallet</a></li>                  
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->


                    <!-- ***** Header Area End ***** -->
                    <ul class="d-flex align-items-center header-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                                <i class="bi bi-chat-left-text color-white"></i>
                                <span class="badge bg-success badge-number">3</span>
                            </a><!-- End Messages Icon -->
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                                <li class="dropdown-header"> You have 3 new messages <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="message-item">
                                    <a href="#">
                                        <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                                        <div>
                                            <h4>Maria Hudson</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>4 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="message-item">
                                    <a href="#">
                                        <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                        <div>
                                            <h4>Anna Nelson</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>6 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="message-item">
                                    <a href="#">
                                        <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                        <div>
                                            <h4>David Muldon</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>8 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="dropdown-footer">
                                    <a href="#">Show all messages</a>
                                </li>
                            </ul><!-- End Messages Dropdown Items -->
                        </li><!-- End Messages Nav -->
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                            <i class="bi bi-plus color-white d-inline  plus-btn"></i>
                            </a><!-- End Profile Iamge Icon -->
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="{{ url('/projects/create') }}">
                                        <i class="bi bi-plus"></i>
                                        <span>New Project</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="{{ url('/gigs/create')}}">
                                        <i class="bi bi-plus"></i>
                                        <span>New Gig</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                               
                            </ul><!-- End Profile Dropdown Items -->
                        </li><!-- End Profile Nav -->
                        <li class="nav-item dropdown pe-3">
                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                <img src="img/team/team-1.jpg" alt="Profile" class="rounded-circle">
                                <span class="d-none d-md-block dropdown-toggle ps-2 color-white"></span>
                            </a><!-- End Profile Iamge Icon -->
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                <li class="dropdown-header">
                                    <h6>Kevin Anderson</h6>
                                    <span>Web Designer</span>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="{{ url("users")."/". Auth::user()->id }}">
                                        <i class="bi bi-person"></i>
                                        <span>My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="">
                                        <i class="bi bi-gear"></i>
                                        <span>Account Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="">
                                        <i class="bi bi-question-circle"></i>
                                        <span>Need Help?</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                    >
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
</nav>
            </div>
        </div>
    </div>
</header>