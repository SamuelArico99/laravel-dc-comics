@extends('layouts.app')

@section('content')
                <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="card-title">FUMETTI</h1>
                        <a href="{{ route('comics.create') }}" class="btn btn-success my-3">
                            Crea un prodotto
                        </a>
                    </div>
                </div>
                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="col-3 mb-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h3 class="card-title">
                                        {{ $comic->title }}
                                    </h3>
                                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">
                                        Vedi Descrizione
                                    </a>
                                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">
                                        Aggiorna
                                    </a>
                                    <form action="{{ route('comics.destroy' , $comic->id) }}" method="POST">
                                        @csrf

                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">
                                            Elimina
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
@endsection