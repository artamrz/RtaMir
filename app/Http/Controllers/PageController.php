<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;


class PageController extends Controller
{
    public function getIndex() {
        $posts = Post::limit(2)->get();
        return view('welcome', compact('posts'));
    }
    public function getRlog() {
        $posts = Post::orderBy('created_at', 'desc')->limit(2)->get();
        return view('pages.rlog')->withPosts($posts);
    }

    public function getAbout() {
        return view('pages.about');
    }

    public function getContact() {
         return view('pages.contact');
        
    }
}    

