<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
        $posts = Post::all();

        return view('homepage', compact('posts'));
    }

    public function dashboard(){
        return view('dashboard');
    }
}
