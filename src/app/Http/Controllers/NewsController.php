<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){

        $posts = [1, 2, 3, 4];
        $foo = 'новость';
        return view('news.index', compact('posts', 'foo'));
    }

    public function show()
    {
        return view('news.show');
    }
}
