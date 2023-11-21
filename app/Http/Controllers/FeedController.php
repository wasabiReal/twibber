<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Feed;
use Illuminate\Http\Request;


class FeedController extends Controller
{
    public function index()
    {
        $posts = Feed::all();

        return view('feed', compact('posts'));
    }

}
