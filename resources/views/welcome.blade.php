@extends('layouts.app')

@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-8">
                        <h1 class="text-white">{{ __('Welcome To Vetguard Server!') }}</h1>
                        <p class="text-lead text-light">
                            {{ __('Let\'s save many people by letting them know the beauty of life.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
