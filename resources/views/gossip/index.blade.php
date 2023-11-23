@extends('layouts.main')
@section('content')

    <div class="container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi
            aspernatur beatae consectetur dolor doloremque eius expedita, ipsum, modi
            mollitia odio odit officiis possimus quidem reiciendis sequi vitae! At aut
            cum dignissimos doloribus ducimus ex fuga, hic illo ipsam ipsum magni natus
            perspiciatis quis quisquam voluptatum. Maiores neque qui quod?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consectetur
            consequatur cumque dolore est, impedit natus nihil perferendis ratione vitae.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, adipisci assumenda
            beatae cum est et laborum libero, magnam molestiae nam necessitatibus nihil, nisi
            nulla numquam placeat quia quisquam quod sunt suscipit veniam. Accusantium aliquam
            asperiores at autem deleniti dignissimos dolore eius id illo impedit ipsa laborum
            modi nam, pariatur perferendis rem, sunt suscipit vel voluptate voluptatum. Illum
            laboriosam magnam veniam!</p>
    </div>

    @foreach($feeds as $post)
    <div class="twib">
            <h4>{{$post->content}}</h4>
            <p>Likes: {{$post->likes}}</p>
            <p>Comments: {{$post->comments}}</p>
            <p>Created: {{$post->created_at}}</p>
    </div>
    @endforeach

    <button id="alerta">Alert Test</button>

@endsection
