@extends('layouts.base')

@section('pageTitle')
{{$comic->title}}
@endsection
@section('content')

<h1>{{$comic->title}}</h1>
<img src="{{$comic->thumb}}">
<div><strong>Series</strong>{{$comic->series}}</div>
<div><strong>Type</strong>{{$comic->type}}</div>
<div><strong>Sale Date</strong>{{$comic->sale_date}}</div>
<div><strong>Description</strong>{{$comic->description}}</div>
<a class="btn btn-primary mt_5" href="{{route('comic.index')}}" role="button">Torna al menù</a>
@endsection

