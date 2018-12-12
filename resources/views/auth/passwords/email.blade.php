@extends('layouts.app-small')

@section('content')
<div class="container">

    

    <div class="row justify-content-center">
        <div class="col-md-8">

            
                <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-2">
                                    <img src="{{ asset('img/svg/login.svg') }}" alt="Login icon" class="img-fluid">
                                </div>
                                <div class="col-sm-12 col-md-10">
        
                                    <h2>Reset password</h2>
                                    <p>
                                        Reset your company account in case of a lost password. <br>
                                        <a href="{{ url('/login') }}">Return to login</a>
                                    </p>
        
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
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
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    
        body  {
            background-image: url({{ asset("img/login-bg.png") }}) !important;
        }
        
        </style>