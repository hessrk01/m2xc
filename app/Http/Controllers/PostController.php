<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function changePublish(Request $request)
    {
        $post = Post::find($request->data['id']);
        if($post) {
            $post->publish = $request->data['value'];
            $post->save();
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post;
        return view('admin.post.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'slug' => str_slug(request('title')),
            'author' => request('author'),
        ]); 

        flash('Post recorded')->success();
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // dd($post);
        return view('admin.post.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {


        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = str_slug(request('title'));
        $post->author = request('author');

        $post->save();

        flash('Post updated')->success();
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Post::find($id)->delete();
        flash('Post deleted')->success();
        // return redirect()->route('post.index');

    }
}
