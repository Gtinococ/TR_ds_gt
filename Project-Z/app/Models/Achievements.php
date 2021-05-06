<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Achievements extends Model
{
    use HasFactory;

    protected $table = 'achievements';

    protected $fillable = [
        'id',
        'achiev_id',
        'name',
        'description',
        'img'
    ];

    /* public function users(){

        return $this->belongsTo(User::class); 

    } */
}
