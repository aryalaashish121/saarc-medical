@extends('layouts.app')
@section('title', 'Reset Password')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 resetPass-div">

                <div class="forgot-pass-image" data-aos="fade-down" data-aos-duration="1000">
                    <img src="/images/forgot-password.jpg" class="pass-image" alt="">
                </div>

                <div class="forgot-pass-content justify-content-center">
                    <h5 class="text-center" style="color: rgba(255, 255, 255, 0.918)">
                        Forgot Your Password?
                        <br>
                        <span style="font-size: 14px; font-weight:500; color: rgba(255, 255, 255, 0.918)"> You can reset
                            your password
                            here. </span>
                    </h5>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="input-group mb-3 mt-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="email" id="email" name="email"
                                class="form-control input_user @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-center mt-5 login_container">
                            <button type="submit" name="button" class="btn login_btn"> Send Password Reset Link <i
                                    class="fas fa-sign-in-alt ml-2"></i> </button>

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
{{-- <div class="card">
    <div class="card-header">{{ __('Reset Password') }}</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group row">
                <label for="email"
                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div> --}}
