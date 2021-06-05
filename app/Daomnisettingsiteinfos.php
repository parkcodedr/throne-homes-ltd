<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Daomniroomtypes;
use App\Daomnioffer;
use App\Daomnidiscountmodal;

class Daomnisettingsiteinfos extends Model
{
    protected $table = 'daomni_setting_siteinfos';

    // public function getRoomName($roomtype_id,$group){
    // 	if(strtolower($group)!='offer'){
	   //  	$roomtypes = Daomniroomtypes::where('id',$roomtype_id)->where('page_name',ucfirst(strtolower($group)))->orderBy('id','desc')->get();
	   //  	if(sizeof($roomtypes)>0){
    //             $roomtypes = Daomniroomtypes::where('id',$roomtype_id)->where('page_name',ucfirst(strtolower($group)))->orderBy('id','desc')->first();
	   //  		return ["room_name"=>$roomtypes->room_name,"group"=>$group];
	   //  	}
	   //  }
	   //  $roomtypes = Daomnioffer::where('id',$roomtype_id)->orderBy('id','desc')->get();
	   //  	if(sizeof($roomtypes)>0){
    //             $roomtypes = Daomnioffer::where('id',$roomtype_id)->orderBy('id','desc')->first();
	   //  		return ["room_name"=>$roomtypes->offer_name,"group"=>$group];
	   //  	}
    // }

    // public function getDiscountDetails($admin_id){
    // 	$getSiteDiscountInfo = Daomnidiscountmodal::select('advert1_discount_percent','advert2_discount_percent')->where('admin_id',$admin_id)->orderBy('id','desc')->get();
    // 	if(sizeof($getSiteDiscountInfo)>0){
    //         $getSiteDiscountInfo = Daomnidiscountmodal::select('advert1_discount_percent','advert2_discount_percent')->where('admin_id',$admin_id)->orderBy('id','desc')->first();
    // 		return $getSiteDiscountInfo;
    // 	}
    // 	return ['advert1_discount_percent'=>0,'advert2_discount_percent'=>0];
    // }
}
