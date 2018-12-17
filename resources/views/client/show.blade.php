@extends('layouts.app')
@section("title", $client->name)

@section('content')
<div class="container">
<h1>{{ $client->name }}</h1>
    <a href="{{ url('/client') }}" class="btn btn-secondary"><i class="fas fa-undo"></i> Return</a>
    <hr>

    <div class="row">

        <div class="col-sm-12 col-md-4">
            <div class="card">
                <div class="card-header">Address and contact</div>
                <div class="card-body">
                    {{ $client->name  }} <br>
                    {{ $client->mail }}
                    <hr>
                    {{ $client->streetandhousenumber }} <br>
                    {{ $client->cityandzipcode  }} <br>
                    {{ $client->state }} <br>
                    {{ $client->country }}
                </div>
                <div class="card-footer">
                    <a class="btn btn-secondary btn-sm" target="_blank" href="https://www.google.com/maps/search/{{ urlencode(
                    $client->streetandhousenumber  ." "
                    . $client->cityandzipcode . " "
                    . $client->state . " " . $client->country
                    ) }}">Google Maps</a>
                    <a href="mailto:{{ $client->mail}} " class="btn btn-secondary btn-sm">Send mail</a>
                </div>
            </div>
        </div>

    </div>

     
</div>


@endsection
