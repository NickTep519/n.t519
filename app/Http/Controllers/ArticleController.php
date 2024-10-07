<?php

namespace App\Http\Controllers;

use Parsedown;
use App\Models\Post;


class ArticleController extends Controller
{
    public function index()
    {
        $posts = Post::query()->orderBy('created_at', 'desc')->with('tags')->paginate(5) ; 

        return view('post.index', [
            'posts' => $posts
        ] ) ; 
    }

    
    
    public function show(Post $post)
    {

        $post = Post::with( [
                        'comments' => function($query) {

                            $query->orderBy('created_at', 'desc')->with('replies') ; 
                            
                        }
                    ] )->findOrFail($post->id) ; 

        $parsedown = new Parsedown();
        $content = $parsedown->text($post->content);
            
        return view('post.show', [
            'post' => $post,
            'content' => $content
        ]) ; 
    }
}
