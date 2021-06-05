<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaomniSettingServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daomni_setting_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('admin_id');
            $table->integer('content_id')->nullable();
            $table->string('service_title')->nullable();
            $table->string('service_subtitle')->nullable();
            $table->string('service_image')->nullable();
            $table->string('flaticon')->nullable();
            $table->string('service')->nullable();
            $table->string('service_details',2000)->nullable();
            $table->integer('service_count')->default('0');
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
        Schema::dropIfExists('daomni_setting_services');
    }
}
