<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'accounts';
    protected $fillable = [
        'riotId',
        'tagLine',
        'slug',
        'username',
        'password',
        'owner',
    ];

    protected $hidden = [];
}
