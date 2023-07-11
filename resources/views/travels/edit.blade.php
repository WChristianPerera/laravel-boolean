@extends('layouts.base')

@section('contents')
    <h1>Modifica Viaggio</h1>
    
    <form method="POST" action="{{ route('travels.update', ['travel' => $travel->id]) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $travel->title) }}">
            <div class="invalid-feedback">
                @error('title') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Data</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb', $travel->travel_date) }}">
            <div class="invalid-feedback">
                @error('travel_date') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Ricordi Memorabili</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $travel->memories_to_remind) }}">
            <div class="invalid-feedback">
                @error('memories_to_remind') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Luogo</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series', $travel->place) }}">
            <div class="invalid-feedback">
                @error('place') {{ $message }} @enderror
            </div>
        </div>



        <button class="btn btn-primary">Update</button>
    </form>
@endsection