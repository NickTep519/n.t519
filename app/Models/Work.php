<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Work extends Model
{
    use HasFactory;

    protected $guarded = [] ; 
    
    protected $casts = [
        'created_at' => 'datetime'
    ] ; 

    public function tasks() : BelongsToMany {

        return $this->belongsToMany(Task::class) ;  
    }

    public function tags() : BelongsToMany {

        return $this->belongsToMany(Tag::class) ; 
    }

    public function comments() : HasMany {

        return $this->hasMany(Comment::class) ; 
    }
}
