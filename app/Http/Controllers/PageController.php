<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Mail;

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
    public function postContact(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'subject' => 'required|min:3|max:255',
            'message' => 'required|min:10|max:1000'
        ]);
        $mail = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );
        Mail::send('emails.contact', $mail, function($message) use ($mail) {
            $message->from($mail['email']);
            $message->to('info@rtamir.com');
            $message->subject($mail['subject']);
        });
        Session::flash('success', 'We have received your email and will get back to you shortly.');
        return redirect('/');

    }
}    

