@extends('layouts.main')

@section('title', 'Create Comic')

@section('main-content')
<section id="add-comic" class="container">

<div class="card-title">
    <h1>Add new Comic</h1>
    <div class="button">
        <a class="button" href="{{ route('comics.index') }}">Back to Comics</a>
    </div>
</div>

<div class="card-body">
    <form action="" method="">

        <div class="input-section">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Ex.: Suicide Squad Vol.3 Rouges">
        </div>

        <div class="input-section">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="3"></textarea>
        </div>

        <div class="input-section">
            <label for="thumb">Thumbnail</label>
            <input type="url" name="thumb" id="thumb" placeholder="Ex.: https:://...">
        </div>

        <div class="input-section">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" placeholder="Ex.: $16.99">
        </div>

        <div class="input-section">
            <label for="series">Series</label>
            <input type="text" name="series" id="series" placeholder="Ex.: BATMAN">
        </div>

    </form>
</div>

</section>
@endsection