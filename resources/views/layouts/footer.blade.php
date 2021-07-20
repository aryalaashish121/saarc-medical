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
        <div class="px-3 text-left text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold mb-4">
                        <a class="navbar-brand" href="#">
                            <img src="/images/saarc_logo.jpg" alt="logo" style="width:30px; border-radius:20px">

                        </a>SAARC Medical Co-operation
                    </h6>
                    <p>
                        Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="resources col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold mb-4">
                        <i class="fas fa-tools mr-1"></i>
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
                <div class="hospitals col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold mb-4">
                        <i class="fas fa-hospital mr-1"></i>
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
                        <i class="fas fa-home mr-1"></i>
                        Contact
                    </h6>
                    <p><i class="fas fa-map-marked-alt me-3"></i> Tinkune-32, Kathmandu ( Raja Janak Marg Road)</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        <a href="mailto:info.saarcmcoop@gmail.com" style="text-decoration: none">
                            info.saarcmcoop@gmail.com </a>
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
    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "356566154827460");
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v11.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    @include('layouts.fbchat');
</footer>
<style>
    .hospitals a {
        text-decoration: none;
        color: inherit;
    }

    .hospitals a {
        display: block;
        position: relative;
        padding: 0.2em 0;
    }

    .hospitals a::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 0.1em;
        background-color: hotpink;
        opacity: 0;
        transition: opacity 300ms, transform 300ms;
    }

    .hospitals a:hover::after,
    a:focus::after {
        opacity: 1;
        transform: translate3d(0, 0.2em, 0);
    }

    h6 {
        font-size: 15px;
        font-weight: 700;
        font-family: 'Nunito', sans-serif;
    }

    .resources a {
        text-decoration: none;
        color: inherit;
    }

    .resources a {
        display: block;
        position: relative;
        padding: 0.2em 0;
    }

    .resources a::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 0.1em;
        background-color: hotpink;
        opacity: 0;
        transition: opacity 300ms, transform 300ms;
    }

    .resources a:hover::after,
    a:focus::after {
        opacity: 1;
        transform: translate3d(0, 0.2em, 0);
    }

</style>
<!-- Footer -->
