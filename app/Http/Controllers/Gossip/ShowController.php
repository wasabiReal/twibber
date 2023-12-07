<?php

namespace App\Http\Controllers\Gossip;

use App\Http\Controllers\Controller;
use App\Models\Gossip;


class ShowController extends Controller
{
    public function __invoke(Gossip $post)
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
            ],
            [
                'user_id' => '2',
                'content' => 'vitalik nice good ;)'
            ]
        ];
        $trends = Gossip::orderBy('views', 'desc')
            ->take(5)
            ->get();

        return view('gossip.show', compact('post', 'comments', 'trends'));
    }

}
