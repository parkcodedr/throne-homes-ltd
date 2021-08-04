<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaomniSettingSiteinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daomni_setting_siteinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('admin_id')->unique(); 
            $table->integer('content_id')->nullable();       
            $table->string('app_name')->nullable();       
            $table->string('app_email')->nullable();
            $table->string('app_phone')->nullable();
            $table->string('welcomenote')->nullable();     
            $table->string('booking_btn')->nullable();
            $table->string('coy_logo')->nullable();
            $table->string('coy_apple_icon')->nullable();
            $table->string('coy_icon')->nullable();
            $table->string('meta_keywords',2000)->nullable();
            $table->string('meta_description',2000)->nullable();
            $table->string('contact_label')->nullable(); 
            $table->string('coy_address',2000)->nullable(); 
            $table->string('coy_city')->nullable(); 
            $table->string('coy_state')->nullable();
            $table->string('coy_phone_nos')->nullable();
            $table->string('coy_facebook')->nullable();
            $table->string('coy_twitter')->nullable();
            $table->string('coy_youtube')->nullable();
            $table->string('breadcrumb_img')->default('frontend/images/throne_breadcrumb.jpg');
            $table->string('coy_contact_title')->nullable();
            $table->string('coy_contact_subtitle')->nullable();
            $table->string('coy_contact_note')->nullable();
            $table->string('coy_contact_right')->nullable();
            $table->string('coy_contact_rightsub')->nullable(); 
            $table->string('coy_contact_botton_name')->nullable();
            $table->string('coy_url')->nullable(); 
            $table->string('pandemic_intro',2000)->default('With current updates from WHO, NCDC and industry best practices to contain the scourge, we have below measures which we encourage all our customers to regularly follow while you visit our office or while going with you to sites.'); 
            $table->string('pandemic_measure_caption')->default('Below are some measures put in place by the WHO and NCDC to ensure your safety:'); 
            $table->string('terms_conditions_title')->default('Terms and Conditions'); 
            $table->string('paymentgatewayroute')->default('https://daomnipay.reizcontinentalhotels.com');
            $table->string('synchronizationroute')->default('http://hms.daomnitraders.com');
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
        Schema::dropIfExists('daomni_setting_siteinfos');
    }
}
