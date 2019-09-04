<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channels;

class ChannelsController extends Controller
{
    public function index()
    {
        // $channels = Channels::all();
        return view('posts.index');
    }
    
    public function create()
    {
        // $channels = Channels::all();
        return view('posts.create');
    }
}
