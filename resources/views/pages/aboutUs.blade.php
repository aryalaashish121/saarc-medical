@extends('layouts.layout')
@section('title', 'About SAARCMC')
@section('content')


    <div class="about-section">
        <div class="inner-container">
            <h1>
                About SAARCMC
                <div class="border"></div>
            </h1>

            <p class="about-content">
                The South Asian Association for Regional Cooperation (SAARC) was established with the signing of the
                SAARC
                Charter in Dhaka on 8 December 1985. SAARC comprises of eight Member States: Afghanistan, Bangladesh,
                Bhutan, India, Maldives, Nepal, Pakistan and Sri Lanka. The Secretariat of the Association was set up in
                Kathmandu on 17 January 1987.

                Decisions at all levels are to be taken on the basis of unanimity; and bilateral and contentious issues
                are
                excluded from the deliberations of the Association.
            </p>

        </div>
    </div>
    <style>
        .about-section {
            margin-top: 20px;
            background: url("/images/about-us.jpg") no-repeat left;
            background-size: 65%;
            background-color: linear-gradient(#2b5876, #4e4376);
            overflow: hidden;
            padding: 50px 0;
        }

        .inner-container {
            width: 55%;
            float: right;
            background-color: #fdfdfd;
            padding: 100px;
        }

        .inner-container h1 {
            margin-bottom: 30px;
            font-size: 30px;
            font-family: 'Oxygen', sans-serif;
            font-weight: 800;
        }

        .border {
            height: 4px;
            width: 230px;
            background-color: black;
        }

        .about-content {
            text-align: justify;
            font-size: 16px;
            font-weight: 600;
            font-family: 'Roboto', sans-serif;
        }

        @media screen and (max-width:1200px) {
            .inner-container {
                padding: 80px;
            }
        }

        @media screen and (max-width:1000px) {
            .about-section {
                background-size: 100%;
                padding: 100px 40px;
            }

            .inner-container {
                width: 100%;

            }
        }

        @media screen and (max-width:600px) {
            .about-section {
                padding: 0;
            }

            .inner-container {
                padding: 60px;
            }
        }

    </style>
@endsection
