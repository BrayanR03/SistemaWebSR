@extends('layouts.app')

@section('content')
<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .box-left, .box-right {
        display: flex;
        justify-content: center;
        align-items: center;
        flex: 1;
    }

    .box-left, .box-right {
        max-width: 400px;
    }

    .login-image, .box-login {
        width: 100%;
        height: 100%;
    }

    .login-image {
        object-fit: cover;
    }

    .box-login {
        display: flex;
        align-items: center;
    }

    .card {
        border: 1px solid #ccc;
        border-radius: 10px;
        width: 100%;
    }

    .box-title-login {
        background-color: #580343;
        color: white;
        font-size: 24px;
        font-weight: bold;
        padding: 20px;
        text-align: center;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .card-body {
        padding: 40px;
    }

    .form-label {
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .invalid-feedback {
        color: #ff0000;
    }

    .box-btn-login {
        text-align: center;
        margin-top: 20px;
    }

    .btn-primary {
        background-color: #580343;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #4b0226;
    }

    @media (max-width: 768px) {
        .container {
            flex-direction: column;
        }

        .box-left, .box-right {
            max-width: 100%;
        }

        .login-image {
            height: 50vh;
        }

        .card {
            width: 100%;
        }
    }
</style>
<div class="container">
    <div class="box-left">
        <img src="{{ asset('assets/logo_1.jpeg') }}" alt="Login Image" class="login-image">
    </div>
    <div class="box-right">
        <div class="box-login">
            <div class="card">
                <div class="box-title-login">{{ __('INICIO DE SESION') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end form-label">{{ __('Email Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" autocomplete="off" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end form-label">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="box-btn-login">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
