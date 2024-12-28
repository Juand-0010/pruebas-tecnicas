<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBetsTable extends Migration
{
    public function up()
    {
        Schema::create('apuesta', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade'); // Relación con usuarios
            $table->foreignId('evento_id')->constrained('events')->onDelete('cascade'); // Relación con eventos
            $table->decimal('monto', 10, 2); // Monto apostado
            $table->decimal('cuota', 5, 2); // Cuota del evento
            $table->enum('estado', ['pendiente', 'ganada', 'perdida'])->default('pendiente'); // Estado de la apuesta
            $table->timestamps(); // created_at, updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('apuesta');
    }
}
