<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class GroupAccessLevel extends Model
{
    public function groupUsers(): HasMany
    {
        return $this->hasMany(GroupUser::class); 
    }
    
}

