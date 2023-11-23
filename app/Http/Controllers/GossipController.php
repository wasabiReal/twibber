<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Feed;
use Illuminate\Http\Request;


class GossipController extends Controller
{
    public function index()
    {
        $feeds = Feed::all();

        return view('gossip.index', compact('feeds'));
    }

    public function create()
    {
        return view('gossip.create');
    }

    public function store()
    {
        dd(123);
    }

}
