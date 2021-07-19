{{-- <nav class="navbar navbar-expand-sm bg-light navbar-ight fixed-top">
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
                    SAARCMC <i class="fas fa-angle-down ml-1"></i>
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
                    SAARCMC Hospitals <i class="fas fa-angle-down ml-1"></i>
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
                    Registered <i class="fas fa-angle-down ml-1"></i>
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
        <div class="d-flex ml-5">
            @guest
                @if (Route::has('login'))

                    <a href="{{ route('login') }}"><button type="button" class="btn btn-primary"
                            style="border-radius: 20px">
                            Login</button> </a>

                @endif

                @if (Route::has('register'))

                    <a href="{{ route('register') }}"><button type="button" class="btn btn-secondary ml-2"
                            style="border-radius: 20px">
                            Register</button></a>

                @endif
            </div>
            <ul class="nav navbar-nav navbar-right ml-5">
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">
                            {{ __('profile') }}
                        </a>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
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

</nav> --}}


<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a class="navbar-brand" href="/"><img src="/images/new_logo.png" style="width: 350px" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <i class="fas fa-home mr-1"></i> SAARCMC
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
                    <i class="fas fa-clinic-medical mr-1"></i> SAARCMC Hospitals
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
                    <i class="fas fa-user-tie mr-1"></i> Registered
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('health-workers') }}">Health Workers</a>
                    <a class="dropdown-item" href="#">Centers</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('resource') }}">
                    <i class="fas fa-toolbox mr-1"></i> Resources
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">
                    <i class="fas fa-phone-alt mr-1"></i> Contact Us</a>
            </li>
        </ul>
        <ul class="navbar-nav navbar-right">
            <a href="{{ route('login') }}" class="btn btn-light" style="border-radius: 20px" role="button">Login
                <i class="fas fa-sign-in-alt ml-1"></i>
            </a>
        </ul>

    </div>
</nav>
