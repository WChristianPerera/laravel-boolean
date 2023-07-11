@extends('layouts.base')

@section('contents')
    <div class="row">
        <div class="col-4 offset-4">
            <div class="card h-100" style="border: 1px solid black">
                <div class="card-body">
                    <h5 class="card-title">{{ $travel->title }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Data: {{ $travel->travel_date }} €</li>
                    <li class="list-group-item">Ricordi Memorabili: {{ $travel->memories_to_remind}}</li>
                    <li class="list-group-item">Luogo: {{ $travel->place }}</li>
                </ul>
                <div class="card-body">
                    <p>{{ $travel->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection