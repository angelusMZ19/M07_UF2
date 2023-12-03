<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centros extends Model
{
    use HasFactory;
    protected $table='centros';

    protected $fillable=[
        'id',
        'name',
        'surname',
        'CP',
        'city'
    ];
    protected $hidden = [];
}
