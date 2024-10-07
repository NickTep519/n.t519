<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    public function comment(CommentRequest $request, Post $post) {

        $comment = Comment::create($request->validated()) ; 

        $comment->post()->associate($post) ; 
        $comment->save() ; 

        return redirect()->back()->with('success', 'Commentaire Enregistré') ; 
    }
}
