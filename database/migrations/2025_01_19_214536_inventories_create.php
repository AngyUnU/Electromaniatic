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
        Schema::create('inventaries', function (Blueprint $table) {
                $table->id();
                $table->foreignId('categorie_id');
                $table->foreignId('product_id');
                $table->foreignId('sales_id');

                $table->decimal('precio', 6, 2)->required()->default(123.45);
                $table->integer('stock' )->required();


            $table->timestamps();

            $table->foreign('categorie_id')->references('id')->on('categories')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('product_id')->references('id')->on('products')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('sales_id')->references('id')->on('sales')
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
