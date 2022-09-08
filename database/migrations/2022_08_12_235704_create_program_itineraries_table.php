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
        Schema::create('program_itineraries', function (Blueprint $table) {
            $table->id();
            $table->integer('program_id');
            $table->string('day')->nullable();
            $table->string('duration')->nullable();
            $table->string('distance')->nullable();
            $table->string('altitude')->nullable();
            $table->binary('description')->nullable();
            $table->string('accommodation')->nullable();
            $table->integer('lunch')->nullable();
            $table->integer('breakfast')->nullable();
            $table->integer('dinner')->nullable();
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
        Schema::dropIfExists('program_itineraries');
    }
};
