<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professorat extends Model
{
    use HasFactory;
    protected $table = 'professorats';
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'active'
    ];
    protected $hidden = [];
}
