@extends('layouts.app')

@section('content')
                <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="card-title">{{ $comic->title }}</h1>
                    </div>
                </div>
                <div class="row">
                        <div class="col m-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <p>
                                        {{ $comic->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
@endsection