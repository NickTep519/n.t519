<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory ;

    protected $guarded = [] ; 

    protected $casts = [
        'created_at' => 'datetime'
    ] ; 

    public function slug() : string {

        return Str::slug($this->title) ; 
    }
    
    public function comments() : HasMany {

        return $this->hasMany(Comment::class) ; 
    }

    public function tags() : BelongsToMany {

        return $this->belongsToMany(Tag::class) ;  
    }


    
}
