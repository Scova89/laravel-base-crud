@extends('layouts.base')

@section('pageContent')
    <h1>Aggiungi nuovo fumetto</h1>

    <form action="{{route("comics.store")}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Inserisci Titolo</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="series">Inserisci Serie</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>

        <div class="form-group">
            <label for="sale_date">Inserisci Data</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date">
        </div>

        <div class="form-group">
            <label for="type">Tipo di fumetto</label>
            <select class="form-control" id='type'
            name="type">
                <option value="comic-book">Comic book</option>
                <option value="graphic-novel">Graphic novel</option>
            </select>
        </div>

        <div class="form-group">
            <label for="price">Inserisci Prezzo</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>

        <div class="form-group">
            <label for="description">Inserisci Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="5"></textarea>
        </div>

        <div class="form-group">
            <label for="thumb">Inserisci Immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>

        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>

    
    
    
@endsection