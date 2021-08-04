<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaomniSettingNavsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daomni_setting_navs', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->integer('admin_id');
            $table->integer('content_id')->nullable();           
            $table->string('nav_name');           
            $table->string('nav_link');           
            $table->string('nav_dropdown')->nullable();           
            $table->string('nav_submenu0')->nullable();          
            $table->string('nav_submenu1')->nullable();           
            $table->string('nav_submenu2')->nullable();           
            $table->string('nav_submenu3')->nullable();           
            $table->string('nav_submenu4')->nullable();           
            $table->string('nav_submenu5')->nullable();           
            $table->string('nav_submenu6')->nullable();           
            $table->string('nav_submenu7')->nullable();           
            $table->string('nav_submenu8')->nullable();           
            $table->string('nav_submenu9')->nullable();
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
        Schema::dropIfExists('daomni_setting_navs');
    }
}