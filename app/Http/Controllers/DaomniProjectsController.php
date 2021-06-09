<?php

namespace App\Http\Controllers;

use App\Daomniorder;
use App\DaomniprojectImage;
use App\Daomniprojects;
use App\Daomnirole;
use App\Daomnisettingsiteinfos;
use App\User;
use Auth;
use Illuminate\Http\Request;

class DaomniProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function landGrowth()
    {
        $generalinfo['total_lands'] = Daomniorder::where('id', '>', 0)->orderBy('id', 'desc')->count('id');

        return view('admin/view_land_growth', $generalinfo);
    }

    public function projectLand()
    {
        //
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
            ->select([
                "daomniorders.firstname", "daomniorders.lastname", "daomniorders.payment_plan", "daomniorders.order_price", "daomniorders.price_pay", "daomniorders.created_at", "daomni_landtypes.lands_name"
            ])->get();
        $generalinfo['projects'] = Daomniprojects::where("project_type", "land")->get();
        return view('admin/availableland', $generalinfo);
    }

    public function projectHouse()
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
            ->select([
                "daomniorders.firstname", "daomniorders.lastname", "daomniorders.payment_plan", "daomniorders.order_price", "daomniorders.price_pay", "daomniorders.created_at", "daomni_landtypes.lands_name"
            ])->get();

        $generalinfo['projects'] = Daomniprojects::where("project_type", "house")->get();
        return view('admin/availablehouse', $generalinfo);
    }

    public function addprojectLand()
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
            ->select([
                "daomniorders.firstname", "daomniorders.lastname", "daomniorders.payment_plan", "daomniorders.order_price", "daomniorders.price_pay", "daomniorders.created_at", "daomni_landtypes.lands_name"
            ])->get();

        return view('admin/add_land', $generalinfo);
    }

    public function addprojectHouse()
    {
        //
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
            ->select([
                "daomniorders.firstname", "daomniorders.lastname", "daomniorders.payment_plan", "daomniorders.order_price", "daomniorders.price_pay", "daomniorders.created_at", "daomni_landtypes.lands_name"
            ])->get();

        return view('admin/add_house', $generalinfo);
    }

    public function addLand(Request $request)
    {
        $project = Daomniprojects::create([
            'project_title' => $request->title,
            'project_details' => $request->details,
            'project_cost' => $request->cost,
            'project_price' => $request->price,
            'project_type' => "land",
            'feature_image' => "null",
        ]);
        $project->save();
        $this->uploadImage($request, $project->id);
        return back()->with('status', 'New project added successfully');
    }

    public function addHouse(Request $request)
    {
        $project = Daomniprojects::create([
            'project_title' => $request->title,
            'project_details' => $request->details,
            'project_cost' => $request->cost,
            'project_price' => $request->price,
            'project_type' => "house",
            'feature_image' => "null",
        ]);
        $project->save();
        $this->uploadImage($request, $project->id);
        return back()->with('status', 'New project added successfully');
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

    public function uploadImage($request, $projectid)
    {
        if ($request->hasfile('project_image')) {
            // Get image file
            $feature_image = "";
            $imgname = str_replace(' ', '', $request->title);
            $folder = 'frontend/images/projects/';
            foreach ($request->file('project_image') as $file) {
                $feature_image = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                $file->move($folder, $feature_image);
                $imgPath = $folder . $feature_image;
                $projectimg = DaomniprojectImage::create([
                    'project_id' => $projectid,
                    'project_image_link' => $imgPath,
                ]);
                $projectimg->save();
            }
            $project = Daomniprojects::where("id", $projectid)->first();
            $project->feature_image = $folder . $feature_image;
            $project->update();
        }
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
     * @param  \App\daomni_projects  $daomni_projects
     * @return \Illuminate\Http\Response
     */
    public function show(daomni_projects $daomni_projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\daomni_projects  $daomni_projects
     * @return \Illuminate\Http\Response
     */
    public function edit(daomni_projects $daomni_projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\daomni_projects  $daomni_projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, daomni_projects $daomni_projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\daomni_projects  $daomni_projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(daomni_projects $daomni_projects)
    {
        //
    }
}
