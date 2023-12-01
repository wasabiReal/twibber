<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gossip;
use App\Models\Tag;
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
            'content' => 'string',
            'tags' => 'nullable|string'
        ]);

        $post = Gossip::create([
            'content' => $data['content'],
            'user_id' => 1
        ]);

        if ($data['tags']) {
            $tags = explode(' ', $data['tags']);
            foreach ($tags as $tag) {
                // Перевірте, чи тег існує в таблиці tags
                $tagModel = Tag::firstOrCreate(['title' => trim($tag, '#')]);

                // Зв'яжіть пост і тег через проміжну таблицю posts_tags
                $post->tags()->attach($tagModel->id);
            }
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

    public function destroy(Gossip $post)
    {
        $post->tags()->detach();
        $post->delete();
        return redirect()->route('gossip.index');
    }

}
