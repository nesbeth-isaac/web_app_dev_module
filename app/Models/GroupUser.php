<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class GroupUser extends Pivot
{
    public function groupAccessLevel(): BelongsTo
    {
        return $this->belongsTo(GroupAccessLevel::class); 
    }
    
}
