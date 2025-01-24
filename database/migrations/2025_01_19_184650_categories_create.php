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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name_categoria', 50)->required()->default('products');
            $table->string('descripcion', 50)->required()->default('Electronico');
            $table->string('imagen', 150)->required()->default('img1');
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
