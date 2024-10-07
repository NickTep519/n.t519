<?php

use App\Models\Post;
use App\Models\Tag;
use App\Models\Work;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name') ; 
            $table->string('slug') ; 
            $table->timestamps();
        });

        Schema::create('post_tag', function(Blueprint $table) {
            $table->id() ; 
            $table->foreignIdFor(Post::class)->nullable()->constrained()->cascadeOnDelete() ; 
            $table->foreignIdFor(Tag::class)->nullable()->constrained()->cascadeOnDelete() ; 
        }) ; 

        Schema::create('tag_work', function(Blueprint $table) {
            $table->id() ; 
            $table->foreignIdFor(Tag::class)->nullable()->constrained()->cascadeOnDelete() ; 
            $table->foreignIdFor(Work::class)->nullable()->constrained()->cascadeOnDelete() ; 
        }) ; 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('post_tag') ; 
        Schema::dropIfExists('tag_work') ; 
    }
};
