<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trivia extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'information';
    protected $dates = ['updated_at'];
    protected $fillable = [
        'title',
        'content',
        'image',
        'status',
        'user_id',
    ];

    
}
