<!--**********************************
Nav header end
***********************************-->
<!--**********************************
Header start
***********************************-->
<div class="main-row">
    <div class="nav-header">

    </div>


    <div class="header mr-4">
        <div class="header-content">
            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu  color-white"></i></span>
                </div>
            </div>
            <div class="header-right float-right">
                <ul class="clearfix">
                    <li class="icons dropdown">
                        <a href="/messages">
                            <i class="mdi mdi-email-outline color-white"></i>
                        </a>
                    </li>
                    <li class="icons dropdown ml-2">
                        <div class="user-img c-pointer position-relative mr-5" data-toggle="dropdown">
                            <span class="activity active"></span>
                            <img src="images/user/1.png" height="40" width="40" alt="" ">
                        </div>
                        <div class=" drop-down dropdown-profile animated fadeIn dropdown-menu">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-lock"></i>
                                            <span>Sign Out</span></a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>