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

            <li><a href="{{ route('login') }}" class="text-sm text-gray-700"><button style="border-radius:20px"
                        class="btn btn-primary ml-5" type="submit">Login
                    </button></a>
            </li>

            <li> <a href="{{ route('register') }}" class="text-sm text-gray-700"><button style="border-radius:20px"
                        class="btn btn-info ml-1" type="submit">Register
                    </button>
                </a>
            </li>

        </ul>
    </div>

</nav>
