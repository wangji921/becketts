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
                    <li class="{{ Request::is('photos') ? 'active' : '' }}"><a href="{{ route('photos.index') }}">Photos</a></li>
                    <li class="dropdown {{ request()->is('categories/*') ? 'active' : '' }}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories</a>
                        <ul class="dropdown-menu">
                            <li class="{{ request()->is('categories/1') ? 'active' : '' }}"><a href="{{ route('categories.show', '1') }}">Anniversary</a></li>
                            <li class="{{ request()->is('categories/2') ? 'active' : '' }}"><a href="{{ route('categories.show', '2') }}">Birthday</a></li>
                            <li class="{{ request()->is('categories/3') ? 'active' : '' }}"><a href="{{ route('categories.show', '3') }}">Family Group</a></li>
                            <li class="{{ request()->is('categories/4') ? 'active' : '' }}"><a href="{{ route('categories.show', '4') }}">Family Member</a></li>
                            <li class="{{ request()->is('categories/5') ? 'active' : '' }}"><a href="{{ route('categories.show', '5') }}">Friends</a></li>
                            <li class="{{ request()->is('categories/6') ? 'active' : '' }}"><a href="{{ route('categories.show', '6') }}">Holidays</a></li>
                            <li class="{{ request()->is('categories/7') ? 'active' : '' }}"><a href="{{ route('categories.show', '7') }}">House</a></li>
                            <li class="{{ request()->is('categories/8') ? 'active' : '' }}"><a href="{{ route('categories.show', '8') }}">Pet</a></li>
                            <li class="{{ request()->is('categories/9') ? 'active' : '' }}"><a href="{{ route('categories.show', '9') }}">Place</a></li>
                            <li class="{{ request()->is('categories/10') ? 'active' : '' }}"><a href="{{ route('categories.show', '10') }}">Special Events</a></li>                            <li><a href="{{ route('categories.show', '10') }}">Special Events</a></li>
                            <li class="{{ request()->is('categories/11') ? 'active' : '' }}"><a href="{{ route('categories.show', '10') }}">Wedding</a></li>
                            <li class="{{ request()->is('categories/12') ? 'active' : '' }}"><a href="{{ route('categories.show', '10') }}">Work</a></li>
                            <li class="{{ request()->is('categories/13') ? 'active' : '' }}"><a href="{{ route('categories.show', '10') }}">Work Mate</a></li>
                            <li class="{{ request()->is('categories/14') ? 'active' : '' }}"><a href="{{ route('categories.show', '10') }}">Others</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Members</a></li>
                    <li><a href="#">Help</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register')}}">Register</a></li>
                    @else
                        <li>
                            <a href="{{ route('photos.create') }}">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Upload Photos
                            </a>
                        </li>
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