<?php

namespace App\Models;
// Utiliza las clases necesarias para la definición de modelos en Laravel.
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesores extends Model
{
    use HasFactory;
    //nombre de la tabla 
    protected $table='profesores';
    // Especifica los campos que se pueden llenar mediante asignación masiva.
    protected $fillable=[
        'name',
        'surname',
        'email',
        'password',
        'active'
    ];
    protected $hidden = [];
}
