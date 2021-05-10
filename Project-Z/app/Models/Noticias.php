<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    use HasFactory;

    public $timestamps=true;

    protected $table = 'news';

    protected $fillable = [
        'id',
        'name',
        'description',
        'writer',
    ];
}
