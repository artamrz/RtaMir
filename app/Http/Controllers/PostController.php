<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Session;
use Purifier;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(5);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request -> validate ([

            'title' => 'required|max:255',
            'slug' => 'required|unique:posts,slug|alpha_dash|min:5|max:255',
            'body' => 'required|'

        ]);

        $post = new Post;
        $post-> title = $request->title;
        $post->slug = $request->slug;
        $post->body = Purifier::clean($request->body);
        $post -> save();

        Session::flash('success', "Yoooohoooooo....! The Rlog post was successfuly saved Arta!");

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $post = Post::find($id);
       return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request -> validate ([

            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug,'.$id,
            'body' =>  'required'          
        ]);

        $post = Post::find($id);
        $post->title = $request -> input('title');
        $post->slug = $request -> input('slug');
        $post->body = Purifier::clean($request -> input('body'));
        $post->save();

        Session::flash('success',' The Rlog post was successfully updated, see you later!');
        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();

        Session::flash('success', 'The Rlog post was deleted! Lets make more posts!');
        return redirect()->route('posts.index');
    }
}