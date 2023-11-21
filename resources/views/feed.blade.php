@extends('layouts.main')
@section('content')

    <div class="container">
        <button class="alert">Submit</button>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dolorum magni quas?</p>
    </div>

    @foreach($posts as $post)
        {{$post->content}}
    @endforeach

@endsection
