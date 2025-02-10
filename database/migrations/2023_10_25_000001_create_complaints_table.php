<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();

            // invoice_id references invoices with cascade on delete.
            $table->foreignId('invoice_id')->constrained('sales_invoices')->onDelete('cascade');

            // product_id uses ON DELETE SET NULL, so it must be nullable.
            $table->foreignId('product_id')
                ->nullable()
                ->constrained('products')
                ->onDelete('set null');

            // product_name
            $table->string('product_name');

            // quantity
            $table->integer('quantity');

            // issue_type
            $table->string('issue_type');

            // customer_phone
            $table->string('customer_phone');

            // remark as a text field, allowing null if no remark is provided.
            $table->text('remark')->nullable();

            // status field with a default value of 'Pending'
            $table->string('status', 50)->default('Pending');

            // complain_date with default CURRENT_TIMESTAMP
            $table->timestamp('complain_date')->useCurrent();

            // created_at and updated_at columns mimicking MySQL's CURRENT_TIMESTAMP behaviors.
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    public function down()
    {
        Schema::dropIfExists('complaints');
    }
};
