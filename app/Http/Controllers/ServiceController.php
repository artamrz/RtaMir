<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getContent() {
        return view('services.content');
    }
    public function getSeo() {
        return view('services.seo');
    }

    public function getWebApp() {
        return view('services.webApp');
    }
        
}
