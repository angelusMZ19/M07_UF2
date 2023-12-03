<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        //se crea tabla con el nomrbe de alumnos
        Schema::create('alumnos', function (Blueprint $table) {
            //se establecen los valores y los tipso de datos para cada uno 
            $table->increments('id');
            $table->timestamps();
            $table->string('name',50);
            $table->string('surname');
            $table->integer('password');
            $table->boolean('active');
            $table->string('email');
            
        });
    }

    public function down(): void
    {
        //borra si la tabla existe y actualiza con datos creandola de nuevo 
        Schema::dropIfExists('alumnos');
    }
};
