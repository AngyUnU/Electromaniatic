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
        Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->date('fecha_ingreso')->required();
        $table->string('name_pd', 50)->required()->default('producto');
        $table->string('descripcion_pd', 100)->required()->default('producto');
        $table->decimal('precio', 6, 2)->required()->default(123.45);
        $table->foreignId('category_id');
        $table->integer('stock' )->required();
        $table->string('imagen', 100)->required()->default('imagen');



        $table->timestamps();

        $table->foreign('category_id')->references('id')->on('categories')
        ->onDelete('cascade')->onUpdate('cascade');


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
