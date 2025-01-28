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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->nullable();;
            $table->foreignId('name_pd')->nullable();;
            $table->foreignId('categorie_id')->nullable();;
            $table->foreignId('client_id')->nullable();;
            $table->foreignId('employee_id')->nullable();;
            $table->date('sale_date')->nullable();



            $table->timestamps();

            $table->foreign('categorie_id')->references('id')->on('categories')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('product_id')->references('id')->on('products')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('client_id')->references('id')->on('clients')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('employee_id')->references('id')->on('employees')
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
