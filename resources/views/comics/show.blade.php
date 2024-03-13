@extends('layouts.main')

@section('title', 'Comic Detail')

@section('cdns')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')

<section id="thumb-sec">

    <div class="container">

        <div class="comic-image">

            <div class="thumb">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <div class="type">{{ $comic->type }}</div>
                <div class="view">View Gallery</div>
            </div>
            
        </div>
    </div>

</section>

<section id="comic-detail" class="container">

    <div class="wrapper-top">

        <div class="description">
            <h1>{{ $comic->title }}</h1>
            <div class="available-bar">
                <div class="left-bar">
                    <div class="price">U.S. Price: <span>{{ $comic->price }}</span></div>
                    <div class="available">AVAILABLE</div>
                </div>
                <div class="check">Check Availability <i class="fa-solid fa-sort-down"></i></div>
            </div>
            <p>{{ $comic->description }}</p>
        </div>
        <div class="advertisement">
            <div class="adv">ADVERTISEMENT</div>
            <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="Advertisement">
        </div>

    </div>

</section>

<section id="comic-info">
    <div class="container">

        
        <div class="wrapper-bottom">
            
            <div class="talent-info">
                <h3>Talent</h3>

                <div class="artists">
                    <div class="art-writ">Art by:</div>
                    <div>{{ $comic->artists }}</div>
                </div>

                <div class="artists">
                    <div class="art-writ writers">Written by:</div>
                    <div>{{ $comic->writers }}</div>
                </div>

            </div>
            
            <div class="specs-info">
                <h3>Specs</h3>

                <div class="spec">Series: <span class="series">{{$comic->series}}</span></div>
                <div class="spec">U.S. Price: <span class="price">{{$comic->price}}</span></div>
                <div class="spec">On Sale Date: <span class="sale-date">{{ $comic->sale_date/*->format('Mmm-dd-YYYY')*/ }}</span></div>

            </div>
            
        </div>
        
    </div>
</section>

@endsection