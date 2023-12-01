<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centres extends Model
{
    use HasFactory;

    protected $table = 'centres';

    protected $fillable = [
        'name',
        'address',
        'cp',
        'city'
    ];
    protected $hidden = [];
}
