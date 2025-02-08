<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('service_centers', function (Blueprint $table) {
            $table->id('center_id');
            $table->string('service_center_name', 50);
            $table->string('service_center_address', 50);
            $table->string('service_center_region', 50)->nullable();
            $table->string('service_contact_number', 50)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_centers');
    }
};
