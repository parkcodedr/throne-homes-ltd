<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaomniLandtypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daomni_landtypes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('admin_id');
            $table->integer('content_id')->nullable();
            $table->string('page_name')->nullable();
            $table->string('lands_name')->nullable();
            $table->string('lands_location')->nullable();
            $table->integer('lands_size')->default('0');
            $table->string('lands_size_si_unit')->default('sqm');
            $table->string('lands_img')->nullable();
            $table->string('lands_details')->nullable();
            $table->string('lands_details_link')->nullable();
            $table->decimal('lands_price', 13,2)->default('0.00');
            $table->decimal('infrastructure', 13,2)->default('0.00');
            $table->string('feature1')->nullable();
            $table->string('feature2')->nullable();
            $table->integer('lands_total')->default('0');
            $table->integer('lands_total_sold')->default('0');
            $table->string('si_unit')->default('/ plot');
            $table->string('lands_detail_others')->default('Other Lands');
            $table->string('section_title')->default('ESTATE SERVICES');
            $table->string('section_subtitle')->default('ESTATE INCLUDES:');
            $table->string('section_info')->nullable();
            $table->string('lands_detail_booking')->default('BUY YOUR LANDS');
            $table->integer('lands_star_voted')->default('5');
            $table->string('lands_detail_available_info')->default('AVAILABLE LANDS');
            $table->string('flaticon')->nullable();
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
        Schema::dropIfExists('daomni_landtypes');
    }
}
