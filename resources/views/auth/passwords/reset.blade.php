@extends('layouts.app')
@section('title', 'Change Password')
@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8 resetPass-div">

                <div class="forgot-pass-image" data-aos="fade-down" data-aos-duration="1000">
                    <img src="/images/reset-pass.jpg" class="pass-image" alt="">
                </div>

                <div class="forgot-pass-content justify-content-center">
                    <h5 class="text-center" style="color: rgba(255, 255, 255, 0.918)">
                        Reset Your Password
                        <br>

                    </h5>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="input-group mb-3 mt-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="email" id="email" name="email"
                                class="form-control input_user @error('email') is-invalid @enderror"
                                value="{{ $email ?? old('email') }}" placeholder="Email" required readonly
                                autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" id="password" name="password"
                                class="form-control input_pass @error('password') is-invalid @enderror" value=""
                                placeholder="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" id="password-confirm" name="password_confirmation" class="form-control"
                                value="" placeholder="confirm password" required autocomplete="new-password">
                        </div>

                        <div class="d-flex justify-content-center mt-4 login_container">
                            <button type="submit" name="button" class="btn login_btn"> Reset Password <i
                                    class="fas fa-history ml-2"></i></button>

                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
    <style>
        .resetPass-div {
            min-height: 400px;
            max-width: 400px;
            background: #f39c12;
            margin-top: 70px;
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .forgot-pass-image {
            margin-left: auto;
            margin-right: auto;
            width: 150px;
            height: 150px;
            margin-top: -70px;
        }

        .pass-image {
            width: 150px;
            height: 150px;
            border: 6px solid #c0392b;
            border-radius: 50%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .forgot-pass-content {
            margin-top: 20px;
            padding-left: 40px;
            padding-right: 40px;
        }

    </style>
@endsection
