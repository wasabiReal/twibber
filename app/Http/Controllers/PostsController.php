<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts');
    }

    public function create()
    {
        $postsArr = [
            [
                'content' => 'New social network Twibber grows up rapidly!',
                'is_published' => '1',
                'user_id' => '1',
            ],
            [
                'content' => 'Twibber BOOM!',
                'is_published' => '1',
                'user_id' => '1',
            ],
        ];

        foreach ($postsArr as $post){
            Post::create($post);
        }

    }

    public function update()
    {
        $post = Post::find(3);
        dd($post);
    }
}
