<?php

use App\Models\Task;
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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name') ; 
            $table->string('slug') ; 
            $table->timestamps();
        });

        Schema::create('task_work', function (Blueprint $table) {
            $table->foreignIdFor(Task::class)->nullable()->constrained()->cascadeOnDelete() ; 
            $table->foreignIdFor(Work::class)->nullable()->constrained()->cascadeOnDelete() ; 
        }) ; 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('task_work') ; 
    }
};
