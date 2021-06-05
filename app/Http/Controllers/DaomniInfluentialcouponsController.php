<?php

namespace App\Http\Controllers;

use App\DaomniInfluentialcoupons;
use App\Daomniorder;
use App\Daomnirole;
use App\Daomnisettingsiteinfos;
use App\User;
use Auth;
use Illuminate\Http\Request;

class DaomniInfluentialcouponsController extends Controller
{

    public function getCoupon(Request $request)
    {
        $coupon = $request->coupon;

        $userCoupon = DaomniInfluentialcoupons::where("coupon_code", $coupon)->first();

        if ($userCoupon) {
            if ($userCoupon->status === "active") {
                if ($userCoupon->allocated_percentage > $userCoupon->enduser_percentage) {

                    return response()->json(['coupondiscount' => $userCoupon->enduser_percentage]);
                } else {
                    return response()->json(['coupondiscount' => "0"]);

                }
            } else {

                return response()->json(['coupondiscount' => "0"]);
            }

        } else {
            return response()->json(['coupondiscount' => "0"]);

        }

    }

    public function landSub()
    {
        $admin_id = $this->regURL(); //this is determined by url owner while 1 = super admin
        $generalinfo['user'] = Auth::user();
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $getRole = Daomnirole::where('id', Auth::user()->role_id)->orderBy('id', 'desc')->get();
        if (sizeof($getRole) <= 0) {
            Auth::logout();
            return back()->with('success', 'User role does not exist');
        }
        $getRole = Daomnirole::where('id', Auth::user()->role_id)->orderBy('id', 'desc')->first();
        //return $getRole->role;
        $generalinfo['role'] = $getRole->role;
        $generalinfo['title'] = '::' . ucfirst(strtolower($getRole->role)) . ' home';
        //Define User according to role
        //$generalinfo['DataSynchronization'] = $this->DataSynchronization();
        $generalinfo['totalusers'] = User::where('role_id', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totalstaffs'] = User::where('role_id', 'NOT LIKE', 1)->where('role_id', 'NOT LIKE', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_houses'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands_bought'] = 0;
        $generalinfo['total_houses_bought'] = 0;
        $generalinfo['total_instalment'] = 0;
        $generalinfo['totalrevenue'] = Daomniorder::where('id', '>', 0)->sum('price_pay');
        if (strtolower($generalinfo['role']) == 'super') {
            //$generalinfo['walletbalance'] = Daomnifund::where('admin_id','>',0)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'admin') {
            //$generalinfo['walletbalance'] = Daomnifund::where('admin_id',$admin_id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'frontdesk') {
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'accounting') {
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'agent') {
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'user') {
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'architectural') {
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        $generalinfo['walletlimit'] = 1000000;

        $agent = Auth::user()->name;
        $generalinfo['orders'] = Daomniorder::where("agent", $agent)->join("daomni_landtypes", "daomni_landtypes.id", "daomniorders.daomnilandtypes_id")
            ->where("daomni_landtypes.page_name", "Lands")
            ->select(["daomniorders.firstname", "daomniorders.lastname", "daomniorders.payment_plan", "daomniorders.order_price"
                , "daomniorders.price_pay", "daomniorders.created_at", "daomni_landtypes.lands_name"])->get();

        return view('admin/landsub', $generalinfo);
    }

    public function houseSub()
    {
        $admin_id = $this->regURL(); //this is determined by url owner while 1 = super admin
        $generalinfo['user'] = Auth::user();
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $getRole = Daomnirole::where('id', Auth::user()->role_id)->orderBy('id', 'desc')->get();
        if (sizeof($getRole) <= 0) {
            Auth::logout();
            return back()->with('success', 'User role does not exist');
        }
        $getRole = Daomnirole::where('id', Auth::user()->role_id)->orderBy('id', 'desc')->first();
        //return $getRole->role;
        $generalinfo['role'] = $getRole->role;
        $generalinfo['title'] = '::' . ucfirst(strtolower($getRole->role)) . ' home';
        //Define User according to role
        //$generalinfo['DataSynchronization'] = $this->DataSynchronization();
        $generalinfo['totalusers'] = User::where('role_id', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totalstaffs'] = User::where('role_id', 'NOT LIKE', 1)->where('role_id', 'NOT LIKE', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_houses'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands_bought'] = 0;
        $generalinfo['total_houses_bought'] = 0;
        $generalinfo['total_instalment'] = 0;
        $generalinfo['totalrevenue'] = Daomniorder::where('id', '>', 0)->sum('price_pay');
        if (strtolower($generalinfo['role']) == 'super') {
            //$generalinfo['walletbalance'] = Daomnifund::where('admin_id','>',0)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'admin') {
            //$generalinfo['walletbalance'] = Daomnifund::where('admin_id',$admin_id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'frontdesk') {
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'accounting') {
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'agent') {
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'user') {
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'architectural') {
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        $generalinfo['walletlimit'] = 1000000;
        //$generalinfo['totalrevenue'] = 0;
        $agent = Auth::user()->name;
        $generalinfo['orders'] = Daomniorder::where("agent", $agent)->join("daomni_landtypes", "daomni_landtypes.id", "daomniorders.daomnilandtypes_id")
            ->where("daomni_landtypes.page_name", "Houses")
            ->select(["daomniorders.firstname", "daomniorders.lastname", "daomniorders.payment_plan", "daomniorders.order_price"
                , "daomniorders.price_pay", "daomniorders.created_at", "daomni_landtypes.lands_name"])->get();
        return view('admin/housesub', $generalinfo);
    }

    public function revenue()
    {
        $admin_id = $this->regURL(); //this is determined by url owner while 1 = super admin
        $generalinfo['user'] = Auth::user();
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $getRole = Daomnirole::where('id', Auth::user()->role_id)->orderBy('id', 'desc')->get();
        if (sizeof($getRole) <= 0) {
            Auth::logout();
            return back()->with('success', 'User role does not exist');
        }
        $getRole = Daomnirole::where('id', Auth::user()->role_id)->orderBy('id', 'desc')->first();
        //return $getRole->role;
        $generalinfo['role'] = $getRole->role;
        $generalinfo['title'] = '::' . ucfirst(strtolower($getRole->role)) . ' home';
        //Define User according to role
        //$generalinfo['DataSynchronization'] = $this->DataSynchronization();
        $generalinfo['totalusers'] = User::where('role_id', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totalstaffs'] = User::where('role_id', 'NOT LIKE', 1)->where('role_id', 'NOT LIKE', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_houses'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands_bought'] = 0;
        $generalinfo['total_houses_bought'] = 0;
        $generalinfo['total_instalment'] = 0;
        $generalinfo['totalrevenue'] = Daomniorder::where('id', '>', 0)->sum('price_pay');
        if (strtolower($generalinfo['role']) == 'super') {
            //$generalinfo['walletbalance'] = Daomnifund::where('admin_id','>',0)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'admin') {
            //$generalinfo['walletbalance'] = Daomnifund::where('admin_id',$admin_id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'frontdesk') {
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'accounting') {
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'agent') {
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'user') {
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'architectural') {
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        $generalinfo['walletlimit'] = 1000000;
        //$generalinfo['totalrevenue'] = 0;
        $agent = Auth::user()->name;
        $generalinfo['orders'] = Daomniorder::where("agent", $agent)->join("daomni_landtypes", "daomni_landtypes.id", "daomniorders.daomnilandtypes_id")
            ->select(["daomniorders.firstname", "daomniorders.lastname", "daomniorders.payment_plan", "daomniorders.order_price"
                , "daomniorders.price_pay", "daomniorders.created_at", "daomni_landtypes.lands_name", "daomni_landtypes.page_name"])->get();
        return view('admin/revenue', $generalinfo);
    }

    public function settings()
    {
        $admin_id = $this->regURL(); //this is determined by url owner while 1 = super admin
        $generalinfo['user'] = Auth::user();
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $getRole = Daomnirole::where('id', Auth::user()->role_id)->orderBy('id', 'desc')->get();
        if (sizeof($getRole) <= 0) {
            Auth::logout();
            return back()->with('success', 'User role does not exist');
        }
        $getRole = Daomnirole::where('id', Auth::user()->role_id)->orderBy('id', 'desc')->first();
        //return $getRole->role;
        $generalinfo['role'] = $getRole->role;
        $generalinfo['title'] = '::' . ucfirst(strtolower($getRole->role)) . ' home';
        //Define User according to role
        //$generalinfo['DataSynchronization'] = $this->DataSynchronization();
        $generalinfo['totalusers'] = User::where('role_id', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totalstaffs'] = User::where('role_id', 'NOT LIKE', 1)->where('role_id', 'NOT LIKE', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_houses'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands_bought'] = 0;
        $generalinfo['total_houses_bought'] = 0;
        $generalinfo['total_instalment'] = 0;
        $generalinfo['totalrevenue'] = Daomniorder::where('id', '>', 0)->sum('price_pay');
        if (strtolower($generalinfo['role']) == 'super') {
            //$generalinfo['walletbalance'] = Daomnifund::where('admin_id','>',0)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'admin') {
            //$generalinfo['walletbalance'] = Daomnifund::where('admin_id',$admin_id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'frontdesk') {
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'accounting') {
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'agent') {
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'user') {
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        if (strtolower($generalinfo['role']) == 'architectural') {
            //$generalinfo['walletbalance'] = Daomnifund::where('staff_id',Auth::user()->id)->sum('amount');
            $generalinfo['walletbalance'] = 0;
        }
        $generalinfo['walletlimit'] = 1000000;
        $agent = Auth::user()->id;
        $generalinfo['code'] = DaomniInfluentialcoupons::where("user_id", $agent)->value("coupon_code");
        //$generalinfo['totalrevenue'] = 0;
        return view('admin/resetcode', $generalinfo);
    }

    public function update_agentcode(Request $request)
    {

        $agent = DaomniInfluentialcoupons::where("user_id", Auth::user()->id)->first();
        $agent->coupon_code = $request->agent;
        $agent->update();

        return redirect()->back();
    }
    public function regURL()
    {
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

    public function getSiteinfosextract($admin_id)
    {
        $this->admin_id = $admin_id;
        $generalinfo['siteinfos'] = Daomnisettingsiteinfos::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->get();
        if (sizeof($generalinfo['siteinfos']) <= 0) {
            $this->addDaomnisettingsiteinfos($this->admin_id);
        }
        $generalinfo['siteinfos'] = Daomnisettingsiteinfos::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->first();
        return $generalinfo['siteinfos'];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DaomniInfluentialcoupons  $daomniInfluentialcoupons
     * @return \Illuminate\Http\Response
     */
    public function show(DaomniInfluentialcoupons $daomniInfluentialcoupons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DaomniInfluentialcoupons  $daomniInfluentialcoupons
     * @return \Illuminate\Http\Response
     */
    public function edit(DaomniInfluentialcoupons $daomniInfluentialcoupons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DaomniInfluentialcoupons  $daomniInfluentialcoupons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DaomniInfluentialcoupons $daomniInfluentialcoupons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DaomniInfluentialcoupons  $daomniInfluentialcoupons
     * @return \Illuminate\Http\Response
     */
    public function destroy(DaomniInfluentialcoupons $daomniInfluentialcoupons)
    {
        //
    }
}