@extends('layouts.main')
@section('content')

    <figure class="text-center">
        <blockquote class="blockquote">
            <p>Gossip is news running ahead of itself in a red satin dress.</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Someone famous as <cite title="Source Title">Liz Smith</cite>
        </figcaption>
    </figure>

    <div class="create-gossip">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-eye" id="eye"></i></span>
            <input type="text" class="form-control" placeholder="Tell some secrets..." autocomplete="off" aria-describedby="basic-addon1" id="gossip-input">
            <button type="submit" class="btn btn-primary">Spread</button>
        </div>
    </div>

    @foreach($feeds as $post)
    <div class="gossip">
        <div class="gossip-author">
            <img src="{{ asset('images/sei_admiral.jpg') }}" alt="Avatar">
            <p> {{ $post->user_id }} </p>
            <div class="gossip-created">
                {{$post->created_at->format('d M H:i')}}
            </div>
        </div>
        <div class="gossip-content">
            <p>{{$post->content}}</p>
        </div>
        <div class="gossip-panel">
            <div class="gossip-likes">
                <i class="fa-regular fa-heart"></i> @if(!$post->likes) 0 @else {{$post->likes}} @endif
            </div>
            <div class="gossip-comments">
                <i class="fa-solid fa-comments"></i> @if(!$post->comments) 0 @else {{$post->comments}} @endif
            </div>
            <div class="gossip-views">
                <i class="fa-solid fa-eye"></i>
                @if(!$post->views) 0 @else {{$post->views}} @endif
            </div>
        </div>
    </div>
    @endforeach
@endsection
