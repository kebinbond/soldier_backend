@extends('layouts.app', ['class' => 'register-page', 'page' => __('Register Page'), 'contentClass' => 'register-page'])

@section('content')
    <div class="row">
        {{-- <div class="col-md-5 ml-auto">
            <div class="info-area info-horizontal mt-5">
                <div class="icon icon-warning">
                    <i class="tim-icons icon-wifi"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Marketing') }}</h3>
                    <p class="description">
                        {{ __('We\'ve created the marketing campaign of the website. It was a very interesting collaboration.') }}
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="icon icon-primary">
                    <i class="tim-icons icon-triangle-right-17"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Fully Coded in HTML5') }}</h3>
                    <p class="description">
                        {{ __('We\'ve developed the website with HTML5 and CSS3. The client has access to the code using GitHub.') }}
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="icon icon-info">
                    <i class="tim-icons icon-trophy"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Built Audience') }}</h3>
                    <p class="description">
                        {{ __('There is also a Fully Customizable CMS Admin Dashboard for this product.') }}
                    </p>
                </div>
            </div>
        </div> --}}
        <div class="col-md-7 mr-auto ml-auto">
            {{-- <div class="card card-register card-white"> --}}
            {{-- <div class="card-header">
                    <img src="{{ asset('black') }}/img/card-primary.png" alt="" style="position: absolute">
                    <h4 class="card-title mt-3 ml-3">{{ __('Register') }}</h1>
                </div> --}}
            {{-- <div class="card-header">
                    <img src="{{ asset('black') }}/img/card-primary.png" alt="Card image">
                    <h4 class="card-title">{{ __('Register') }}</h4>
                </div> --}}
            <form class="form mt-5" method="post" action="{{ route('register') }}" style="z-index: 1">
                @csrf

                <div style="height: 50px; margin-bottom: 50px; justify-content: center; display: flex;">
                    <img src="{{ asset('black') }}/img/logo.png" alt="" style="height: 50px; width: 100px; margin-right: 20px">
                    <p style="font-size: 30px; font-weight: bold; letter-spacing: 20px;">VETGUAR<span style="letter-spacing: 0;">D</span></p>
                </div>

                <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }} mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-single-02"></i>
                        </div>
                    </div>
                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('Name') }}">
                    @include('alerts.feedback', ['field' => 'name'])
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
                    <input type="password" name="password"
                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('Password') }}">
                    @include('alerts.feedback', ['field' => 'password'])
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-lock-circle"></i>
                        </div>
                    </div>
                    <input type="password" name="password_confirmation" class="form-control"
                        placeholder="{{ __('Confirm Password') }}">
                </div>
                {{-- <div class="form-check text-left">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="false">
                                <span class="form-check-sign"></span>
                                {{ __('I agree to the') }}
                                <a href="#">{{ __('terms and conditions') }}</a>.
                            </label>
                        </div> --}}
                <button type="submit" class="btn btn-primary btn-lg btn-block mb-3" style="background-image: linear-gradient(to bottom left, #969696, #5b5b5b, #000000);">{{ __('Get Started') }}</button>
            </form>
        </div>
        {{-- </div> --}}
    </div>
@endsection
