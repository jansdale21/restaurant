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
        Schema::create('menu_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('product_id');
            
            // Add foreign key constraints
            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            //$table->softDeletes();

            $table->unique(['menu_id', 'product_id']); // Prevent duplicate menu-product combinations
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void 
    {
        Schema::dropIfExists('menu_products');
    }
};
