<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('item_name', 255);
            $table->string('brand', 100);
            $table->string('category', 100);
            $table->string('product_segment', 100);
            $table->string('product_serial_number', 255)->unique();
            $table->string('product_image_url', 255)->nullable(); // Stores image path
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
