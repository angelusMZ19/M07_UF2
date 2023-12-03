<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        //se crea tabla con el nombre centros
        Schema::create('centros', function (Blueprint $table) {
            //se establecen los valores y los tipso de datos para cada uno   
            $table->increments('id');
            $table->timestamps();
            $table->char('name',50);
            $table->string('address');
            $table->string('CP');
            $table->string('City');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('centros');
    }
};
