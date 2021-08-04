<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestNameUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_name_update', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('lastname');
            $table->string('middlename')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('dob');
            $table->string('document_type');
            $table->string('document_name');
            $table->string('approved_admin_id')->nullable();
            $table->string('approval_status')->default('Pending');
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
        Schema::dropIfExists('request_name_update');
    }
}
