  <header class="navbar navbar-fixed-top bg-primary">
            <div class="navbar-branding">
                <a class="navbar-brand" href="">
                    <b>Lexmos</b>
                </a>
                <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
            </div>
            <ul class="nav navbar-nav navbar-left">
                <li class="hidden-xs">
                    <a class="request-fullscreen toggle-active" href="#">
                        <span class="ad ad-screen-full fs18"></span>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
                        <img src="{{ asset(' pimag/') }}" alt="avatar" class="mw30 br64 mr15">
                        <span class="caret caret-tp hidden-xs"></span>
                    </a>
                    <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
                        <li class="list-group-item">
                            <a href="#" class="animated animated-short fadeInUp">
                                <span class="fa fa-user"></span> Profile
                            </a>
                        </li>
                      
                        <li class="dropdown-footer">
                            <a class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <span class="fa fa-power-off pr5"></span>{{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                <li id="toggle_sidemenu_t">
                    <span class="ad ad-lines"></span>
                </li>
            </ul>
        </header>