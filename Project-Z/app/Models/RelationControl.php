<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelationControl extends Model
{
    use HasFactory;

    protected $table = 'users_achieves';


    protected $fillable = [
        'id',
        'user_id',
        'achieve_id',
    ];
}
