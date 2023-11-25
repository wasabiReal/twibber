@extends('layouts.main')
@section('content')

    <div class="back-button">
        <a href="{{ url()->previous() }}" ><i class="fa fa-arrow-left fa-2x"></i></a>
    </div>

    <div class="gossip">
        <div class="gossip-author">
            <img src="{{ asset('images/sei_admiral.jpg') }}" alt="Avatar">
            <p> {{ $post->user_id }} </p>
            <div class="gossip-created">
                {{$post->created_at->format('d M H:i')}}
            </div>
        </div>
        <div class="gossip-content">
            {!! $post->content !!}
        </div>
        <div class="gossip-panel">
            <div class="gossip-likes">
                <i class="fa-regular fa-heart"></i> @if(!$post->likes) 0 @else {{$post->likes}} @endif
            </div>
            <div class="gossip-views">
                <i class="fa-solid fa-eye"></i>
                @if(!$post->views) 0 @else {{$post->views}} @endif
            </div>
        </div>
        <div class="gossip-actions">
            <form action="{{ route('gossip.delete', $post) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger btn-sm" value="Delete">
            </form>
        </div>
    </div>
    <div class="gossip-all-comments">
        @if($comments)
            @foreach($comments as $comment)
                <p>{{ $comment['user_id']}}</p>
                <p>{{ $comment['content']}}</p>
            @endforeach
            <div class="post-comment">
                <textarea class="form-control" placeholder="Great!" name="post-comment"></textarea>
                <button type="submit" class="btn btn-primary float-left">Post</button>
            </div>
        @else
            <p>No comments </p>
        @endif
    </div>

@endsection
