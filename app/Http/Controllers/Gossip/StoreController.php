<?php

namespace App\Http\Controllers\Gossip;

use App\Http\Controllers\Controller;
use App\Models\Gossip;
use App\Models\Tag;


class StoreController extends Controller
{
    public function __invoke()
    {
        $data = \request()->validate([
            'content' => 'required|string',
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

}
