<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaomniLanddetailImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daomni_landdetail_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('admin_id');
            $table->integer('content_id')->nullable();
            $table->integer('daomnilandtypes_id')->nullable();
            $table->string('land_plan_images')->nullable();
            $table->string('group')->default('Land');
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
        Schema::dropIfExists('daomni_landdetail_images');
    }
}
