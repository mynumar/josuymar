<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evento_id')->constrained();
            $table->foreignId('grupo_id')->constrained();
            $table->tinyInteger('estado')->default(0);
            $table->datetime('fecha_enviada')->nullable();
            $table->datetime('fecha_respuesta')->nullable();
            $table->tinyInteger('cantidad')->default(0);
            $table->tinyInteger('cantidad_confirmada')->default(0);
            $table->tinyInteger('cantidad_rechazada')->default(0);
            $table->string('codigo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invitaciones');
    }
};
