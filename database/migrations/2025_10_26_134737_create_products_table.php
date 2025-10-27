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
        // perintah untuk membuat table product
        Schema::create('products', function (Blueprint $table) {
            $table->id('id_product');
            $table->text('name_product',150);
            $table->integer('stock_product');
            $table->integer('price_product');
            $table->text('desc_product');
            $table->integer('id_category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
