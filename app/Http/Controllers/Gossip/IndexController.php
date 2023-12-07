<?php

namespace App\Http\Controllers\Gossip;

use App\Http\Controllers\Controller;
use App\Models\Gossip;
use App\Models\Tag;


class IndexController extends Controller
{
    public function __invoke()
    {
        $gossips = Gossip::all();
        $trends = Gossip::orderBy('views', 'desc')
            ->take(5)
            ->get();


        return view('gossip.index', compact('gossips', 'trends'));
    }

}
