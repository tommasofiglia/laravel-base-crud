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
        $posts = blogpost::latest()->get();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Request può avere una validazione
        $request->validate([
          'title' =>'required|unique:posts|max:255',
          'body' =>'required',
        ]);


        $post = blogpost::orderBy('id', 'desc')->first();
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
    public function edit(blogpost $post)
    {

      return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blogpost $post)
    {
        $posts = $request->all();
        $post->update($posts);

        return redirect()->route('posts.index', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(blogpost $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
