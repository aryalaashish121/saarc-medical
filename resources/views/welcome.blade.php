<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-sm bg-light navbar-ight fixed-top">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
            <img src="/images/saarc_logo.jpg" alt="logo" style="width:40px; border-radius:20px">
            SAARCMC
        </a>



        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon dark"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
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
                <li class="nav-item">
                    <a class="nav-link" href="#">Registered Health Workers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Registered Centers</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Resources
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Internship Program</a>
                        <a class="dropdown-item" href="#">Exchange Program</a>
                        <a class="dropdown-item" href="#">Vacancy</a>
                        <a class="dropdown-item" href="#">Agreements & Conversions</a>
                        <a class="dropdown-item" href="#">Publications</a>
                        <a class="dropdown-item" href="#">Activities</a>
                        <a class="dropdown-item" href="#">Others</a>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>

            </ul>
        </div>
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-3 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700"><button style="border-radius:20px"
                            class="btn btn-primary ml-5" type="submit">Login</button></a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-sm text-gray-700"><button style="border-radius:20px"
                                class="btn btn-info ml-1" type="submit">Register</button></a>
                    @endif
                @endauth
            </div>
        @endif


    </nav>
    <div class="relative flex items-top justify-center min-h-screen  sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-12 lg:px-12 mt-5">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/nepal-kathmandu.jpg" alt="Los Angeles" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>Nepal</h3>
                            <p>We are changing the shape of health sector in rural areas.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/bhutan.jpg" alt="Chicago" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>Bhutan</h3>
                            <p>Learning from health advancements of Bhutan.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/india.jpg" alt="New York" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>India</h3>
                            <p>Helping so many financially weak people to have access to quality health services.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>

    </div>
    <h3 class="display-4 text-center"> Our Vison </h3>
    <div class="container">
        <div class="row">
            <div class=" col-md-4 shadow-lg">
                <div class="card" style="border-radius: 15px">
                    <img class="card-img-top mt-2 px-2" style="border-radius: 15px" src="/images/life.jpg"
                        alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Improved Quaity of Life</h4>
                        <p class="card-text">To promote the welfare of the peoples of South Asia and to improve their
                            quality of life.
                        </p>
                        <a href="#" class="btn btn-primary stretched-link">See More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="border-radius: 15px">
                    <img class="card-img-top mt-2 px-2" style="border-radius: 15px" src="/images/economy.jpg"
                        alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Economic Growth</h4>
                        <p class="card-text">To accelerate economic growth to provide all individuals the opportunity to
                            live in dignity and to realize
                            their full potentials.
                        </p>
                        <a href="#" class="btn btn-primary stretched-link">See More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="border-radius: 15px">
                    <img class="card-img-top mt-2 px-2" style="border-radius: 15px" src="/images/culture.jpg"
                        alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Cultural Development</h4>
                        <p class="card-text">To accelerate cultural development to provide all individuals to live in
                            dignity and to realize
                            their full potentials.
                        </p>
                        <a href="#" class="btn btn-primary stretched-link">See More</a>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <h3 class="display-4 text-center mt-5"> Our Services </h3>
    <div class="container">
        <div class="row">
            <div class=" col-md-4 shadow-lg">
                <div class="card" style="border-radius: 15px">
                    <img class="card-img-top mt-2 px-2" style="border-radius: 15px" src="/images/health_worker.jpg"
                        alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Quality Health</h4>
                        <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet officiis
                            amet sapiente, magni error, dolorum minima, molestias ipsum aspernatur animi recusandae quos
                            impedit modi provident architecto qui neque optio. Possimus.
                        </p>
                        <a href="#" class="btn btn-primary stretched-link">See More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="border-radius: 15px">
                    <img class="card-img-top mt-2 px-2" style="border-radius: 15px" src="/images/education.jpg"
                        alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Quality Education</h4>
                        <p class="card-text"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste fugiat
                            dolor illo quod exercitationem minus provident ipsum cumque totam aliquid, delectus illum
                            deserunt repellat perferendis minima accusantium harum at autem!
                        </p>
                        <a href="#" class="btn btn-primary stretched-link">See More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="border-radius: 15px">
                    <img class="card-img-top mt-2 px-2" style="border-radius: 15px" src="/images/technology.jpg"
                        alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Technological Education</h4>
                        <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam sed dolorum
                            nobis ipsam, nisi perspiciatis, illum non provident debitis aut, veniam quam? Nostrum fuga,
                            impedit accusamus totam necessitatibus officia cum.
                        </p>
                        <a href="#" class="btn btn-primary stretched-link">See More</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted mt-5">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f mr-3"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter mr-3"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google mr-3"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase font-weight-bold mb-4">
                            <i class="fas fa-building me-3 mr-3"></i>SAARC Medical Co-operation
                        </h6>
                        <p>
                            Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold mb-4">
                            Resources
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Internship Programs</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Job Vacancy</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Exchange Program</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Publications</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold mb-4">
                            SAARCMC Hospitals
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Afghanistan</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Bangladesh</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Bhutan</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">India</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Maldives</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Nepal</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Pakistan</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Sri Lanka</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold mb-4">
                            Contact
                        </h6>
                        <p><i class="fas fa-home me-3"></i> Tinkune-32, Kathmandu ( Raja Janak Marg Road)</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            <a href="mailto:info.saarcmcoop@gmail.com"> info.saarcmcoop@gmail.com </a>
                        </p>
                        <p><i class="fas fa-phone me-3"></i> 01-4279626, 01-4117940 </p>

                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="#">SAARC Medical Co-operation</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>

</html>
