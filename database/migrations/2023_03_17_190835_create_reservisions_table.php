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
        Schema::create('reservisions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usersId')->constrained('users');
            $table->foreignId('categoryId')->constrained('categories');
            $table->foreignId('partnerId')->constrained('users');
            $table->integer('serviceId');
            $table->string('reserState')->default('pending');
            $table->date('startDate');
            $table->date('endDate');
            $table->string('userIdCard');
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
        Schema::dropIfExists('reservisions');
    }
};
