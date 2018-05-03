<header>
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
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--teamr2rcrack--}}
                {{--</a>--}}
            </div>

            <div class=" navbar-collapse">
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li>
                        {{ Auth::guard()->user()->name }}
                        <a href="{{ url('logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
