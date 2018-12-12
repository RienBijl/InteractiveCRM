@extends('layouts.app')
@section("title", "New client")

@section('content')
<div class="container">
<h1>{{ $client->name }}</h1>
    <a href="{{ url('/client') }}" class="btn btn-secondary"><i class="fas fa-undo"></i> Return</a>
    <hr>

     
</div>


@endsection
