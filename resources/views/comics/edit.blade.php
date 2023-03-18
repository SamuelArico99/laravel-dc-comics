@extends('layouts.app')

@section('content')
                <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="card-title">MODIFICA PRODOTTO : {{ $comic->title }}</h1>
                        <form action="{{ route('comics.update', ['comic' =>$comic->id]) }}" method="POST">
                            @csrf
                            @method('PUT');
                            <div class="mb-3">
                                <label for="title" class="form-label">Titolo</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci un titolo" value="{{ $comic->title }}">
                              </div>
                              <div class="mb-3">
                                <label for="description" class="form-label">Inserisci descrizione</label>
                                <textarea class="form-control" name="description" id="description" rows="3" >{{ $comic->description }}</textarea>
                              </div>
                              <div class="mb-3">
                                <label for="thumb" class="form-label">Link immagine</label>
                                <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Inserisci link immagine" value="{{ $comic->thumb }}">
                              </div>
                              <div class="mb-3">
                                <label for="price" class="form-label">Link immagine</label>
                                <input type="number" class="form-control" name="price" id="price" placeholder="Inserisci prezzo" value="{{ $comic->price }}">
                              </div>
                              <div class="mb-3">
                                <label for="series" class="form-label">Serie</label>
                                <input type="text" class="form-control" name="series" id="series" placeholder="Inserisci serie"value="{{ $comic->series }}">
                              </div>
                              <div class="mb-3">
                                <label for="sale_date" class="form-label">Data uscita</label>
                                <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="Inserisci data di uscita"value="{{ $comic->sale_date }}">
                              </div>
                              <div class="mb-3">
                                <label for="type" class="form-label">Tipo</label>
                                <input type="text" class="form-control" name="type" id="type" placeholder="Inserisci tipo" value="{{ $comic->type }}">
                              </div>
                              <button type="submit" class="btn btn-success">
                                Aggiorna
                              </button>
                        </form>
                    </div>
                </div>
            </div>
@endsection