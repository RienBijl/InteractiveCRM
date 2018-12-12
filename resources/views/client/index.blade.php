@extends('layouts.app')
@section("title", "Company")

@section('content')
<div class="container">
    <h1>Clients</h1>
    <a href="{{ url('client/create') }}" class="btn btn-primary"><i class="fas fa-plus-square"></i> New client</a>
    <hr>

            {{-- Search for client --}}
        <div class="card">
            <div class="card-header">
            Search
        </div>
        <div class="card-body">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Client">
                    <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
        <div class="card-footer">
            No search operation has been performed.
        </div>
    </div>
            
    
</div>

@endsection
