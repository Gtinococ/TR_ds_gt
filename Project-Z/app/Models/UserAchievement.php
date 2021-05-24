<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Achievement;

class UserAchievement extends Model
{
    use HasFactory;

    protected $table = 'user_achievement';

    public $timestamps = false;


    protected $fillable = [
        'user_id',
        'achievement_id',
    ];

    // public function user()
    // {
    //     return $this->hasOne(User::class);
    // }

    // public function achievement()
    // {
    //     return $this->hasOne(Achievement::class);
    // }
}
