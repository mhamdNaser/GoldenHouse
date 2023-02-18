<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('serviceCategory')->constrained('categories');
            $table->foreignId('partnerId')->constrained('users');
            $table->string('serviceName')->uniqid();
            $table->string('serviceDescription');
            $table->integer('romeNumber');
            $table->integer('bedNumber');
            $table->string('price_bed');
            $table->string('service_photo1')->nullable();
            $table->string('service_photo2')->nullable();
            $table->string('service_photo3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('house_services');
    }
};
