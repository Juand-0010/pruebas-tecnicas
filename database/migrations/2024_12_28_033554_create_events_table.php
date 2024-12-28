<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nombre'); // Nombre del evento deportivo
            $table->date('fecha'); // Fecha del evento
            $table->string('tipo_deporte'); // Tipo de deporte
            $table->timestamps(); // created_at, updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
