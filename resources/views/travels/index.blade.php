@extends('layouts.base')


@section('contents')

<div class="row row-cols-3 p-4">
        
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Data</th>
                <th scope="col">Ricordi Memorabili</th>
                <th scope="col">Luogo</th>
            </tr>
        </thead>
        @foreach ($travels as $travel)
            <tbody>

            <tr>
                <th>{{$travel->id}}</th>
                <th>{{$travel->title}}</th>
                <td>{{$travel->travel_date}}</td>
                <td>{{$travel->memories_to_remind}}</td>
                <td>{{$travel->place}}</td>
                <td>
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{ route('travels.show', ['travel' => $travel->id]) }}">Details</a>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-warning" href="{{ route('travels.edit', ['travel' => $travel->id]) }}">Edit</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('travels.destroy', ['travel' => $travel->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>

            </tbody>
        @endforeach
      </table>
</div>
    
@endsection