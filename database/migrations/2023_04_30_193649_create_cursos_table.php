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

        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('documento', 20);
            $table->string('Nombre', 100);
            $table->enum('sexo', ['F', 'M']);
            $table->string('domicilio', 200);
            $table->date('Fecha_Ingreso');
            $table->date('Fecha_Nacimiento');
            $table->decimal('sueldo_basico', 10, 2);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
