<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaomniSettingSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daomni_setting_sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('admin_id'); 
            $table->integer('content_id')->nullable();      
            $table->string('slider_img')->nullable();      
            $table->string('slider_caption')->nullable();  
            $table->string('slider_caption_link')->nullable();  
            $table->string('slider_caption_link_label')->nullable();  
            $table->string('slider_last_link_1')->nullable();  
            $table->string('slider_last_label_1')->nullable(); 
            $table->string('slider_last_link_2')->nullable();  
            $table->string('slider_last_label_2')->nullable();
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
        Schema::dropIfExists('daomni_setting_sliders');
    }
}
