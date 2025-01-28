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
        $table->date('entry_date')->required();
        $table->string('name_pd', 50)->required()->default('producto');
        $table->string('description_pd', 100)->required()->default('producto');
        $table->decimal('price', 6, 2)->required()->default(123.45);
        $table->foreignId('categorie');
        $table->integer('stock' )->required();
        $table->string('image', 100)->nullable()->default('image');



        $table->timestamps();

        $table->foreign('categorie')->references('id')->on('categories')
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
