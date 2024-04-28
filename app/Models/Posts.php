<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Posts extends Model
{
    use HasFactory;

    public function getPostingDateAttribute($value)
    {
        return Carbon::parse($value);
    }
}
