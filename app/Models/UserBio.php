<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Database\Factories\UserBioFactory;

class UserBio extends Model
{
    use HasFactory; 
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class); 
    }
}
