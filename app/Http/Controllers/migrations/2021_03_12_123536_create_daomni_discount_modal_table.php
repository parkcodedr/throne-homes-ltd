<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaomniDiscountModalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daomni_discount_modal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('admin_id')->unique(); 
            $table->integer('content_id')->nullable();       
            $table->string('app_loader_icon')->nullable();       
            $table->string('app_modal_advert1')->nullable();       
            $table->integer('advert1_discount_percent')->default('50');
            $table->string('app_modal_advert2')->nullable();
            $table->integer('advert2_discount_percent')->default('20');
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
        Schema::dropIfExists('daomni_discount_modal');
    }
}
