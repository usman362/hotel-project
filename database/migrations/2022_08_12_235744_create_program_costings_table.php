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
        Schema::create('program_costings', function (Blueprint $table) {
            $table->id();
            $table->integer('program_id');
            $table->string('includes');
            $table->string('include_caption');
            $table->string('excludes');
            $table->string('exclude_caption');
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
        Schema::dropIfExists('program_costings');
    }
};
