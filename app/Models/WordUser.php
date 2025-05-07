<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;


class WordUser extends Model
{
    protected $table = 'word_users';

    protected $fillable = [
        'user_id',
        'word_id',
        'answered',
        'is_correct',
        'answered_at',
    ];
    
}
