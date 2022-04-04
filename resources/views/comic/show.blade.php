@extends('layouts.base')

@section('pageTitle')
{{$comic->title}}
@endsection
@section('content')
<div class="container">
    <h1>{{$comic->title}}</h1>
    <img src="{{$comic->thumb}}">
    <div><strong>Serie</strong>{{$comic->series}}</div>
    <div><strong>Tipologia</strong>{{$comic->type}}</div>
    <div><strong>Prezzo</strong>{{$comic->price}}€</div>
    <div><strong>Sale Date</strong>{{$comic->sale_date}}</div>
    <div><strong>Description</strong>{{$comic->description}}</div>
    <a class="btn btn-primary mt_5" href="{{route('comic.index')}}" role="button">Torna al menù</a>
</div>
@endsection

