@extends('app')

@section('title', 'Taitter')

@section('content')
    @include('nav')
    <div class="container">
        @foreach ($articles as $article)
            @include('articles.card')
        @endforeach
    </div>
@endsection