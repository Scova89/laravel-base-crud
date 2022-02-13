@extends('layouts.base')

@section('pageContent')
    <h1>Modifica fumetto: {{$comic->title}}</h1>

    <form action="{{route("comics.update", $comic->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-group">
          <label for="title">Inserisci Titolo</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
        </div>

        <div class="form-group">
            <label for="series">Inserisci Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}>
        </div>

        <div class="form-group">
            <label for="sale_date">Inserisci Data</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}>
        </div>

        <div class="form-group">
            <label for="type">Tipo di fumetto</label>
            <select class="form-control" id='type'
            name="type">
                <option value="comic-book" {{$comic->type == "comic-book" ? "selected":""}}>Comic book</option>
                <option value="graphic-novel" {{$comic->type == "graphic-novel" ? "selected":""}}>Graphic novel</option>
            </select>
        </div>

        <div class="form-group">
            <label for="price">Inserisci Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" value="{{$comic->price}}>
        </div>

        <div class="form-group">
            <label for="description">Inserisci Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="5">{{$comic->description}}</textarea>
        </div>

        <div class="form-group">
            <label for="thumb">Inserisci Immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}>
        </div>

        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>

    
    
    
@endsection