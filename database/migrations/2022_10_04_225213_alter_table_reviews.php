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
        Schema::table('reviews', function (Blueprint $table) {

            $table->renameColumn('name','meta_title');
            $table->renameColumn('country','meta_description');
            $table->renameColumn('gallery','meta_keywords');
            $table->string('date')->change();
            $table->removeColumn('status');
            $table->removeColumn('featured');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->renameColumn('meta_title','name');
            $table->renameColumn('meta_description','country');
            $table->renameColumn('meta_keywords','gallery');
            $table->date('date')->change();
            $table->string('status');
            $table->string('featured');
        });
    }
};
