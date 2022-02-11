@extends('layouts.base')

@section('pageContent')
    <h1>Comics on sale</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Copertina</th>
            <th scope="col">Titolo</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($comics as $comic)
            <tr>
                <td>{{$comic->id}}</td>
                <td><img src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->price}}</td>
                <td><a href="{{route("comics.show", $comic->id)}}><button type="button" class="btn btn-primary">Visualizza</button></a></td>
            </tr>
          @endforeach
          
        </tbody>
      </table>
    
@endsection