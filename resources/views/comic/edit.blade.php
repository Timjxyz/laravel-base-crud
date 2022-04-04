@extends('layouts.base')

@section('pageTitle')
    Modifica: {{$comic->title}}
@endsection

@section('content')

    <div class="container">

        <h1>Modifica: {{$comic->title}}</h1>

        <form method="POST" action="{{ route('comic.update', ['comic' => $comic->id]) }}">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label" >Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title', $comic->title)}}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label" >URL Immagine</label>
                <input required type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb', $comic->thumb)}}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{old('cooking_time', $comic->series)}}">
            </div>

            <div class="mb-3">
                <div class="form-floating">
                    <select class="form-select" id="type" name="type">
                        <option {{ (old('type', $comic->type) == 'comic book') ? 'selected' : '' }} value="comic book">comic book</option>
                        <option {{ (old('type', $comic->type) == 'graphic novel') ? 'selected' : '' }} value="graphic novel">graphic novel</option>
                    </select>
                    <label for="floatingSelect">Tipologia</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{old('price', $comic->price)}}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date', $comic->sale_date)}}">
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Descrizione" id="description" name="description">{{old('description', $comic->description)}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Modifica</button>

        </form>
        <a class="btn btn-success mt-3" href="{{route('comic.index')}}" role="button">Torna al menù</a>
    </div>




@endsection