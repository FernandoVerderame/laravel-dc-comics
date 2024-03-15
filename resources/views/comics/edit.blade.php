@extends('layouts.main')

@section('title', 'Edit Comic')

@section('main-content')

<section id="edit-comic" class="container">

    <div class="card-title">
        <h1>Edit Comic</h1>
        <div class="button">
            <a class="button" href="{{ route('comics.show', $comic->id) }}">Back to Comic Detail</a>
        </div>
    </div>
    
    <div class="card-body">
    
        @if($errors->any())
            <div class="errors-alert">
                <h4>Some fields are invalid!</h4>
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf

            {{-- PUT method --}}
            @method('PUT')
    
            <div class="input-section">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="Ex.: Suicide Squad Vol.3 Rouges" value="{{ old('title', $comic->title) }}">
            </div>
    
            <div class="input-section">
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="3">{{ old('description', $comic->description) }}</textarea>
            </div>
    
            <div class="input-section">
                <label for="thumb">Thumbnail</label>
                <input type="url" name="thumb" id="thumb" placeholder="Ex.: https:://..." value="{{ old('thumb', $comic->thumb) }}">
            </div>
    
            <div class="input-section">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" placeholder="Ex.: $16.99" value="{{ old('price', $comic->price) }}">
            </div>
    
            <div class="input-section">
                <label for="series">Series</label>
                <input type="text" name="series" id="series" placeholder="Ex.: BATMAN"
                value="{{ old('series', $comic->series) }}">
            </div>
    
            <div class="input-section">
                <label for="sale_date">Sale Date</label>
                <input type="text" name="sale_date" id="sale_date" placeholder="Ex.: 2018-10-03" value="{{ old('sale_date', $comic->sale_date) }}">
            </div>
    
            <div class="input-section">
                <label for="type">Type</label>
                <input type="text" name="type" id="type" placeholder="Ex.: Comic Book" value="{{ old('type', $comic->type) }}">
            </div>
    
            <div class="input-section">
                <label for="artists">Artists</label>
                <input type="text" name="artists" id="artists" placeholder="Ex.: José Luis García-López, Clay Mann, Rafael Albuquerque..." value="{{ old('artists', $comic->artists) }}">
            </div>
    
            <div class="input-section">
                <label for="writers">Writers</label>
                <input type="text" name="writers" id="writers" placeholder="Ex.: Brad Meltzer, Tom King, Scott Snyder..." value="{{ old('writers', $comic->writers) }}">
            </div>
    
            <div class="form-buttons">
                <button class="btn-reset" type="reset">Reset</button>
                <button class="btn-save" type="submit">Save</button>
            </div>
    
        </form>
    </div>
    
</section>    
@endsection
