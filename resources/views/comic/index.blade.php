@extends('layouts.base')

@section('pageTitle', 'DC-COMICS')

@section('content')
<h1>LISTA FUMETTI</h1>
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Series</th>
            <th scope="col">Type</th>
            <th scope="col">Sale Date</th>
            <th scope="col">Price</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->type}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->price}}€</td>
                    <td>
                      <a class="btn btn-primary" href="{{route('comic.show', $comic->id)}}" role="button">Visualizza</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection

