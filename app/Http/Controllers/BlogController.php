<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function getIndex() {

        $posts = Post::paginate(5);
        return view('rlogs.index')->withPosts($posts);
    }

    public function getSingle($slug) {

        $post = Post::where('slug', $slug)->first();
        return view('rlogs.single', compact('post'));
    }
}
