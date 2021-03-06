@extends('layouts.app')
@section("title", "Dashboard")

@section('content')
<div class="container">
    <h1>Welcome back, {{ Auth::user()->name }}</h1> <hr>
    <div class="row">
        <div class="col-sm-12 col-md-4">

            {{-- Search for client --}}
            <div class="card">
                <div class="card-header">
                    Search for client
                </div>
                <div class="card-body">
                    <form id="search-client" action="{{url('/client')}}" method="get">
                        <div class="input-group mb-3">
                            <input type="text" name="query" class="form-control" placeholder="Client">
                            <div class="input-group-append">
                                <button onclick="$('#search-client').submit()" class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
            {{-- Search for ticket --}}
            <div class="card">
                    <div class="card-header">
                        Search for ticket
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Ticket">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

            {{-- Jump to tool --}}
                <br>

            <div class="card">
                <div class="card-header">Jump to tool</div>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('tools/statitician') }}"><i class="fas fa-signal"></i> Statistician</a>
                    </li>
                </ul>
            </div>
    
        </div>

        <div class="col-sm-12 col-md-8">
            {{-- Activity feed --}}
            <div class="card">
                <div class="card-header">Activities</div>
                <div class="card-body">
                    <div class="alert alert-secondary"><i class="fas fa-life-ring"></i> You were mentioned in a ticket (#4433)<span class="float-right">[dissmiss] [navigate]</span></div>
                    <div class="alert alert-secondary"><i class="fas fa-life-ring"></i> You were mentioned in a ticket (#3464)<span class="float-right">[dissmiss] [navigate]</span></div>
                    <div class="alert alert-secondary"><i class="fas fa-life-ring"></i> You were mentioned in a ticket (#3453)<span class="float-right">[dissmiss] [navigate]</span></div>
                    <div class="alert alert-secondary"><i class="fas fa-life-ring"></i> You were mentioned in a ticket (#7544)<span class="float-right">[dissmiss] [navigate]</span></div>
                    <div class="alert alert-secondary"><i class="fas fa-life-ring"></i> You were mentioned in a ticket (#3633)<span class="float-right">[dissmiss] [navigate]</span></div>
                    <div class="alert alert-secondary"><i class="fas fa-life-ring"></i> You were mentioned in a ticket (#7564)<span class="float-right">[dissmiss] [navigate]</span></div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
