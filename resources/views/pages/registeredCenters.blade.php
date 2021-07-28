@extends('layouts.layout')
@section('title', 'Registered Centers')
@section('content')

    <div class="container healthCenterContainer">
        <div class="card-deck">
            <div class="card" data-aos="fade-right" data-aos-duration="1500">
                <img class="card-img-top img-fluid" src="/images/health-centre.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Health Center One</h5>

                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui mollitia ipsam dolorum
                        cumque voluptates suscipit unde quasi libero, illo ut itaque omnis hic laboriosam sint vel fugiat
                        sit labore praesentium!
                    </p>
                    <p class="text-center">
                        <button type="button" class="viewDetailsBtn btn"> View Details </button>
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted"> <i class="fas fa-map-marker-alt mr-2"></i> Kathmandu, Nepal </small>
                </div>
            </div>
            <div class="card" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1500">
                <img class="card-img-top img-fluid" src="/images/health-centre.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Health Center Two</h5>

                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui mollitia ipsam dolorum
                        cumque voluptates suscipit unde quasi libero, illo ut itaque omnis hic laboriosam sint vel fugiat
                        sit labore praesentium!
                    </p>
                    <p class="text-center">
                        <button type="button" class="viewDetailsBtn btn"> View Details </button>
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted"> <i class="fas fa-map-marker-alt mr-2"></i> New Delhi, India </small>
                </div>
            </div>
            <div class="card" data-aos="fade-left" data-aos-delay="400" data-aos-duration="1500">
                <img class="card-img-top img-fluid" src="/images/health-centre.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Health Center Three</h5>

                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui mollitia ipsam dolorum
                        cumque voluptates suscipit unde quasi libero, illo ut itaque omnis hic laboriosam sint vel fugiat
                        sit labore praesentium!
                    </p>
                    <p class="text-center">
                        <button class="viewDetailsBtn btn" type="button"> View Details </button>
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted"> <i class="fas fa-map-marker-alt mr-2"></i> Lahore, Pakistan </small>
                </div>
            </div>
        </div>
    </div>

    <style>
        .healthCenterContainer {
            margin-top: 35px;
        }

        .card {
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            height: 215px;
        }

        .card-body h5 {
            text-shadow: 1px 1px 1px #3949AB;
            border-bottom: 1px solid #3949AB;
        }

        .card-title {
            font-family: 'Nunito', sans-serif;
            font-weight: 500;
        }

        .card-text {
            text-align: justify;
            font-family: 'Roboto', sans-serif;
            font-weight: 600;
            font-size: 14px;
        }

        .viewDetailsBtn {
            border-radius: 20px;
            padding-left: 15px;
            padding-right: 15px;
            background-color: #3949AB;
            color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
        }

        .viewDetailsBtn:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            background-color: #f8f8ff;
            color: #3949AB;
        }

    </style>

@endsection
