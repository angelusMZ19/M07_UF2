<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //se crea tabla con el nombre profesores
        Schema::create('profesores', function (Blueprint $table) {
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

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesores');
    }
};
