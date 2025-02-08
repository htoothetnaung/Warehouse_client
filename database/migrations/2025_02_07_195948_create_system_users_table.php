<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('system_users', function (Blueprint $table) {
            $table->id('system_users_id');
            $table->string('name', 100);
            $table->enum('role', ['admin', 'warehouse_admin', 'sales_admin', 'finance_admin']);
            $table->string('email', 100)->unique();
            $table->string('phone', 20)->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('system_users');
    }
};
