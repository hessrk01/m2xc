<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Drive to portfolio page
     */
    public function portfolio() {
        return view('welcome.portfolio');
    }

    public function index() {

        $posts = Post::where('publish', true)
            ->orderBy('publish_date')
            ->take(3)
            ->get();

        return view('welcome', compact('posts'));
    }
}
