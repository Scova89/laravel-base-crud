@extends('layouts.base')

@section('pageContent')
    <h1>Comics on sale</h1>
    <a href="{{route('comics.create')}}" ><button type="button" class="btn btn-success" >Aggiungi Fumetto</button></a>
    <table class="table mt-5"> 
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
                <td>
                  <a href="{{route("comics.show", $comic->id)}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
                  <a href="{{route("comics.edit", $comic->id)}}"><button type="button" class="btn btn-warning">Modifica</button></a>
                  <form action="{{route("comics.destroy", $comic->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="button" class="btn btn-danger">Elimina</button>
                  </form>
                  
                </td>
            </tr>
          @endforeach
          
        </tbody>
      </table>
    
@endsection