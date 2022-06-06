@extends('layouts.layout')

@section('title')
    Festival
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                @forelse($festivals as $festival)
                    <div class="card" style="width: 18rem;">
                        <img src="{{$festival->cover}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$festival->name}}</h5>
                            <h3>{{$festival->song}}</h3>
                            <h5>{{$festival->genre}}</h5>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                @empty
                    <div>
                        Non ci sono eventi in programma
                    </div>
                @endforelse
            </div>

        </div>

    </div>