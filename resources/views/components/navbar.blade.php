<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/Suprime-logo-small.png') }}">
            </a>
        </div>

        <div class="collapse navbar-collapse app-navbar-collapse">
            <!-- Left Side Of Navbar -->
           <!-- <ul class="nav navbar-nav navbar-left">
                <li class="{{ Request::is('/') ? 'active' : '' }} dropdown products-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="container">
                                <div class="row">
                                    <ul class="col-md-2 col-md-offset-2">
                                        <h5>Men</h5>
                                        <li><a href="{{ url('/') }}">product 1</a></li>
                                        <li><a href="{{ url('/') }}">product 2</a></li>
                                        <li><a href="{{ url('/') }}">product 3</a></li>
                                        <li><a href="{{ url('/') }}">product 4</a></li>
                                        <li><a href="{{ url('/') }}">product 5</a></li>
                                    </ul>
                                    <ul class="col-md-2">
                                        <h5>Ladies</h5>
                                        <li><a href="{{ url('/') }}">product 1</a></li>
                                        <li><a href="{{ url('/') }}">product 2</a></li>
                                        <li><a href="{{ url('/') }}">product 3</a></li>
                                        <li><a href="{{ url('/') }}">product 4</a></li>
                                        <li><a href="{{ url('/') }}">product 5</a></li>
                                    </ul>
                                    <ul class="col-md-2">
                                        <h5>New Arrivals</h5>
                                        <li><a href="{{ url('/') }}">product 1</a></li>
                                        <li><a href="{{ url('/') }}">product 2</a></li>
                                        <li><a href="{{ url('/') }}">product 3</a></li>
                                    </ul>
                                    <ul class="col-md-2">
                                        <h5>Campaigns</h5>
                                        <li><a href="{{ url('/') }}">product 1</a></li>
                                        <li><a href="{{ url('/') }}">product 2</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul> -->

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Login <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-login">

                        <form class="form-horizontal js-login-form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-12 control-label">E-Mail</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-12 control-label">Password</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Login
                                    </button>
                                    <a id="toggleLogin" class="btn btn-secondary btn-block">
                                        Join
                                    </a>

                                    <a class="btn btn-link btn-block" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>

                        <form class="form-horizontal js-join-form" method="POST" action="{{ route('register') }}" style="display: none">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-12 control-label">Name</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-12 control-label">Password</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-12 control-label">Confirm Password</label>

                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Join
                                    </button>
                                    <a id="toggleJoin" class="btn btn-secondary btn-block">
                                        Back to login
                                    </a>
                                </div>
                            </div>
                        </form>

                    </ul>
                </li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/home') }}">Profile</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
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
</nav>
