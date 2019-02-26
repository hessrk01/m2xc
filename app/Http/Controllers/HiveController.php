<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::where('publish', true)
                        ->orderBy('publish_date')
                        ->get();

        return view('hive.index', compact('posts'));
    } 

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        if ($post)  {
            return view('hive.show')->with('post', $post);
        }
        else {
            return redirect('/');
        }
    }
}
