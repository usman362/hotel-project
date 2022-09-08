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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('tour_name');
            $table->string('url_slug');
            $table->string('ribbon');
            $table->string('reference');
            $table->integer('destination_id');
            $table->integer('activity_id');
            $table->integer('region_id');
            $table->string('duration');
            $table->string('difficult');
            $table->string('max_elevation');
            $table->string('min_participant');
            $table->string('max_participant');
            $table->string('meals');
            $table->string('accommodation');
            $table->string('best_months');
            $table->string('distance');
            $table->string('start_end');
            $table->string('daily_activity');
            $table->longtext('tour_highlights');
            $table->string('tour_overview');
            $table->string('tour_brochure');
            $table->string('tour_thumbnail');
            $table->string('tour_banner');
            $table->longtext('tour_gallery');
            $table->string('tour_map');
            $table->string('free_cancellation');
            $table->string('pricing_type');
            $table->string('flat_price');
            $table->string('product_cutoff');
            $table->string('min_pax');
            $table->string('max_pax');
            $table->string('tiered_price');
            $table->string('activate_discounts');
            $table->string('unavailable_dates');
            $table->string('is_bookable');
            $table->string('booking_type');
            $table->string('related_trips');
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();
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
        Schema::dropIfExists('programs');
    }
};
