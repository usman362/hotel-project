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
        Schema::table('user_infos', function (Blueprint $table) {
            $table->string('dob_day')->nullable();
            $table->string('dob_month')->nullable();
            $table->string('dob_year')->nullable();
            $table->string('gender')->nullable();
            $table->string('zipcode')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_infos', function (Blueprint $table) {
            $table->dropColumn('dob_day');
            $table->dropColumn('dob_month');
            $table->dropColumn('dob_year');
            $table->dropColumn('gender');
            $table->dropColumn('zipcode');
        });
    }
};
