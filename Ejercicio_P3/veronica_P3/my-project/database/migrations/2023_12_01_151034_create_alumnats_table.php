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
        Schema::create('alumnats', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->char('name',100);
            $table->string('surname');
            $table->string('email');
            $table->string('password');
            $table->boolean('active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnats');
    }
};
