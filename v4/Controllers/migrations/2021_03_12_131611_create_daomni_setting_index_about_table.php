<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaomniSettingIndexAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daomni_setting_index_about', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('admin_id')->unique();
            $table->integer('content_id')->nullable();
            $table->string('section_title')->nullable();
            $table->string('section_subtitle')->nullable();
            $table->string('section_branding_info',2000)->nullable();
            $table->string('section_branding_info_ext',2000)->nullable();
            $table->string('section_label')->nullable();
            $table->string('section_link')->nullable();
            $table->string('section_img')->nullable();
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
        Schema::dropIfExists('daomni_setting_index_about');
    }
}
