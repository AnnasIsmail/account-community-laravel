<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountAgent extends Model
{
    use HasFactory;

    protected $table = 'account_agent';
    protected $fillable = [
        'account_id',
        'name',
        'uuid',
    ];

    protected $hidden = [];
}
