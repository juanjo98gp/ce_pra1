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
        Schema::create('product_product', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('writer');
            $table->string('brand');
            $table->string('isbn');
            $table->integer('publication_year');
            $table->integer('pages');
            $table->integer('category');
            $table->string('thumbnail_image');
            $table->string('front_image');
            $table->text('description');
            $table->decimal('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_product');
    }
};
