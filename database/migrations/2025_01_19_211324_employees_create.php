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
            $table->string('name_e', 50)->required()->default('sin nombre');
            $table->string('surnames_e')->required()->default('sin apellidos');
            $table->string ('position',50)->required()->default('empleado sin puesto');
            $table->bigInteger('tel')->required()->default(1234567890);
            $table->string('image', 100)->nullable()->default('image');

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
