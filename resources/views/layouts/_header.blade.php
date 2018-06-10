<nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Becketts
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="">Photos</a></li>
                    <li><a href="">Albums</a></li>
                    <li><a href="">Members</a></li>
                    <li><a href="">Help</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register')}}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                                    @if (Auth::user()->avatar)
                                        <img src="{{ config('app.url') . Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px">
                                    @else
                                        <img src="" class="img-responsive img-circle" width="30px" height="30px">
                                    @endif
                                </span>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('users.show', Auth::id()) }}">
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('users.edit', Auth::id()) }}">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                        Edit profile
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>