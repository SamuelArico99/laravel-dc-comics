@extends('layouts.app')

@section('content')
                <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="card-title">FUMETTI</h1>
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
                                    <a href="#" class="btn btn-primary">
                                        Vedi Descrizione
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
@endsection