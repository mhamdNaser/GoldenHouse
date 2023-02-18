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
        Schema::create('clean_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('serviceCategory')->constrained('categories');
            $table->foreignId('partnerId')->constrained('users');
            $table->string('serviceName')->uniqid();
            $table->string('serviceDescription');
            $table->string('servicePrice');
            $table->string('service_photo1')->nullable();
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
        Schema::dropIfExists('clean_services');
    }
};
