<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Post;

class HomeController extends Controller
{
    public function index() {

        $posts = Post::query()->with('tags')->latest()->take(8)->get() ; 
        $last_post = Post::query()->latest()->first() ; 

        if ($last_post == NULL) {
            $last_post = new Post() ; 
        }

        return view('index', [
            'posts' => $posts,
            'last_post' => $last_post
        ]) ; 
    }


    public function contact(ContactRequest $request ) {

        $contact = Contact::create($request->validated()) ; 

        return redirect()->back()->with('success', 'Message envoyé') ; 

    }
}