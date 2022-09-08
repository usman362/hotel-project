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
        Schema::create('tiered_prices', function (Blueprint $table) {
            $table->id();
            $table->integer('program_id');
            $table->string('min_pax')->nullable();
            $table->string('max_pax')->nullable();
            $table->string('tiered_price')->nullable();
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
        Schema::dropIfExists('tiered_prices');
    }
};
