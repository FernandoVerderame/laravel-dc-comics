@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
    <section id="comics">
        <div class="container">
            <h2>Current Series</h2>
            <div class="card-container">

                @foreach($comics as $comic)
                <div class="comic-card">
                    <a href="{{ route('comics.show', $comic) }}">
                        <div class="thumb">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
                        <h3>{{ $comic['title'] }}</h3>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
        <div class="lead-more">
            <div class="button">
                <a href="#">Lead More</a>
            </div>
        </div>
</section>
@endsection