<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gossip;
use Illuminate\Http\Request;


class GossipController extends Controller
{
    public function index()
    {
        $gossips = Gossip::all();
        $trends = Gossip::orderBy('views', 'desc')
                        ->take(5)
                        ->get();

        return view('gossip.index', compact('gossips', 'trends'));
    }

    public function create()
    {
        return view('gossip.create');
    }

    public function store()
    {
        $data = \request()->validate([
            'content' => 'string'
        ]);
        if($data['content']){
            Gossip::create($data);
        }
        return redirect()->route('gossip.index');
    }

    public function show(Gossip $post)
    {
        $comments = [
            [
                'user_id' => '1',
                'content' => 'Awesome! Great *_*'
            ],
            [
                'user_id' => '3',
                'content' => 'so exited!'
            ],
            [
                'user_id' => '5',
                'content' => 'strong words mate'
            ]
        ];
        $trends = Gossip::orderBy('views', 'desc')
            ->take(5)
            ->get();

        return view('gossip.show', compact('post', 'comments', 'trends'));
    }

    public function destroy(Gossip $post)
    {
        $post->delete();
        return redirect()->route('gossip.index');
    }

}
