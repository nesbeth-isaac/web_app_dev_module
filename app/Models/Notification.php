<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

use Database\Factories\NotificationFactory; 
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notification extends Model
{
     use HasFactory; 
    public function likesOrComments(): MorphTo
    {
        return $this->morphTo('like_or_comments');
    }
}
