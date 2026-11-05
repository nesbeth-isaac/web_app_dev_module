<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Database\Factories\LikeFactory; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphOne;




class Like extends Model
{
            use HasFactory; 

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class); 
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class); 
    }

    public function likesOrComments(): MorphOne
    {
        return $this->morphOne(Notification::class, 'like_or_comments'); 
    }
}
