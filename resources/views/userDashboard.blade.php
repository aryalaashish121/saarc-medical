@extends('layouts.layout')
@section('title', 'User Dashboard')
@section('content')

    <div class="progress-bar bg-light mt-5">
        <div class="container">
            <div class="steps">
                <i class="far fa-user bot-icon-1"></i>
                <div class="line-1"></div>
            </div>
            <div class="steps">
                <i class="fa fa-phone bot-icon-2"></i>
                <div class="line-2"></div>
            </div>
            <div class="steps">
                <i class="far fa-flag bot-icon-3"></i>
            </div>
        </div>
    </div>

    <div class="form-1 container">
        <div class="container">
            <h1 class="userHeadings">
                <i class="far fa-user"></i> &nbsp; Personal Details
            </h1>
            <label class="myLabels mt-1" for=""> Full Name (In Block Letters)</label>
            <br>
            <input type="text" placeholder="First Name" class="input-1">
            <input type="text" placeholder="Middle Name" class="input-1">
            <input type="text" placeholder="Last Name" class="input-1">
            <br>
            <label class="myLabels mt-4" for=""> Date of Birth </label>
            <br>
            <input type="text" placeholder="D.O.B (A.D.)" class="input-1">
            <input type="text" placeholder="D.O.B (B.S.)" class="input-1">
            <br>
            <label class="myLabels mt-4" for=""> Additional Info </label>
            <br>
            <label class="myLabels" for="gender">Gender : </label>
            <select name="gender" id="gender" class="input-1">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="others">Others</option>
            </select>
            <input type="text" placeholder="Nationality" class="input-1">
            <input type="text" placeholder="Religion" class="input-1">
            <div class="clearfix">
            </div>
            <button class="continueButton-1"> Continue &nbsp; <i class="fa fa-angle-right mr-1"></i></button>
        </div>
    </div>

    <div class="form-2 container">
        <div class="container">
            <h1 class="userHeadings">
                <i class="far fa-phone"></i> &nbsp; Contact Details
            </h1>
            <label class="myLabels" for="countryCode"> Country Code : </label>
            <select name="countryCode" id="countryCode" class="input-1">
                <option value="male">Nepal +977</option>
                <option value="female">Afghan +098</option>
                <option value="others">Maldives +533</option>
            </select>
            <input type="text" placeholder="Mobile Number" class="input-1">
            <input type="text" placeholder="Email" class="input-1">
            <input type="text" placeholder="Website" class="input-1">
            <div class="clearfix">
            </div>
            <button class="backButton-1"> <i class="fa fa-angle-left mr-1"></i> Back </button>
            <button class="continueButton-2"> Continue &nbsp; <i class="fa fa-angle-right mr-1"></i></button>
        </div>
    </div>

    <div class="form-3 container">
        <div class="container">
            <h1 class="userHeadings">
                Congratulations!!!
            </h1>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.continueButton-1').click(function() {
                $('.form-1').css('display', 'none');
                $('.form-2').css('display', 'block');
                $('.bot-icon-1').css('color', '#0254b7');
                $('.line-1').css('background-color', '#0254b7');
            })
            $('.continueButton-2').click(function() {
                $('.form-2').css('display', 'none');
                $('.form-3').css('display', 'block');
                $('.bot-icon-2').css('color', '#0254b7');
                $('.line-2').css('background-color', '#0254b7');
            })
            $('.backButton-1').click(function() {
                $('.form-2').css('display', 'none');
                $('.form-1').css('display', 'block');
                $('.bot-icon-1').css('color', '#c7c7c7');
                $('.line-1').css('background-color', '#c7c7c7');
            })
        })
    </script>

@endsection
