<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Feed;
use Illuminate\Http\Request;


class NotificationsController extends Controller
{
    public function index()
    {
        return view('notifications');
    }


}
