<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Feed;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        return view('post');
    }

    public function create()
    {
        echo 'POST_CREATE';
    }

}
