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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('cedula', 10);
            $table->string('direccion', 100);
            $table->string('telefono', 10);

            $table->foreignId('ciudad_id')->constrained()->onDelete('cascade');
            $table->foreignId('products_id')->constrained()->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
