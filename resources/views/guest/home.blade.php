@extends('layout.app')

@section('title', 'Home')

@section('main-section')

<div class="container">
    <div class="row">
        @foreach ($movies as $movie)
        <div class="card col-3 m-3">
            <div class="card-body d-flex flex-column">
                <h4 class="card-title text-primary">{{ $movie->title }}</h4>
                <h6 class="card-title text-secondary">{{ $movie->original_title }}</h6>
                <div class="ivy_down_wrap mt-auto">
                    <p class="card-text text-capitalize">{{ $movie->nationality }} -- {{ $movie->date }}</p>
                    <a href="#" class="btn btn-primary">Enjoy it now!</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection