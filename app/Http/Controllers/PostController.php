<?php

namespace App\Http\Controllers;

use Parsedown;
use App\Models\Post;
use App\Models\Task;
use Illuminate\Support\Str;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Tag;
use League\CommonMark\CommonMarkConverter;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth') ; 
    }

   
    public function index()
    {
        $posts = Post::query()->orderBy('created_at', 'desc')->with('tags')->paginate(10) ; 

        return view('dashboard.post.index', [
            'posts' => $posts
        ] ) ; 
    }

   
    public function create()
    {

        $post = new Post()  ; 

        $post->fill([
            'title' => 'Titre de l\'article', 
            'problematic' => 'Problematique',
            'content' => 'Contenu de l\'article',
        ]) ; 

        return view('post.form', [
            'post' => $post
        ]) ; 
    }

    
    public function store(StorePostRequest $request)
    {
        $post = new Post() ; 

        $post->title = $request->validated('title') ; 
        $post->slug = Str::slug($request->validated('title')) ; 
        $post->problematic = $request->validated('problematic') ; 
        $post->content = $request->validated('content') ; 

        $post->save() ; 

        $tags = explode(',', $request->validated('tags')) ; 

        foreach ($tags as $inputTag) {
            
            $inputTag = trim($inputTag) ; 

            $tag = Tag::firstOrCreate([
                'slug' => $inputTag
            ], [
                'name' => $inputTag,
                'slug' => Str::slug($inputTag)
            ]) ; 

            $post->tags()->attach($tag->id) ; 

        }

        return redirect('posts.show', $post)->with('success', 'Nouvel article ajouté') ; 
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

        //dd($content) ; 

        return view('post.show', [
            'post' => $post,
            'content' => $content
        ]) ; 
    }

   
    public function edit(Post $post)
    {
        $tagss = [] ; 

        foreach ($post->tags as $tag) {
            $tagss[] = $tag->name ; 
        }

        $tags = implode(',', $tagss) ; 


        return view('post.form', [
            'post' => $post,
            'tags' => $tags
        ]) ; 
    }

   
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->title = $request->validated('title') ; 
        $post->slug = Str::slug($request->validated('title')) ; 
        $post->problematic = $request->validated('problematic') ; 
        $post->content = $request->validated('content') ; 

        $post->save() ; 

        $tags = explode(',', $request->validated('tags')) ; 

        $tag_ids = [] ; 

        foreach ($tags as $inputTag) {
            
            $inputTag = trim($inputTag) ; 

            $tag = Tag::firstOrCreate([
                'slug' => $inputTag
            ], [
                'name' => $inputTag,
                'slug' => Str::slug($inputTag)
            ]) ; 

            $tag_ids[] = $tag->id ; 

        }

        $post->tags()->sync($tag_ids) ; 

        return to_route('posts.show', $post )->with('success', 'Article mis à jour') ; 
    }

    public function destroy(Post $post)
    {
        $post->delete() ; 

        return to_route('posts.index')->with('success', 'Article supprimé') ; 
    }
}
