<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentUnderProcess extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_under_process', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('admin_id');
            $table->string('payment_plan');
            $table->integer('order_id');
            $table->string('payment_type');
            $table->decimal('amount_pay');
            $table->string('payment_status')->default('standby');
            $table->string('payment_mode');
            $table->string('confirmed_by');
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
        Schema::dropIfExists('payment_under_process');
    }
}
