<nav class="navbar navbar-expand-sm bg-light navbar-ight fixed-top">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="/images/saarc_logo.jpg" alt="logo" style="width:50px; border-radius:20px">

    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon dark"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    SAARCMC
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">About SAARCMC</a>
                    <a class="dropdown-item" href="#">SAARC Charter</a>
                    <a class="dropdown-item" href="#">SAARC Structure</a>
                    <a class="dropdown-item" href="#">SAARCMC Chairman</a>
                    <a class="dropdown-item" href="#">External SAARCMC Relations</a>

                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    SAARCMC Hospitals
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Afghanistan</a>
                    <a class="dropdown-item" href="#">Bangladesh</a>
                    <a class="dropdown-item" href="#">Bhutan</a>
                    <a class="dropdown-item" href="#">India</a>
                    <a class="dropdown-item" href="#">Maldives</a>
                    <a class="dropdown-item" href="#">Nepal</a>
                    <a class="dropdown-item" href="#">Pakistan</a>
                    <a class="dropdown-item" href="#">Sri Lanka</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Registered
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Health Workers</a>
                    <a class="dropdown-item" href="#">Centers</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('resource') }}">
                    Resources
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
            </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">

            @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">
                                        {{ __('profile') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>


                        @endguest

        </ul>
    </div>

</nav>
