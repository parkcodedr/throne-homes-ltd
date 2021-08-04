<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaomniordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daomniorders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('admin_id')->nullable();
            $table->integer('content_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('passport')->nullable();
            $table->string('group')->nullable();
            $table->string('payment_mode')->nullable();
            $table->string('payment_plan')->nullable();
            $table->decimal('order_price', 13,2)->nullable();
            $table->decimal('price_pay', 13,2)->nullable();
            $table->decimal('pay_monthly', 13,2)->nullable();
            $table->string('phone')->nullable();
            $table->string('learn_about')->nullable();
            $table->string('transaction_reference')->nullable();
            $table->string('status')->default('standby');
            $table->string('payment_type')->nullable();
            $table->integer('daomnilandtypes_id')->nullable();
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
        Schema::dropIfExists('daomniorders');
    }
}