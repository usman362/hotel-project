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
        Schema::create('program_supports', function (Blueprint $table) {
            $table->id();
            $table->integer('program_id');
            $table->string('file')->nullable();
            $table->string('equipment_1')->nullable();
            $table->string('equipment_2')->nullable();
            $table->string('equipment_3')->nullable();
            $table->string('equipment_4')->nullable();
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
        Schema::dropIfExists('program_supports');
    }
};
