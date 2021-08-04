<?php

namespace App\Http\Controllers;

use App\User;
use App\RequestNameUpdate;
use App\Daomnirole;
use App\Daomniorder;
use App\Daomnilandtypes;
use Illuminate\Http\Request;
use App\Daomnisettingsiteinfos;
use App\PaymentProcesses;
use App\PaymentUnderProcess;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    // //
    // public function show()
    // {

    // }

    function show(Request $request)
    {
        $user = auth()->user();
        $user->password = null;
        $admin_id = $this->regURL(); //this is determined by url owner while 1 = super admin
        $generalinfo['user'] = Auth::user();
        $user = Auth::user();
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');

        $generalinfo['totalusers'] = User::where('role_id', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totalstaffs'] = User::where('role_id', 'NOT LIKE', 1)->where('role_id', 'NOT LIKE', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_houses'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands_bought'] = 0;
        $generalinfo['total_houses_bought'] = 0;
        $generalinfo['total_instalment'] = 0;
        $generalinfo['totalrevenue'] = Daomniorder::where('id', '>', 0)->sum('price_pay');

        $user_role = $getRole = Daomnirole::where('id', Auth::user()->role_id)->value("role");
        $generalinfo['title'] = '::' . ucfirst(strtolower($user_role)) . ' home';

        $generalinfo['role'] = $user_role;

        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['lands'] = Daomnilandtypes::where('admin_id', $admin_id)->get();

        $userInfo = $user;


        return view('admin/view_profile', [
            "userInfo" => $userInfo,
            "generalinfo" => $generalinfo, "role" => $user_role, "user" => $user,
            "totaladmins" => $generalinfo['totaladmins'], "totalstaffs" => $generalinfo["totalstaffs"],
            "totalusers" => $generalinfo["totalusers"], "total_lands" => $generalinfo["total_lands"],
            "total_lands_bought" => $generalinfo["total_lands_bought"],
            "total_houses" => $generalinfo["total_houses"],
            "total_houses_bought" => $generalinfo["total_houses_bought"],
            "total_instalment" => $generalinfo["total_instalment"],
            "totalrevenue" => $generalinfo["totalrevenue"],
            "siteinfos" => $generalinfo["siteinfos"],
            "title" => $generalinfo["title"]
        ]);
    }

    public function update(Request $request)
    {
        $id = auth()->user()->id;
        $mstatus = $request->mstatus;
        $gender = $request->gender;
        $city = $request->city;
        $country = $request->country;
        $address = $request->address;

        $updateUser = User::where('id', $id)->update(["gender" => $gender, "mstatus" => $mstatus, "city" => $city, "country" => $country, 'address' => $address]);
        if ($updateUser) {
            return Redirect::back()->with('msg', 'Profile updated successfully,');
        } else {
            return Redirect::back()->with('error_msg', 'fail to update information');
        }
    }

    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);


        $fileName = time() . rand(0000, 99999) . '.' . $request->file->extension();
        $id = auth()->user()->id;
        $profile = User::where('id', $id)->update(array('photo' => $fileName));

        if ($profile) {
            $request->file->move(public_path('uploads/profile_image'), $fileName);
            return Redirect::to('/profile')
                ->with('success', 'You have successfully updated your Photo');
        } else {
            return Redirect::to('/profile')
                ->with('error', 'unable to update your Photo.');
        }
    }
    public function nameUpdateForm()
    {
        $user = auth()->user();
        $user->password = null;
        $admin_id = $this->regURL(); //this is determined by url owner while 1 = super admin
        $generalinfo['user'] = Auth::user();
        $user = Auth::user();
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');

        $generalinfo['totalusers'] = User::where('role_id', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totalstaffs'] = User::where('role_id', 'NOT LIKE', 1)->where('role_id', 'NOT LIKE', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_houses'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands_bought'] = 0;
        $generalinfo['total_houses_bought'] = 0;
        $generalinfo['total_instalment'] = 0;
        $generalinfo['totalrevenue'] = Daomniorder::where('id', '>', 0)->sum('price_pay');

        $user_role = $getRole = Daomnirole::where('id', Auth::user()->role_id)->value("role");
        $generalinfo['title'] = '::' . ucfirst(strtolower($user_role)) . ' home';

        $generalinfo['role'] = $user_role;

        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['lands'] = Daomnilandtypes::where('admin_id', $admin_id)->get();

        $userInfo = $user;


        return view('admin/request_name_update', [
            "userInfo" => $userInfo,
            "generalinfo" => $generalinfo, "role" => $user_role, "user" => $user,
            "totaladmins" => $generalinfo['totaladmins'], "totalstaffs" => $generalinfo["totalstaffs"],
            "totalusers" => $generalinfo["totalusers"], "total_lands" => $generalinfo["total_lands"],
            "total_lands_bought" => $generalinfo["total_lands_bought"],
            "total_houses" => $generalinfo["total_houses"],
            "total_houses_bought" => $generalinfo["total_houses_bought"],
            "total_instalment" => $generalinfo["total_instalment"],
            "totalrevenue" => $generalinfo["totalrevenue"],
            "siteinfos" => $generalinfo["siteinfos"],
            "title" => $generalinfo["title"]
        ]);
    }
    public function storeNameUpdateRequest(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'dob' => 'required|date',
            'document_type' => 'required',
            'file' => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);
        $fileName = time() . rand(0000, 99999) . '.' . $request->file->extension();

        $user_id = auth()->user()->id;

        $user = RequestNameUpdate::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'middlename' => $request->middlename,
            'email' => $request->email,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'document_type' => $request->document_type,
            'document_name' => $fileName,
            'user_id' => $user_id
        ]);

        if ($user) {
            $request->file->move(public_path('uploads/documents'), $fileName);
            return redirect()->back()->with("success", "Update request submitted successfully");
        } else {
            return redirect()->back()->with("error", "unable to submit Update request");
        }
    }

    public function updateRequestList()
    {
        $updateRequestList = RequestNameUpdate::all();

        $user = auth()->user();
        $user->password = null;
        $admin_id = $this->regURL(); //this is determined by url owner while 1 = super admin
        $generalinfo['user'] = Auth::user();
        $user = Auth::user();
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');

        $generalinfo['totalusers'] = User::where('role_id', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totalstaffs'] = User::where('role_id', 'NOT LIKE', 1)->where('role_id', 'NOT LIKE', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_houses'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands_bought'] = 0;
        $generalinfo['total_houses_bought'] = 0;
        $generalinfo['total_instalment'] = 0;
        $generalinfo['totalrevenue'] = Daomniorder::where('id', '>', 0)->sum('price_pay');

        $user_role = $getRole = Daomnirole::where('id', Auth::user()->role_id)->value("role");
        $generalinfo['title'] = '::' . ucfirst(strtolower($user_role)) . ' home';

        $generalinfo['role'] = $user_role;

        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['lands'] = Daomnilandtypes::where('admin_id', $admin_id)->get();

        $userInfo = $user;


        return view('admin/update_request_list', [
            "userInfo" => $userInfo,
            "updateRequestList" => $updateRequestList,
            "generalinfo" => $generalinfo, "role" => $user_role, "user" => $user,
            "totaladmins" => $generalinfo['totaladmins'], "totalstaffs" => $generalinfo["totalstaffs"],
            "totalusers" => $generalinfo["totalusers"], "total_lands" => $generalinfo["total_lands"],
            "total_lands_bought" => $generalinfo["total_lands_bought"],
            "total_houses" => $generalinfo["total_houses"],
            "total_houses_bought" => $generalinfo["total_houses_bought"],
            "total_instalment" => $generalinfo["total_instalment"],
            "totalrevenue" => $generalinfo["totalrevenue"],
            "siteinfos" => $generalinfo["siteinfos"],
            "title" => $generalinfo["title"]
        ]);
    }

    public function updateRequestSingle(Request $request, $id)
    {
        //$updateRequestList = RequestNameUpdate::all();


        $requestUser = RequestNameUpdate::where('user_id', $id)->first();


        $admin_id = $this->regURL(); //this is determined by url owner while 1 = super admin
        $generalinfo['user'] = Auth::user();
        $user = Auth::user();
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');

        $generalinfo['totalusers'] = User::where('role_id', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totalstaffs'] = User::where('role_id', 'NOT LIKE', 1)->where('role_id', 'NOT LIKE', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_houses'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands_bought'] = 0;
        $generalinfo['total_houses_bought'] = 0;
        $generalinfo['total_instalment'] = 0;
        $generalinfo['totalrevenue'] = Daomniorder::where('id', '>', 0)->sum('price_pay');

        $user_role = $getRole = Daomnirole::where('id', Auth::user()->role_id)->value("role");
        $generalinfo['title'] = '::' . ucfirst(strtolower($user_role)) . ' home';

        $generalinfo['role'] = $user_role;

        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['lands'] = Daomnilandtypes::where('admin_id', $admin_id)->get();



        return view('admin/update_request_single', [
            "userInfo" => $requestUser,
            "generalinfo" => $generalinfo, "role" => $user_role, "user" => $user,
            "totaladmins" => $generalinfo['totaladmins'], "totalstaffs" => $generalinfo["totalstaffs"],
            "totalusers" => $generalinfo["totalusers"], "total_lands" => $generalinfo["total_lands"],
            "total_lands_bought" => $generalinfo["total_lands_bought"],
            "total_houses" => $generalinfo["total_houses"],
            "total_houses_bought" => $generalinfo["total_houses_bought"],
            "total_instalment" => $generalinfo["total_instalment"],
            "totalrevenue" => $generalinfo["totalrevenue"],
            "siteinfos" => $generalinfo["siteinfos"],
            "title" => $generalinfo["title"]
        ]);
    }

    public function approveUpdateRequest(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'dob' => 'required|date',

        ]);

        $admin_id = auth()->user()->id;
        $user_role = $getRole = Daomnirole::where('id', Auth::user()->role_id)->value("role");

        if ($user_role === "admin" || $user_role === "super") {

            $name = $request->name;
            $lastname = $request->lastname;
            $middlename = $request->middlename;
            $email = $request->email;
            $phone = $request->phone;
            $dob = $request->dob;

            $updateUser = User::where('id', $id)->update([
                "name" => $name, "middlename" => $middlename,
                "lastname" => $lastname, "email" => $email, 'phone' => $phone,
                'dob' => $dob
            ]);
            if ($updateUser) {
                RequestNameUpdate::where('user_id', $id)->update(['approved_admin_id' => $admin_id, 'approval_status' => 'Approved']);
                return Redirect::back()->with('success', 'Approved successfully,');
            } else {
                return Redirect::back()->with('error', 'fail to approve update request');
            }
        } else {
            return Redirect::back()->with('error', 'Access Denied');
        }
    }

    public function myLands(Request $request, $name)
    {

        $user = auth()->user();
        $userLand = Daomniorder::select('id', 'user_id', 'order_price', 'payment_plan', 'daomnilandtypes_id', 'status', 'created_at')->where(['user_id' => $user->id, "group" => "Lands", "status" => "confirmed"])->get();

        foreach ($userLand as $landOrder) {
            $land = Daomnilandtypes::select('lands_name', 'lands_size')
                ->where("id", $landOrder['daomnilandtypes_id'],)
                ->first();
            if ($landOrder->payment_plan == "installments") {
                $paymentCount = PaymentProcesses::where("order_id", $landOrder->id)->get();
                $orderPrice = (int) Daomniorder::where("id", $landOrder->id)->value("order_price");

                $total = $paymentCount->sum("amount_pay");
                if ($total < $orderPrice) {
                    $landOrder->completePayment = false;
                } else {
                    $landOrder->completePayment = true;
                }
            }
            $landOrder->land_name = $land["lands_name"];
            $landOrder->land_size = $land["lands_size"];
        }


        $admin_id = $this->regURL(); //this is determined by url owner while 1 = super admin
        $generalinfo['user'] = Auth::user();
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');

        $generalinfo['totalusers'] = User::where('role_id', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totalstaffs'] = User::where('role_id', 'NOT LIKE', 1)->where('role_id', 'NOT LIKE', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_houses'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands_bought'] = 0;
        $generalinfo['total_houses_bought'] = 0;
        $generalinfo['total_instalment'] = 0;
        $generalinfo['totalrevenue'] = Daomniorder::where('id', '>', 0)->sum('price_pay');

        $user_role = $getRole = Daomnirole::where('id', Auth::user()->role_id)->value("role");
        $generalinfo['title'] = '::' . ucfirst(strtolower($user_role)) . ' home';

        $generalinfo['role'] = $user_role;
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['lands'] = Daomnilandtypes::where('admin_id', $admin_id)->get();

        foreach ($userLand as $key => $value) {
            if ($value->land_name == null) {
                unset($userLand[$key]);
            }
            if (strpos(strtolower($value->land_name), $name) !== false) {
            } else {
                unset($userLand[$key]);
            }
        }


        return view('admin/my_lands', [
            "name" => $name,
            "userLands" => $userLand,
            "generalinfo" => $generalinfo, "role" => $user_role, "user" => $user,
            "totaladmins" => $generalinfo['totaladmins'], "totalstaffs" => $generalinfo["totalstaffs"],
            "totalusers" => $generalinfo["totalusers"], "total_lands" => $generalinfo["total_lands"],
            "total_lands_bought" => $generalinfo["total_lands_bought"],
            "total_houses" => $generalinfo["total_houses"],
            "total_houses_bought" => $generalinfo["total_houses_bought"],
            "total_instalment" => $generalinfo["total_instalment"],
            "totalrevenue" => $generalinfo["totalrevenue"],
            "siteinfos" => $generalinfo["siteinfos"],
            "title" => $generalinfo["title"]
        ]);
    }

    public function myHouse(Request $request, $name)
    {

        $user = auth()->user();
        $userLand = Daomniorder::select('id', 'user_id', 'order_price', 'payment_plan', 'daomnilandtypes_id', 'status', 'created_at')->where(['user_id' => $user->id, "group" => "Houses", "status" => "confirmed"])->get();

        foreach ($userLand as $landOrder) {
            $land = Daomnilandtypes::select('lands_name', 'lands_size')
                ->where("id", $landOrder['daomnilandtypes_id'],)
                ->first();

            $landOrder->land_name = $land["lands_name"];
            $landOrder->land_size = $land["lands_size"];
        }


        $admin_id = $this->regURL(); //this is determined by url owner while 1 = super admin
        $generalinfo['user'] = Auth::user();
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');

        $generalinfo['totalusers'] = User::where('role_id', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totalstaffs'] = User::where('role_id', 'NOT LIKE', 1)->where('role_id', 'NOT LIKE', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_houses'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands_bought'] = 0;
        $generalinfo['total_houses_bought'] = 0;
        $generalinfo['total_instalment'] = 0;
        $generalinfo['totalrevenue'] = Daomniorder::where('id', '>', 0)->sum('price_pay');

        $user_role = $getRole = Daomnirole::where('id', Auth::user()->role_id)->value("role");
        $generalinfo['title'] = '::' . ucfirst(strtolower($user_role)) . ' home';

        $generalinfo['role'] = $user_role;
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['lands'] = Daomnilandtypes::where('admin_id', $admin_id)->get();

        foreach ($userLand as $key => $value) {
            if ($value->land_name == null) {
                unset($userLand[$key]);
            }
            if (strpos(strtolower($value->land_name), $name) !== false) {
            } else {
                unset($userLand[$key]);
            }
        }


        return view('admin/my_house', [
            "name" => $name,
            "userLands" => $userLand,
            "generalinfo" => $generalinfo, "role" => $user_role, "user" => $user,
            "totaladmins" => $generalinfo['totaladmins'], "totalstaffs" => $generalinfo["totalstaffs"],
            "totalusers" => $generalinfo["totalusers"], "total_lands" => $generalinfo["total_lands"],
            "total_lands_bought" => $generalinfo["total_lands_bought"],
            "total_houses" => $generalinfo["total_houses"],
            "total_houses_bought" => $generalinfo["total_houses_bought"],
            "total_instalment" => $generalinfo["total_instalment"],
            "totalrevenue" => $generalinfo["totalrevenue"],
            "siteinfos" => $generalinfo["siteinfos"],
            "title" => $generalinfo["title"]
        ]);
    }

    public function landSubscription()
    {

        $user = auth()->user();

        $landSubscription = Daomniorder::select(
            'id',
            'user_id',
            'order_price',
            'payment_plan',
            'pay_monthly',
            'daomnilandtypes_id',
            'status',
            'price_pay',
            'created_at'
        )
            ->where(['user_id' => $user->id, "group" => "Lands", "status" =>
            "standby", "payment_plan" => "installments"])->get();

        foreach ($landSubscription as $landOrder) {
            $land = Daomnilandtypes::select('lands_name', 'lands_size')
                ->where("id", $landOrder['daomnilandtypes_id'],)
                ->first();
            $landOrder->land_name = $land["lands_name"];
            $landOrder->land_size = $land["lands_size"];
        }


        $admin_id = $this->regURL(); //this is determined by url owner while 1 = super admin
        $generalinfo['user'] = Auth::user();
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');

        $generalinfo['totalusers'] = User::where('role_id', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totalstaffs'] = User::where('role_id', 'NOT LIKE', 1)->where('role_id', 'NOT LIKE', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_houses'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands_bought'] = 0;
        $generalinfo['total_houses_bought'] = 0;
        $generalinfo['total_instalment'] = 0;
        $generalinfo['totalrevenue'] = Daomniorder::where('id', '>', 0)->sum('price_pay');

        $user_role = $getRole = Daomnirole::where('id', Auth::user()->role_id)->value("role");
        $generalinfo['title'] = '::' . ucfirst(strtolower($user_role)) . ' home';

        $generalinfo['role'] = $user_role;
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['lands'] = Daomnilandtypes::where('admin_id', $admin_id)->get();




        return view('admin/land_subscription', [

            "landSubscription" => $landSubscription,
            "generalinfo" => $generalinfo, "role" => $user_role, "user" => $user,
            "totaladmins" => $generalinfo['totaladmins'], "totalstaffs" => $generalinfo["totalstaffs"],
            "totalusers" => $generalinfo["totalusers"], "total_lands" => $generalinfo["total_lands"],
            "total_lands_bought" => $generalinfo["total_lands_bought"],
            "total_houses" => $generalinfo["total_houses"],
            "total_houses_bought" => $generalinfo["total_houses_bought"],
            "total_instalment" => $generalinfo["total_instalment"],
            "totalrevenue" => $generalinfo["totalrevenue"],
            "siteinfos" => $generalinfo["siteinfos"],
            "title" => $generalinfo["title"]
        ]);
    }

    public function houseSubscription()
    {

        $user = auth()->user();
        $houseSubscription = Daomniorder::select(
            'id',
            'user_id',
            'order_price',
            'payment_plan',
            'pay_monthly',
            'daomnilandtypes_id',
            'status',
            'price_pay',
            'created_at'
        )
            ->where(['user_id' => $user->id, "group" => "Houses", "status" =>
            "standby", "payment_plan" => "installments"])->get();

        foreach ($houseSubscription as $landOrder) {
            $land = Daomnilandtypes::select('lands_name', 'lands_size')
                ->where("id", $landOrder['daomnilandtypes_id'],)
                ->first();
            $landOrder->land_name = $land["lands_name"];
            $landOrder->land_size = $land["lands_size"];
        }


        $admin_id = $this->regURL(); //this is determined by url owner while 1 = super admin
        $generalinfo['user'] = Auth::user();
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');

        $generalinfo['totalusers'] = User::where('role_id', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totalstaffs'] = User::where('role_id', 'NOT LIKE', 1)->where('role_id', 'NOT LIKE', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_houses'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands_bought'] = 0;
        $generalinfo['total_houses_bought'] = 0;
        $generalinfo['total_instalment'] = 0;
        $generalinfo['totalrevenue'] = Daomniorder::where('id', '>', 0)->sum('price_pay');

        $user_role = $getRole = Daomnirole::where('id', Auth::user()->role_id)->value("role");
        $generalinfo['title'] = '::' . ucfirst(strtolower($user_role)) . ' home';

        $generalinfo['role'] = $user_role;
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['lands'] = Daomnilandtypes::where('admin_id', $admin_id)->get();




        return view('admin/house_subscription', [

            "houseSubscription" => $houseSubscription,
            "generalinfo" => $generalinfo, "role" => $user_role, "user" => $user,
            "totaladmins" => $generalinfo['totaladmins'], "totalstaffs" => $generalinfo["totalstaffs"],
            "totalusers" => $generalinfo["totalusers"], "total_lands" => $generalinfo["total_lands"],
            "total_lands_bought" => $generalinfo["total_lands_bought"],
            "total_houses" => $generalinfo["total_houses"],
            "total_houses_bought" => $generalinfo["total_houses_bought"],
            "total_instalment" => $generalinfo["total_instalment"],
            "totalrevenue" => $generalinfo["totalrevenue"],
            "siteinfos" => $generalinfo["siteinfos"],
            "title" => $generalinfo["title"]
        ]);
    }
    public function uploadPaymentUnderProcess(Request $request, $id)
    {


        $user = auth()->user();
        $user->password = null;
        $admin_id = $this->regURL(); //this is determined by url owner while 1 = super admin
        $generalinfo['user'] = Auth::user();
        $user = Auth::user();
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');

        $generalinfo['totalusers'] = User::where('role_id', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totalstaffs'] = User::where('role_id', 'NOT LIKE', 1)->where('role_id', 'NOT LIKE', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_houses'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands_bought'] = 0;
        $generalinfo['total_houses_bought'] = 0;
        $generalinfo['total_instalment'] = 0;
        $generalinfo['totalrevenue'] = Daomniorder::where('id', '>', 0)->sum('price_pay');

        $user_role = $getRole = Daomnirole::where('id', Auth::user()->role_id)->value("role");
        $generalinfo['title'] = '::' . ucfirst(strtolower($user_role)) . ' home';

        $generalinfo['role'] = $user_role;

        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['lands'] = Daomnilandtypes::where('admin_id', $admin_id)->get();

        $userInfo = $user;


        return view('admin/upload_payment', [
            "id" => $id,
            "userInfo" => $userInfo,
            "generalinfo" => $generalinfo, "role" => $user_role, "user" => $user,
            "totaladmins" => $generalinfo['totaladmins'], "totalstaffs" => $generalinfo["totalstaffs"],
            "totalusers" => $generalinfo["totalusers"], "total_lands" => $generalinfo["total_lands"],
            "total_lands_bought" => $generalinfo["total_lands_bought"],
            "total_houses" => $generalinfo["total_houses"],
            "total_houses_bought" => $generalinfo["total_houses_bought"],
            "total_instalment" => $generalinfo["total_instalment"],
            "totalrevenue" => $generalinfo["totalrevenue"],
            "siteinfos" => $generalinfo["siteinfos"],
            "title" => $generalinfo["title"]
        ]);
    }

    public function storePaymentUnderProcess(Request $request, $id)
    {
        $admin_id = $this->regURL(); //this is determined by url owner while 1 = super admin
        $generalinfo['user'] = Auth::user();
        $user = Auth::user();
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');

        $generalinfo['totalusers'] = User::where('role_id', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totalstaffs'] = User::where('role_id', 'NOT LIKE', 1)->where('role_id', 'NOT LIKE', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_houses'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands_bought'] = 0;
        $generalinfo['total_houses_bought'] = 0;
        $generalinfo['total_instalment'] = 0;
        $generalinfo['totalrevenue'] = Daomniorder::where('id', '>', 0)->sum('price_pay');

        $user_role = $getRole = Daomnirole::where('id', Auth::user()->role_id)->value("role");
        $generalinfo['title'] = '::' . ucfirst(strtolower($user_role)) . ' home';

        $generalinfo['role'] = $user_role;

        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['lands'] = Daomnilandtypes::where('admin_id', $admin_id)->get();

        $user_id = auth()->user()->id;

        $orderPayment = Daomniorder::where('id', $id)->first();

        $request->validate([
            'file' => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);
        $fileName = time() . rand(0000, 99999) . '.' . $request->file->extension();
        //user_id	admin_id	payment_plan	order_id	payment_type	amount_pay	payment_status	payment_mode	payment_document	confirmed_by

        $result = PaymentUnderProcess::create([
            "user_id" => $user_id, "admin_id" => $admin_id["admin_id"], "payment_plan" => $orderPayment->payment_plan,
            "order_id" => $orderPayment->id, "payment_type" => $orderPayment->payment_type,
            "amount_pay" => $orderPayment->price_pay, "payment_status" => $orderPayment->status,
            "approval_status" => "Pending",
            "payment_mode" => $orderPayment->payment_mode,
            "payment_document" => $fileName,
        ]);

        if ($result) {
            $request->file->move(public_path('uploads/documents'), $fileName);
            return Redirect::back()
                ->with('success', 'Payment document uploaded successfully ');
        } else {
            return Redirect::back()
                ->with('error', 'unable to upload document');
        }
    }




    public function viewAllPaymentDocument()
    {
        $paymentUnderProcessList = PaymentUnderProcess::all();

        $user = auth()->user();
        $user->password = null;
        $admin_id = $this->regURL(); //this is determined by url owner while 1 = super admin
        $generalinfo['user'] = Auth::user();
        $user = Auth::user();
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');

        $generalinfo['totalusers'] = User::where('role_id', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totalstaffs'] = User::where('role_id', 'NOT LIKE', 1)->where('role_id', 'NOT LIKE', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_houses'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands_bought'] = 0;
        $generalinfo['total_houses_bought'] = 0;
        $generalinfo['total_instalment'] = 0;
        $generalinfo['totalrevenue'] = Daomniorder::where('id', '>', 0)->sum('price_pay');

        $user_role = $getRole = Daomnirole::where('id', Auth::user()->role_id)->value("role");
        $generalinfo['title'] = '::' . ucfirst(strtolower($user_role)) . ' home';

        $generalinfo['role'] = $user_role;

        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['lands'] = Daomnilandtypes::where('admin_id', $admin_id)->get();

        $userInfo = $user;


        return view('admin/payment_process_list', [
            "userInfo" => $userInfo,
            "paymentUnderProcessList" => $paymentUnderProcessList,
            "generalinfo" => $generalinfo, "role" => $user_role, "user" => $user,
            "totaladmins" => $generalinfo['totaladmins'], "totalstaffs" => $generalinfo["totalstaffs"],
            "totalusers" => $generalinfo["totalusers"], "total_lands" => $generalinfo["total_lands"],
            "total_lands_bought" => $generalinfo["total_lands_bought"],
            "total_houses" => $generalinfo["total_houses"],
            "total_houses_bought" => $generalinfo["total_houses_bought"],
            "total_instalment" => $generalinfo["total_instalment"],
            "totalrevenue" => $generalinfo["totalrevenue"],
            "siteinfos" => $generalinfo["siteinfos"],
            "title" => $generalinfo["title"]
        ]);
    }
    public function myPayment()
    {
        $user = auth()->user();

        $myPayments = PaymentUnderProcess::where("user_id", $user->id)->get();
        $admin_id = $this->regURL(); //this is determined by url owner while 1 = super admin
        $generalinfo['user'] = Auth::user();
        $user = Auth::user();
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');

        $generalinfo['totalusers'] = User::where('role_id', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totalstaffs'] = User::where('role_id', 'NOT LIKE', 1)->where('role_id', 'NOT LIKE', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_houses'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands_bought'] = 0;
        $generalinfo['total_houses_bought'] = 0;
        $generalinfo['total_instalment'] = 0;
        $generalinfo['totalrevenue'] = Daomniorder::where('id', '>', 0)->sum('price_pay');

        $user_role = $getRole = Daomnirole::where('id', Auth::user()->role_id)->value("role");
        $generalinfo['title'] = '::' . ucfirst(strtolower($user_role)) . ' home';

        $generalinfo['role'] = $user_role;

        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['lands'] = Daomnilandtypes::where('admin_id', $admin_id)->get();

        $userInfo = $user;


        return view('admin/my_payments', [
            "userInfo" => $userInfo,
            "myPayments" => $myPayments,
            "generalinfo" => $generalinfo, "role" => $user_role, "user" => $user,
            "totaladmins" => $generalinfo['totaladmins'], "totalstaffs" => $generalinfo["totalstaffs"],
            "totalusers" => $generalinfo["totalusers"], "total_lands" => $generalinfo["total_lands"],
            "total_lands_bought" => $generalinfo["total_lands_bought"],
            "total_houses" => $generalinfo["total_houses"],
            "total_houses_bought" => $generalinfo["total_houses_bought"],
            "total_instalment" => $generalinfo["total_instalment"],
            "totalrevenue" => $generalinfo["totalrevenue"],
            "siteinfos" => $generalinfo["siteinfos"],
            "title" => $generalinfo["title"]
        ]);
    }

    public function viewSinglePaymentDocument(Request $request, $id)
    {
        //$updateRequestList = RequestNameUpdate::all();

        $paymentProcessDocument = PaymentUnderProcess::where('id', $id)->first();

        $admin_id = $this->regURL(); //this is determined by url owner while 1 = super admin
        $generalinfo['user'] = Auth::user();
        $user = Auth::user();
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');

        $generalinfo['totalusers'] = User::where('role_id', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totalstaffs'] = User::where('role_id', 'NOT LIKE', 1)->where('role_id', 'NOT LIKE', 3)->orderBy('id', 'desc')->count('id');
        $generalinfo['totaladmins'] = User::where('role_id', 2)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_houses'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['total_lands_bought'] = 0;
        $generalinfo['total_houses_bought'] = 0;
        $generalinfo['total_instalment'] = 0;
        $generalinfo['totalrevenue'] = Daomniorder::where('id', '>', 0)->sum('price_pay');

        $user_role = $getRole = Daomnirole::where('id', Auth::user()->role_id)->value("role");
        $generalinfo['title'] = '::' . ucfirst(strtolower($user_role)) . ' home';

        $generalinfo['role'] = $user_role;

        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');
        $generalinfo['lands'] = Daomnilandtypes::where('admin_id', $admin_id)->get();



        return view('admin/payment_process_single', [
            "paymentProcessDocument" => $paymentProcessDocument,
            "generalinfo" => $generalinfo, "role" => $user_role, "user" => $user,
            "totaladmins" => $generalinfo['totaladmins'], "totalstaffs" => $generalinfo["totalstaffs"],
            "totalusers" => $generalinfo["totalusers"], "total_lands" => $generalinfo["total_lands"],
            "total_lands_bought" => $generalinfo["total_lands_bought"],
            "total_houses" => $generalinfo["total_houses"],
            "total_houses_bought" => $generalinfo["total_houses_bought"],
            "total_instalment" => $generalinfo["total_instalment"],
            "totalrevenue" => $generalinfo["totalrevenue"],
            "siteinfos" => $generalinfo["siteinfos"],
            "title" => $generalinfo["title"]
        ]);
    }

    public function confirmPaymentDocument(Request $request, $id)
    {
        $request->validate([
            "action" => "required"
        ]);

        $action = $request->action;
        $admin_id = $this->regURL(); //this is determined by url owner while 1 = super admin
        $order_id = PaymentUnderProcess::where('id', $id)->value('order_id');
        $user_id = PaymentUnderProcess::where('id', $id)->value('user_id');

        $orderPayment = Daomniorder::where('id', $id)->first();

        $admin = "admin_id=" . $admin_id["admin_id"];
        if ($action == "approve") {
            $result = Daomniorder::where('id', $order_id)
                ->update(["status" => "confirmed", "payment_mode" => $admin, "transaction_reference" => $admin]);
            if ($result) {
                PaymentUnderProcess::where('id', $id)->update(["payment_mode" => $admin, "approval_status" => $action, "confirmed_by" => $admin]);
                PaymentProcesses::create([
                    "user_id" => $user_id, "admin_id" => $admin_id["admin_id"], "payment_plan" => $orderPayment->payment_plan,
                    "order_id" => $orderPayment->id, "payment_type" => $orderPayment->payment_type,
                    "amount_pay" => $orderPayment->price_pay,
                    "payment_status" => $orderPayment->status,
                    "payment_mode" => $admin, "approval_status" => $action, "confirmed_by" => $admin
                ]);

                return Redirect::back()
                    ->with('success', 'Payment document approved successfully ');
            } else {
                return Redirect::back()
                    ->with('error', 'unable to confirm payment document');
            }
        } else {
            $decline =  PaymentUnderProcess::where('id', $id)->update(['approval_status' => $action, "confirmed_by" => $admin]);
            if ($decline) {
                return Redirect::back()
                    ->with('success', 'Payment document declined successfully ');
            } else {
                return Redirect::back()
                    ->with('error', 'unable to decline payment document');
            }
        }
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
}
