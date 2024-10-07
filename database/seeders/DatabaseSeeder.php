<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Reply;
use App\Models\Tag;
use App\Models\Task;
use App\Models\User;
use App\Models\Work;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'n.t519',
            'email' => 'nicktep519@gmail.com',
            'phone' => '+229 65372714',
            'adress' => 'Abomey-Calavi, Eg Ste J-B'
        ]) ;
        
        Contact::factory(2)->create() ; 

        $tags = Tag::factory(10)->create() ; 

        $tasks = Task::factory(10)->create() ; 

        $posts =   Post::factory(20)->create()->each(function($post) use ($tags) {

            $post->tags()->attach($tags->random(2)) ; 

        }) ; 

        $works = Work::factory(15)->create()->each(function ($work) use ($tags, $tasks) {

            $work->tags()->attach($tags->random(2)) ;  
            $work->tasks()->attach($tasks->random(2)) ; 

        } ) ; 

        $comments = Comment::factory(100)->create()->each(function($comment) use ($posts, $works) {

            $comment->post()->associate($posts->random()) ; 
            $comment->work()->associate($works->random()) ; 
            $comment->save()  ; 


        }) ;

        Reply::factory(50)->create()->each(function($reply) use ($comments) {
            $reply->comment()->associate($comments->random()) ; 
            $reply->save() ; 
        }) ; 




    }
}