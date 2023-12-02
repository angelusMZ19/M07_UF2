<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnat extends Model
{
    use HasFactory;
    
    protected $table = 'alumnats';
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'active'
    ];
    protected $hidden = [];
}
