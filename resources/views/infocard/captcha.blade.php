@extends('layouts.app-small')
@section("title", "Captcha")

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

                            <h2>Captcha</h2>
                            <p>Prove to us you are not a robot.</p>

                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="card">

                <div class="card-body">
                    

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