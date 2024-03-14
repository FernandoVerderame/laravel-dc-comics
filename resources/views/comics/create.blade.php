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

</section>
@endsection