<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'images',
    ];

    public function SocialMedia(){
        return $this->belongsToMany(Social::class, 'posteable');
    }
}
