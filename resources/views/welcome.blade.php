@extends('layouts.layout')
@section('title', 'Welcome Health')

@section('content')

    <div class="relative flex items-top min-h-screen  sm:items-center py-4 sm:pt-0">
        <div>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                    <li data-target="#myCarousel" data-slide-to="6"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/nepal-kathmandu.jpg" alt="Nepal">
                        <div class="carousel-caption">
                            <h3>Nepal</h3>
                            <p>We are changing the shape of health sector in rural areas.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/bhutan.jpg" alt="Bhutan">
                        <div class="carousel-caption">
                            <h3>Bhutan</h3>
                            <p>Learning from health advancements of Bhutan.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/india.jpg" alt="India">
                        <div class="carousel-caption">
                            <h3>India</h3>
                            <p>Helping so many financially weak people to have access to quality health services.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/bangladesh.jpg" alt="Bangladesh">
                        <div class="carousel-caption">
                            <h3>Bangladesh</h3>
                            <p>Helping so many financially weak people to have access to quality health services.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/srilanka.jpg" alt="Sri Lanka">
                        <div class="carousel-caption">
                            <h3>Sri Lanka</h3>
                            <p>Helping so many financially weak people to have access to quality health services.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/pakistan.jpg" alt="Pakistan">
                        <div class="carousel-caption">
                            <h3>Pakistan</h3>
                            <p>Helping so many financially weak people to have access to quality health services.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/maldives.jpg" alt="Maldives">
                        <div class="carousel-caption">
                            <h3>Maldives</h3>
                            <p>Helping so many financially weak people to have access to quality health services.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
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
                    <img class="card-img-top mt-2 px-2" style="border-radius: 15px" src="/images/life.jpg" alt="Card image"
                        style="width:100%">
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
@stop
