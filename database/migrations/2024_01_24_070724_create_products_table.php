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
            $table->double('productCode');
            $table->string('productName');
            // $table->foreignId('brand_id')->constrained('brands')->restrictOnDelete()->nullable();
            // $table->foreignId('category_id')->constrained('categories')->restrictOnDelete()->nullable();
            $table->integer('quantity')->default(0);
            $table->text('description');
            $table->string('status',10)->default('active');
            $table->integer('discount')->nullable();
            $table->string('discount-type')->nullable();
            $table->string('productPrice');
            $table->string('productImage');
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
