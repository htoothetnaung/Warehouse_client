<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sales_invoices', function (Blueprint $table) {
            $table->id();
            $table->date('sale_date');
            $table->string('invoice_no', 20);
            $table->foreignId('partner_shops_id')->constrained('partner_shops', 'partner_shops_id')->onDelete('cascade');
            $table->string('item_name', 255);
            $table->string('brand', 100);
            $table->string('category', 100);
            $table->string('product_segment', 100);
            $table->string('product_serial_number', 255);
            $table->decimal('unit_price_mmk', 15, 2);
            $table->decimal('cash_back_mmk', 15, 2)->default(0.00);
            $table->integer('quantity');
            $table->decimal('total_mmk', 15, 2);
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales_invoices');
    }
};
