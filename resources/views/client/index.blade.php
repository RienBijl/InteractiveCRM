@extends('layouts.app')
@section("title", "Clients")

@section('content')
<div class="container">
    <h1>Clients</h1>
    <a href="{{ url('client/create') }}" class="btn btn-secondary"><i class="fas fa-plus"></i> New client</a>
    <hr>

            {{-- Search for client --}}
        <div class="card">
            <div class="card-header">
            Search
        </div>
        <div class="card-body">
            <form id="search" method="get">
                <div class="input-group mb-3">
                    <input name="query" type="text" class="form-control" placeholder="Client">
                    <div class="input-group-append">
                        <button onclick="$('#search').submit();" class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">

            @if(!is_int($results))
                @foreach($results as $result)
                    <div class="card box pointer" onclick="location.href = '{{url('client/' .$result->id)}}'">
                        <div class="card-body">
                            <b>{{$result->name}}</b> <br>
                            <small class="text-muted">#{{$result->id}}, {{$result->mail}}, {{$result->streetandhousenumber}}, {{$result->cityandzipcode}}, {{$result->state}}, {{$result->country}}</small>
                        </div>
                    </div>
                    <br>
                @endforeach

                {{ $results->links() }}
            @else
                No search operation has been performed.
            @endif
        </div>
    </div>
            
    
</div>

@endsection
