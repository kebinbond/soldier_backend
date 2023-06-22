@extends('layouts.app', ['class' => 'login-page', 'page' => __('Login Page'), 'contentClass' => 'login-page'])

@section('content')
    {{-- <div class="col-md-10 text-center ml-auto mr-auto">
        <h3 class="mb-5">Log in to see how you can speed up your web development with out of the box CRUD for #User Management and more.</h3>
    </div> --}}
    <div class="row">
        <div class="col-md-7 mr-auto ml-auto">
            <form class="form mt-5" method="post" action="{{ route('login') }}">
                @csrf

                <div style="height: 50px; margin-bottom: 50px; justify-content: center; display: flex;">
                    <img src="{{ asset('black') }}/img/logo.png" alt="" style="height: 50px; width: 100px; margin-right: 20px">
                    <p style="font-size: 30px; font-weight: bold; letter-spacing: 20px;">VETGUAR<span style="letter-spacing: 0;">D</span></p>
                </div>



                <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-email-85"></i>
                        </div>
                    </div>
                    <input type="email" name="email"
                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('Email') }}">
                    @include('alerts.feedback', ['field' => 'email'])
                </div>
                <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }} mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-lock-circle"></i>
                        </div>
                    </div>
                    <input type="password" placeholder="{{ __('Password') }}" name="password"
                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                    @include('alerts.feedback', ['field' => 'password'])
                </div>

                <button type="submit" href=""
                    class="btn btn-primary btn-lg btn-block mb-3" style="background-image: linear-gradient(to bottom left, #969696, #5b5b5b, #000000);">{{ __('Get Started') }}</button>
                <div class="pull-left">
                    <h6>
                        <a href="{{ route('register') }}" class="link footer-link text-white">{{ __('Create Account') }}</a>
                    </h6>
                </div>
                <div class="pull-right">
                    <h6>
                        <a href="{{ route('password.request') }}"
                            class="link footer-link text-white">{{ __('Forgot password?') }}</a>
                    </h6>
                </div>


            </form>
        </div>
    </div>
@endsection
