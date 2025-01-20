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
            $table->string('name_cli', 50)->nullable()->default('clientes');
            $table->string('apellido_cli',40)->nullable()->nullable()->default('apellido paterno');
            $table->bigInteger('tel')->nullable()->default(1234567890);
            $table->string('imagen', 100)->nullable()->default('imagen');

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
