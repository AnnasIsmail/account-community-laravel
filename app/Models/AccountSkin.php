<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountSkin extends Model
{
    use HasFactory;
    
    protected $table = 'account_skin';
    protected $fillable = [
        'account_id',
        'name',
        'uuid',
    ];

    protected $hidden = [];
}
