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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nom_empleado', 50)->required()->default('nombre');
            $table->string('apellidos_empleado')->required()->default('apellidos');
            $table->string ('puesto',50)->required()->default('empleados');
            $table->bigInteger('tel')->required()->default(1234567890);
            $table->string('imagen', 100)->required()->default('imagen');

            $table->timestamps();



    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
