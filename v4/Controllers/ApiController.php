<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\URL;

use App\Daomniorder;

class ApiController extends Controller{

    public function UpdateOnlineBookings(Request $request){
        $rawdata = $request->all();
        if(sizeof($rawdata)>0){
            $updateonlinebookings = Daomniorder::where('id',$rawdata["online_id"])->orderBy('id','desc')->get();
            if(sizeof($updateonlinebookings)>0){
                $updateonlinebookings = Daomniorder::where('id',$rawdata["online_id"])->orderBy('id','desc')->first();
                $updateonlinebookings->from_offline = $rawdata["offline_id"];
                $updateonlinebookings->save();
                return $updateonlinebookings->id;
            }
        }
        return 0;
    }
}