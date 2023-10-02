<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    public $timestamps = false;
    use HasFactory;
    public $fillable = [
        'id',
        'value',
        'topic_id',
        'user_id'
    ];
}
