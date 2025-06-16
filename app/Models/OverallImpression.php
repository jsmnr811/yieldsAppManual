<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OverallImpression extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_information_id',
        'overall_impression',
        'expectation_met',
    ];

    public $timestamps = false;
}
