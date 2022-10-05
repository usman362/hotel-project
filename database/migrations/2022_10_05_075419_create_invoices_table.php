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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no')->nullable();
            $table->string('date')->nullable();
            $table->string('due_date')->nullable();
            $table->string('invoice_to')->nullable();
            $table->string('total_due')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('country')->nullable();
            $table->string('iban')->nullable();
            $table->string('swift_code')->nullable();
            $table->string('sales_person')->nullable();
            $table->string('note')->nullable();
            $table->string('payment_type')->nullable();
            $table->integer('payment_terms')->nullable();
            $table->integer('client_notes')->nullable();
            $table->integer('payment_sub')->nullable();
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
        Schema::dropIfExists('invoices');
    }
};
