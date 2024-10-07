<?php

use App\Models\Post;
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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('name') ; 
            $table->string('email') ; 
            $table->string('phone') ; 
            $table->longText('content') ; 
            $table->timestamps();

            $table->foreignIdFor(Post::class)->nullable()->constrained()->cascadeOnDelete() ; 
            $table->foreignIdFor(Work::class)->nullable()->constrained()->cascadeOnDelete() ; 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
