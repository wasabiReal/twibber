<?php

namespace App\Http\Controllers\Gossip;

use App\Http\Controllers\Controller;
use App\Models\Gossip;


class DestroyController extends Controller
{
    public function __invoke(Gossip $post)
    {
        $post->tags()->detach();
        $post->delete();
        return redirect()->route('gossip.index');
    }

}
