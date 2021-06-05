<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaomniCorrespondencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daomni_correspondences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('admin_id')->nullable(); 
            $table->integer('content_id')->nullable(); 
            $table->integer('timing')->default('0');//this is the time to send email to correspondence email, that those that will receive email
            $table->string('email')->nullable();  
            $table->integer('display')->default('1');  //to be allowed by super admin yes(1)
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
        Schema::dropIfExists('daomni_correspondences');
    }
}
