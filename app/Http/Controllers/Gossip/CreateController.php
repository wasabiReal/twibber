<?php

namespace App\Http\Controllers\Gossip;

use App\Http\Controllers\Controller;


class CreateController extends Controller
{
    public function __invoke()
    {
        return view('gossip.create');
    }

}
