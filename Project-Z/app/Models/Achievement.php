<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Auth;

class Achievement extends Model
{

    use HasFactory;

    protected $table = 'achievements';

    protected $fillable = [
        'id',   
        'name',
        'description',
        'dificulty',
    ];

    public function user(){


        return $this->belongsToMany(User::class);

        $user = User::find(1);

        foreach ($user->achievement as $a) {
            dd ($a->pivot->achieve_id);
        }

    }

    //todo
    public function users()
    {
        return $this->belongsToMany(User::class,'user_achievement');
    }



}
