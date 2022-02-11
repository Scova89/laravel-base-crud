@extends('layouts.base')

@section('pageContent')
    <h1>{{$comic->title}}</h1>
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    <p>{{$comic->description}}</p>
    
@endsection