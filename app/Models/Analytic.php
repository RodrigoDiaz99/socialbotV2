<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analytic extends Model
{
    use HasFactory;

    protected $fillable = [
        'social_media_id',
        'followers',
        'increase',
        'total_post',
    ];

    public function SocialMedia(){
        return $this->belongsTo(SocialMedia::class);
    }
}
