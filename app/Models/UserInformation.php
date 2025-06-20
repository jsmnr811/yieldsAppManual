<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'organization',
        'position',
    ];

    public function overallImpression()
    {
        return $this->hasOne(OverallImpression::class);
    }

    public function specificSectionFeedbacks()
    {
        return $this->hasMany(SpecificSectionFeedback::class);
    }

    public function recommendation()
    {
        return $this->hasOne(Recommendation::class);
    }
}
