<?php

namespace App\Http\Controllers;

use App\User;
use App\Daomnirole;
use App\Daomniorder;
use App\Daomnilandtypes;
use Illuminate\Http\Request;
use App\Daomnisettingsiteinfos;
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
        return view("admin.view_profile", $generalinfo);
    }

    public function update(Request $request)
    {
        $id = auth()->user()->id;
        $mstatus = $request->mstatus;
        $gender = $request->gender;
        $city = $request->city;
        $country = $request->country;

        $updateUser = User::where('id', $id)->update(["gender" => $gender, "mstatus" => $mstatus, "city" => $city, "country" => $country]);
        if ($updateUser) {
            return Redirect::back()->with('msg', 'Updated successfully,');
        } else {
            return Redirect::back()->with('msg', 'fail to update information');
        }
    }

    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);

        $fileName = time() . rand(0000, 99999) . '.' . $request->file->extension();
        $request->file->move(public_path('uploads'), $fileName);

        $id = auth()->user()->id;
        $profile = User::where('id', $id)->update(array('photo' => $fileName));
        if ($profile) {
            return Redirect::to('/profile')
                ->with('success', 'You have successfully updated your Photo');
        } else {
            return Redirect::to('/profile')
                ->with('error', 'unable to update your Photo.');
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
