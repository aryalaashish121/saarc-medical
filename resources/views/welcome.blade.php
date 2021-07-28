@extends('layouts.layout')
@section('title', 'SAARC Medical Co-operation')
@section('content')
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
            <li data-target="#demo" data-slide-to="5"></li>
            <li data-target="#demo" data-slide-to="5"></li>
            <li data-target="#demo" data-slide-to="7"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/afghanistan.jpg" alt="">
                <div class="carousel-caption">
                    <h3>Afghanistan</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/bangladesh.jpg" alt="">
                <div class="carousel-caption">
                    <h3>Bangladesh</h3>

                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/bhutan.jpg" alt="">
                <div class="carousel-caption">
                    <h3>Bhutan</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/india.jpg" alt="">
                <div class="carousel-caption">
                    <h3>India</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/maldives.jpg" alt="">
                <div class="carousel-caption">
                    <h3>Maldives</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/nepal.jpg" alt="">
                <div class="carousel-caption">
                    <h3>Nepal</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/pakistan.jpg" alt="">
                <div class="carousel-caption">
                    <h3>Pakistan</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/srilanka.jpg" alt="">
                <div class="carousel-caption">
                    <h3>Sri Lanka</h3>
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
    <div data-aos="fade-up" data-aos-duration="600" data-aos-offset="90" data-aos-easing="ease-in-out">
        <h1 class="text-center mt-5 myHeadings"> Our Vision </h1>
        <div class="headingsBorder1"></div>
    </div>
    <div class="ourVison container">
        <div class="card" data-aos="zoom-in" data-aos-duration="900">
            <div class="imageBox">
                <img src="/images/family.svg" alt="">
                <h2 class="text-center display-4"> Quality of Life </h2>
            </div>

            <div class="content">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ratione placeat autem
                    architecto illum aliquid asperiores,
                </p>
                <p>
                    <button type="button" style="border-radius: 20px" class="myButtons btn-info btn">Read More</button>
                </p>
            </div>
        </div>
        <div class="card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="900">
            <div class="imageBox">
                <img src="/images/economic.svg" alt="">
                <h2 class="text-center"> Economic Growth </h2>
            </div>

            <div class="content">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ratione placeat autem
                    architecto illum aliquid asperiores,
                </p>
                <p>
                    <button type="button" style="border-radius: 20px" class="myButtons btn-info btn">Read More</button>
                </p>
            </div>
        </div>
        <div class="card" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="900">
            <div class="imageBox">
                <img src="/images/mandala.svg" alt="">
                <h2 class="text-center display-4"> Cultural Development </h2>
            </div>
            <div class="content">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ratione placeat autem
                    architecto illum aliquid asperiores,
                </p>
                <p>
                    <button type="button" style="border-radius: 20px" class="myButtons btn-info btn">Read More</button>
                </p>
            </div>
        </div>

    </div>
    <div data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
        <h1 class="text-center mt-5 myHeadings"> Our Services </h1>
        <div class="headingsBorder2"></div>
    </div>
    <div class="ourVison container">
        <div class="card" data-aos="zoom-in" data-aos-duration="900">
            <div class="imageBox">
                <img src="/images/health.svg" alt="">
                <h2 class="text-center display-4"> Quality Health </h2>
            </div>

            <div class="content">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ratione placeat autem
                    architecto illum aliquid asperiores,
                </p>
                <p>
                    <button type="button" style="border-radius: 20px" class="myButtons btn-info btn">Read More</button>
                </p>
            </div>
        </div>
        <div class="card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="900">
            <div class="imageBox">
                <img src="/images/study.svg" alt="">
                <h2 class="text-center display-4"> Quality Education </h2>
            </div>

            <div class="content">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ratione placeat autem
                    architecto illum aliquid asperiores,
                </p>
                <p>
                    <button type="button" style="border-radius: 20px" class="myButtons btn-info btn">Read More</button>
                </p>
            </div>
        </div>
        <div class="card" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="900">
            <div class="imageBox">
                <img src="/images/robot.svg" alt="">
                <h2 class="text-center display-4"> Technological Education </h2>
            </div>
            <div class="content">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ratione placeat autem
                    architecto illum aliquid asperiores,
                </p>
                <p>
                    <button type="button" style="border-radius: 20px" class="myButtons btn-info btn">Read More</button>
                </p>
            </div>
        </div>

    </div>
@endsection
