<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('stock_records', function (Blueprint $table) {
            $table->id();
            $table->date('record_date');
            $table->string('category', 50);
            $table->string('model', 100);
            $table->string('warehouse_branch', 50)->default('Dawbon');
            $table->integer('opening_balance');
            $table->integer('received')->default(0);
            $table->integer('dispatched')->default(0);
            $table->integer('closing_balance');
            $table->foreignId('system_users_id')->constrained('system_users', 'system_users_id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stock_records');
    }
};
