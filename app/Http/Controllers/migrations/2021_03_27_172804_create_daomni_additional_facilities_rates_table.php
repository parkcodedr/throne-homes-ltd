<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaomniAdditionalFacilitiesRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daomni_additional_facilities_rates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('admin_id')->nullable(); 
            $table->integer('content_id')->nullable(); 
            $table->integer('daomnilandtypes_id')->nullable(); 
            $table->string('facility_name')->nullable();     
            $table->string('rates')->nullable();   
            $table->string('description')->nullable(); 
            $table->integer('available')->default('0'); 
            $table->integer('display')->default('1');
            $table->string('group')->default('Lands');  
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
        Schema::dropIfExists('daomni_additional_facilities_rates');
    }
}
