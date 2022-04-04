@extends('layouts.base')

@section('pageTitle','Inserisci fumetto')

@section('content')
<div class="container">
    <form method="POST" action="{{route('comic.store')}}">
    
        @csrf
    
        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
        </div>
    
        <div class="mb-3">
          <label for="thumb" class="form-label">URL Immagine</label>
          <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb')}}">
        </div>
    
        <div class="mb-3">
          <label for="series" class="form-label">Serie</label>
          <input type="text" class="form-control" id="series" name="series" value="{{old('series')}}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
        </div>
    
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
        </div>
        <div class="mb-3">
            <div class="form-floating">
                <select class="form-select"  id="type" name="type">
                    <option {{(old('type') == 'comic book') ? 'selected' : ''}} value="comic book">comic book</option>
                    <option {{(old('type') == 'graphic novel') ? 'selected' : ''}} value="graphic novel">graphic novel</option>
                </select>
                <label for="floatingSelect">Tipologia</label>
            </div>
        </div>
    
        <div class="form-floating">
            <textarea class="form-control" placeholder="Descrizione" id="description" name="description">{{old('description')}}</textarea>
           
        </div>
    
        <button type="submit" class="btn btn-primary  mt-3">Submit</button>
      </form>
      <a class="btn btn-success mt-2" href="{{route('comic.index')}}" role="button">Torna al menù</a>
</div>
@endsection
