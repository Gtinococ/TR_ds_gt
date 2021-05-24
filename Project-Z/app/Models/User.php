<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Models\Achievement;
use App\Models\UserAchievement;

use DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;



    public $timestamps=true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';


    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'img'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function achievements()
    {
        return $this->belongsToMany(Achievement::class,'user_achievement');
    }

    public function myAchievements($id){

        return DB::select('SELECT * FROM achievements INNER JOIN user_achievement ON user_achievement.achievement_id = achievements.id WHERE user_achievement.user_id = ?', [$id]);
            
    
    }

}
