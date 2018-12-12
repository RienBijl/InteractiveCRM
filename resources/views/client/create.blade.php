@extends('layouts.app')
@section("title", "New client")

@section('content')
<div class="container">
    <h1>New client</h1>
    <a href="{{ url('/client') }}" class="btn btn-secondary"><i class="fas fa-undo"></i> Return</a>
    <hr>

            {{-- Client creation --}}
        <div class="card">
        <div class="card-body">
            <form action="{{ route('client.store') }}" method="post">

            {{-- START CLIENT CREATION FORM --}}

            @csrf

            <div class="row">

                <div class="col-sm-12 col-md-4">
                    <b>Name and mail</b>
                    <input name="name" type="text" class="form-control" placeholder="Name">
                    <input name="mail" type="text" class="form-control" placeholder="Mail address"> <hr>
                    <b>Address</b>
                    <input name="streetandhousenumber" type="text" class="form-control" placeholder="Street and housenumber">
                    <input name="cityandzipcode" type="text" class="form-control" placeholder="City and ZIP code">
                    <input name="state" type="text" class="form-control" placeholder="State">
                    <input name="country" type="text" class="form-control" placeholder="Country">
                </div>

                <div class="col-sm-12 col-md-8">
                    <b>Client description</b>
                    <textarea name="description" class="form-control" rows="4" placeholder="Description of client" style="resize: none"></textarea> <hr>
                    <b>Administrative information</b>
                    <textarea name="administrative" class="form-control" rows="4" placeholder="Tax information, commercenumber etc." style="resize: none"></textarea>
                </div>

            </div>
            <hr>
            <input type="submit" class="btn btn-primary" value="Create new client">

            {{-- END CLIENT CREATION FORM --}}

            </form>
        </div>
    </div>
            
    
</div>

@endsection
