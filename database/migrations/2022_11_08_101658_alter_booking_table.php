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
        Schema::dropIfExists('bookings');
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('tour_id')->nullable();
            $table->string('custom_tour_name')->nullable();
            $table->string('start_date')->nullable();
            $table->string('reference')->nullable();
            $table->string('booking_date')->nullable();
            $table->string('lead_customer_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('no_of_people')->nullable();
            $table->string('email')->nullable();
            $table->string('country')->nullable();
            $table->string('duration')->nullable();
            $table->string('price_per_person')->nullable();
            $table->string('deposit')->nullable();
            $table->string('itinerary')->nullable();
            $table->binary('cost_includes')->nullable();
            $table->binary('cost_excludes')->nullable();
            $table->binary('admin_notes')->nullable();
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
        Schema::dropIfExists('bookings');
    }
};
