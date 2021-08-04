<?php

namespace App\Http\Controllers;

use App\Daomniadmintermsconditions;
use App\Daomnicontact;
use App\Daomnicorrespondence;
use App\Daomnidiscountmodal;
use App\Daomnilandservice;
use App\Daomnilandtypes;
use App\DaomniDownpayment;
use App\Daomninavigation;
use App\Daomnipandemic;
use App\Daomnirole;
use App\Daomnisettingindexabout;
use App\Daomnisettingindexlands;
use App\Daomnisettingservice;
use App\Daomnisettingsiteinfos;
use App\Daomnisettingslider;
use App\ImageLibSmart;
use App\User;
use App\Daomniorder;
use App\DaomniInfluentialcoupons;
use App\Daomnilanddetailimage;
use App\Daomniadditionalfacilitiesrate;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        //return Auth::user()->role_id;
        $admin_id = $this->regURL(); //this is determined by url owner while 1 = super admin 
        $generalinfo['user'] = Auth::user();
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $getRole = Daomnirole::where('id',Auth::user()->role_id)->orderBy('id','desc')->get();
        if(sizeof($getRole)<=0){
            Auth::logout();
            return back()->with('success','User role does not exist');
        }
        $getRole = Daomnirole::where('id',Auth::user()->role_id)->orderBy('id','desc')->first();
        //return $getRole->role;
        $generalinfo['role'] = $getRole->role;
        $generalinfo['title'] = '::'.ucfirst(strtolower($getRole->role)).' home';
        //Define User according to role
        //$generalinfo['DataSynchronization'] = $this->DataSynchronization();
        $generalinfo['totalusers'] = User::where('role_id',3)->orderBy('id','desc')->count('id');
        $generalinfo['totalstaffs'] = User::where('role_id','NOT LIKE',1)->where('role_id','NOT LIKE',3)->orderBy('id','desc')->count('id');
        $generalinfo['totaladmins'] = User::where('role_id',2)->orderBy('id','desc')->count('id');
        $generalinfo['total_lands'] = Daomniorder::where('id','>',0)->orderBy('id','desc')->count('id');
        $generalinfo['total_houses'] = Daomniorder::where('id','>',0)->orderBy('id','desc')->count('id');
        $generalinfo['total_lands_bought'] = 0;
        $generalinfo['total_houses_bought'] = 0;
        $generalinfo['total_instalment'] = 0;
        $generalinfo['totalrevenue'] = Daomniorder::where('id','>',0)->sum('price_pay');
        if(strtolower($generalinfo['role'])=='super'){
            //$generalinfo['walletbalance'] = Daomnifund::where('admin_id','>',0)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if(strtolower($generalinfo['role'])=='admin'){
            //$generalinfo['walletbalance'] = Daomnifund::where('admin_id',$admin_id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if(strtolower($generalinfo['role'])=='frontdesk'){
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if(strtolower($generalinfo['role'])=='accounting'){
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if(strtolower($generalinfo['role'])=='agent'){
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if(strtolower($generalinfo['role'])=='user'){
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if(strtolower($generalinfo['role'])=='architectural'){
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        $generalinfo['walletlimit'] = 1000000;
        //$generalinfo['totalrevenue'] = 0;

        return view('admin/index',$generalinfo);
    }

    public function regURL(){
        $user_logon = 'Login';
        if (empty(Auth::user())) {
            Auth::logout();
        }
        if (!empty(Auth::user())) {
            $user_logon = 'Logout';
        }
        $hotel_url = 'http://thronehomesltd.com/';
        //var_dump(url()->current());
        //This is to generate superadmin
        //$this->addSuperAdmin();
        //End of This is to generate superadmin
        $admin_id = 2;
        return ["admin_id" => $admin_id, "user_logon" => $user_logon];
    }

    public function getSiteinfosextract($admin_id){
        $this->admin_id = $admin_id;
        $generalinfo['siteinfos'] = Daomnisettingsiteinfos::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->get();
        if (sizeof($generalinfo['siteinfos']) <= 0) {
            $this->addDaomnisettingsiteinfos($this->admin_id);
        }
        $generalinfo['siteinfos'] = Daomnisettingsiteinfos::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->first();
        return $generalinfo['siteinfos'];
    }
}
