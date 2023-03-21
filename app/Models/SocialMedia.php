<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialMedia extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'twitter_screen_name',
        'twitter_oauth_token',
        'twitter_oauth_token_secret'
    ];

    public function Users(){
        return $this->belongsTo(User::class);
    }

    public function Analytic(){
        return $this->hasMany(Analytic::class);
    }

    public function Post(){
        return $this->belongsToMany(Post::class, 'posteable');
    }
}
