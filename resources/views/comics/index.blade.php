@extends('layouts.base')

@section('pageContent')
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Copertina</th>
            <th scope="col">Titolo</th>
            <th scope="col">Prezzo</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($comics as $comic)
            <tr>
                <td>{{$comic->id}}</td>
                <td><img src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->price}}</td>
            </tr>
          @endforeach
          
        </tbody>
      </table>
    
@endsection