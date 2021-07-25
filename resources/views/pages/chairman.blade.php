@extends('layouts.layout')
@section('title', 'SAARCMC Chairman')
@section('content')

    <div class="about-wrapper">
        <div class="about-left">
            <div class="about-left-content">
                <div>
                    <div class="shadow">
                        <div class="about-img">
                            <img src="/images/chairman.jpg" alt="about image">
                        </div>
                    </div>

                    <h2>H.E.<br>Esala Ruwan Weerakoon</h2>
                    <h3>Secretary General</h3>
                </div>
            </div>
        </div>

        <div class="about-right">
            <div class="about-para">
                <p>
                    Prior to assuming the post of Secretary General, Weerakoon served as Senior Additional Secretary to the
                    President of Sri Lanka. Previously, he was Foreign Secretary of Sri Lanka. He had also served as Sri
                    Lanka’s High Commissioner to India and Ambassador to Norway.

                </p>
                <p>
                    Weerakoon was educated at Royal College, Colombo. He studied economics at the University of Kelaniya and
                    undertook post-graduate studies at the London School of Economics.
                </p>

            </div>
        </div>
    </div>

    <style>
        .about-wrapper {
            height: 90vh;
            margin-top: 10px;
        }

        .about-left {
            background: #FDA946;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 90vh;
        }

        .about-left-content {
            background: #f8f8ff;
            padding: 4rem 4rem 2.5rem 5rem;
            text-align: center;
            border-radius: 15px;
        }

        .about-left-content {
            box-shadow: 0px 0px 18px -1px rgba(0, 0, 0, 0.39);
            -webkit-box-shadow: 0px 0px 18px -1px rgba(0, 0, 0, 0.39);
            -moz-box-shadow: 0px 0px 18px -1px rgba(0, 0, 0, 0.39);
        }

        .about-img img {
            display: block;
            width: 200px;
        }

        .about-img {
            width: 200px;
            height: 200px;
            overflow: hidden;
            border-radius: 50%;
            transition: all 0.5s ease-in-out;
        }

        .shadow {
            margin-left: auto;
            margin-right: auto;
            border-radius: 50%;
            width: 200px;
            height: 200px;
            position: relative;
            cursor: pointer;
        }

        .shadow::after {
            content: "";
            position: absolute;
            background: rgba(0, 0, 0, 0.4);
            left: 50%;
            transform: translateX(-50%);
            bottom: -20px;
            height: 7px;
            width: 50px;
            filter: blur(3px);
            -webkit-filter: blur(3px);
            opacity: 0;
            transition: all 0.6s ease;
        }

        .shadow:hover .about-img {
            transform: translateY(-10px);
        }

        .shadow:hover::after {
            opacity: 1;
        }

        .about-left-content h2 {
            font-size: 25px;
            font-family: 'Oxygen', sans-serif;
            font-weight: 800;
            margin: 2.2rem 0 0.6rem 0;
            line-height: 1.2;
            padding-bottom: 1rem;
            border-bottom: 2px solid black;
        }

        .about-left-content h3 {
            text-transform: uppercase;
            font-weight: 600;
            font-family: 'Roboto', sans-serif;
            letter-spacing: 5px;
            margin-top: 1.2rem;
            font-size: 15px;
        }

        .about-right {
            background: #fff;
            height: 90vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0 5rem;
            text-align: center;
        }

        .about-para p {
            font-weight: 300;
            padding: 0.5rem;
            font-family: 'Oxygen', sans-serif;
            opacity: 0.8;
        }

        @media screen and (min-width: 992px) {
            .about-wrapper {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }

            .about-left {
                position: relative;
            }

            .about-left-content {
                position: absolute;
                right: -50px;
            }
        }

    </style>
@endsection
