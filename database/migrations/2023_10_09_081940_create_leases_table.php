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
        Schema::create('leases', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->nombre_cliente();
            $table->apellido_paterno();
            $table->apellido_materno();
            $table->email();
            $table->foreign('patente')->references('patent')->on('vehicles')->onDelete('cascade');
            $table->fecha_entrega();
            $table->fecha_devolucion();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leases');
    }
};
