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
        Schema::create('entregado', function (Blueprint $table) {
            $table->id();
            $table->string('empresa');
            $table->string('tiempo_estimado');
            $table->date('inicio');
            $table->date('final');
            $table->unsignedBigInteger('vehiculo_id');
            $table->string('estado',45);
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entregado');
    }
};
