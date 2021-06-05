<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaomniLandServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daomni_land_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('admin_id');
            $table->integer('content_id')->nullable();
            $table->integer('daomnilandtypes_id')->nullable();
            $table->string('land_services')->nullable();
            $table->integer('available')->default('0');
            $table->integer('display')->default('0');
            $table->string('group')->default('room');
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
        Schema::dropIfExists('daomni_land_services');
    }
}
