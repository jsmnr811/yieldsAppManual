<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_information_id',
        'improvements',
        'topics_to_expand',
        'additional_comments'
    ];

    public $timestamps = false;
}
