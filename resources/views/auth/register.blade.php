@extends('main')
@section('title','Register')
@section('stylesheets')
    <style>
        body {
            background-color: #e7e4da;
        }
    </style>
@endsection
@section('content')
<div class="container my-5 py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 px-3">
            <div class="card bg-dark text-light py-2">
                <div class="card-header border-secondary fs-4">{{ __('Register') }}</div>

                <div class="card-body pt-4 px-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-12">
                                 <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control w-100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control w-100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control w-100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control w-100" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn w-100 btn-orange mx-auto d-block">
                                    {{ __('Register') }}
                                </button>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#LoginModal" class="btn btn-link text-light mt-2">
                                            {{ __('Already have an account? Login') }}
                                        </a>
                                    
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
