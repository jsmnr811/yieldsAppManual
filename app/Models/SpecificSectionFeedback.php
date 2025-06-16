<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecificSectionFeedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_information_id',
        'section_title',
        'rating',
        'difficulty',
        'data_compliance',
        'comments',
    ];

    public $timestamps = false;
}
