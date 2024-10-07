<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $guarded =  [] ; 

    protected $casts = [
        'created_at' => 'datetime'
    ] ; 

    public function post() : BelongsTo {

        return $this->belongsTo(Post::class) ; 
    }

    public function work() : BelongsTo {

        return $this->belongsTo(Work::class) ; 
    }

    public function replies() {

        return $this->hasMany(Reply::class) ; 
    }

}
