<?php

namespace App\Http\Controllers;

use App\blogpost;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = blogpost::all();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.newpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $post = new blogpost;
        $post->title = request('title');
        $post->body = request('body');
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function show(blogpost $post)
    {
        //

        return view('posts.showpost', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function edit(blogpost $blogpost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blogpost $blogpost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(blogpost $blogpost)
    {
        //
    }
}
