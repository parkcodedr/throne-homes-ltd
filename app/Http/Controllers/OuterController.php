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

use App\Helpers\HelperClass;
use App\DaomniprojectImage;
use App\Daomniprojects;
use App\Daomniorder;
use App\DaomniInfluentialcoupons;
use App\Daomnilanddetailimage;
use App\Daomniadditionalfacilitiesrate;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Hash;
class OuterController extends Controller
{
    public function index()
    {
        $generalinfo['title'] = '::Home';
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $this->addDaomnirole($admin_id); //to generate roles
        $generalinfo['user_logon'] = $this->regURL()['user_logon'];
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['navs'] = $this->getNavsextract($admin_id);
        $generalinfo['modaldiscount'] = $this->getModaldiscountextract($admin_id);
        $generalinfo['sliders'] = $this->getSliderextract($admin_id);
        $generalinfo['terms_conditions'] = $this->getTermsConditionsextract($admin_id);
        $generalinfo['DataSynchronization'] = $this->DataSynchronization();
        $generalinfo['discountpercent'] = '0';
        $generalinfo['group'] = 'lands'; //this is to feed slider form, and this is for rooms
        $generalinfo['indexabout'] = $this->getDaomnisettingindexaboutextract($admin_id);
        $generalinfo['indexlands'] = $this->getIndexlandsextract($admin_id);
        $generalinfo['lands'] = $this->getLandsextract($admin_id);
        $generalinfo['services'] = $this->getDaomnisettingserviceextract($admin_id);
        $generalinfo['foot_lands'] = $this->getLandsextract($admin_id);
        $generalinfo['source'] = $this->getUserAgent2()["source"];
        return view('home/index', $generalinfo);
    }

    public function getLands()
    {
        $generalinfo['title'] = '::Lands';
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $generalinfo['user_logon'] = $this->regURL()['user_logon'];
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['navs'] = $this->getNavsextract($admin_id);
        $generalinfo['lands'] = $this->getLandsextract($admin_id);
        $generalinfo['group'] = 'lands';
        $generalinfo['indexlands'] = $this->getIndexlandsextract($admin_id);
        $generalinfo['indexabout'] = $this->getDaomnisettingindexaboutextract($admin_id);
        $generalinfo['foot_lands'] = $this->getLandsextract($admin_id);
        $generalinfo['source'] = $this->getUserAgent2()["source"];
        //$generalinfo['DataSynchronization'] = $this->DataSynchronization();
        return view('home/lands', $generalinfo);
    }

    public function getHouses()
    {
        $generalinfo['title'] = '::Houses';
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $generalinfo['user_logon'] = $this->regURL()['user_logon'];
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['navs'] = $this->getNavsextract($admin_id);
        $generalinfo['houses'] = $this->getHousesextract($admin_id);
        $generalinfo['group'] = 'houses';
        $generalinfo['indexlands'] = $this->getIndexlandsextract($admin_id);
        $generalinfo['indexabout'] = $this->getDaomnisettingindexaboutextract($admin_id);
        $generalinfo['foot_lands'] = $this->getLandsextract($admin_id);
        $generalinfo['source'] = $this->getUserAgent2()["source"];
        //$generalinfo['DataSynchronization'] = $this->DataSynchronization();
        return view('home/houses', $generalinfo);
    }

    public function getLandsdetails($landstype_id)
    {
        $generalinfo['title'] = '::Houses';
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $generalinfo['landstype_id'] = $landstype_id;
        $generalinfo['daomnilandcontent'] = $this->getDaomnilandtypes($landstype_id);
        $generalinfo['lands_location'] = $generalinfo['daomnilandcontent']->lands_location;
        $generalinfo['count_lands_in_a_location'] = $this->countLand_in_a_Locationextract($generalinfo['lands_location']);
        $generalinfo['landhousefrontview'] = $this->LandHouseFrontView($landstype_id);
        $generalinfo['landhousebackview'] = $this->LandHouseBackView($landstype_id);
        $generalinfo['countlandorders'] = $this->CountLandOrder($landstype_id);
        $generalinfo['bestfor'] = $this->getBestfor($landstype_id);
        $generalinfo['landinformations'] = $this->getLandInformations($landstype_id);
        $generalinfo['buildingspecification'] = $this->getBuildingSpecification($landstype_id);
        $generalinfo['floorplanimage'] = $this->FloorPlanImage($landstype_id);
        $generalinfo['groundfloorplanimage'] = $this->GroundFloorPlanImage($landstype_id);
        $generalinfo['user_logon'] = $this->regURL()['user_logon'];
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['navs'] = $this->getNavsextract($admin_id);
        $generalinfo['houses'] = $this->getHousesextract($admin_id);
        $generalinfo['group'] = 'houses';
        $generalinfo['indexlands'] = $this->getIndexlandsextract($admin_id);
        $generalinfo['indexabout'] = $this->getDaomnisettingindexaboutextract($admin_id);
        $generalinfo['foot_lands'] = $this->getLandsextract($admin_id);
        $generalinfo['lands'] = $this->getLandsextract($admin_id);
        $generalinfo['source'] = $this->getUserAgent2()["source"];
        //$generalinfo['DataSynchronization'] = $this->DataSynchronization();
        return view('home/land_details', $generalinfo);
    }

    public function getHousesdetails($housestype_id)
    {
        return "Thanks, we are working on it @ House Details";
        // $generalinfo['title'] = '::Room Details';
        // $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        // $generalinfo['user_logon'] = $this->regURL()['user_logon'];
        // $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        // $generalinfo['navs'] = $this->getNavsextract($admin_id);
        // $generalinfo['lands'] = $this->getLandsextract($admin_id);
        // $generalinfo['group'] = 'lands';
        // $generalinfo['roomdetails'] = $this->getDetailsextract($admin_id,$roomtype_id,$generalinfo['group']);
        // $generalinfo['roomtype_id'] = $roomtype_id;
        // $generalinfo['roomservices'] = $this->getServicesextract($admin_id,$roomtype_id,$generalinfo['group']);
        // $generalinfo['roomdetailimages'] = $this->getDetailimagesextract($admin_id,$roomtype_id,$generalinfo['group']);
        // $generalinfo['countavailablerooms'] = $this->countAvailablerooms($admin_id,$roomtype_id,$generalinfo['group']);
        // $generalinfo['indexrooms'] = $this->getIndexroomsextract($admin_id);
        // $generalinfo['indexabout'] = $this->getDaomnisettingindexaboutextract($admin_id);
        // $generalinfo['discountpercent'] = '0';
        // $generalinfo['foot_rooms'] = $this->getRoomsextract($admin_id);
        $generalinfo['source'] = $this->getUserAgent2()["source"];
        // $generalinfo['DataSynchronization'] = $this->DataSynchronization();
        // return view('home/roomdetails', $generalinfo);
    }

    public function getAbout()
    {
        $generalinfo['title'] = '::About Us';
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $generalinfo['user_logon'] = $this->regURL()['user_logon'];
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['navs'] = $this->getNavsextract($admin_id);
        $generalinfo['lands'] = $this->getLandsextract($admin_id);
        $generalinfo['indexlands'] = $this->getIndexlandsextract($admin_id);
        $generalinfo['indexabout'] = $this->getDaomnisettingindexaboutextract($admin_id);
        $generalinfo['foot_lands'] = $this->getLandsextract($admin_id);
        $generalinfo['abouts'] = $this->getALLLandsextract($admin_id);
        $generalinfo['source'] = $this->getUserAgent2()["source"];
        //$generalinfo['DataSynchronization'] = $this->DataSynchronization();
        return view('home/about', $generalinfo);
    }

    public function getCovid()
    {
        $generalinfo['title'] = '::Covid-19';
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $generalinfo['user_logon'] = $this->regURL()['user_logon'];
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['navs'] = $this->getNavsextract($admin_id);
        $generalinfo['lands'] = $this->getLandsextract($admin_id);
        $generalinfo['indexlands'] = $this->getIndexlandsextract($admin_id);
        $generalinfo['indexabout'] = $this->getDaomnisettingindexaboutextract($admin_id);
        $generalinfo['foot_lands'] = $this->getLandsextract($admin_id);
        $generalinfo['pandemics'] = $this->getDaomnipandemicextract($admin_id);
        $generalinfo['source'] = $this->getUserAgent2()["source"];
        //$generalinfo['DataSynchronization'] = $this->DataSynchronization();
        return view('home/pandemic', $generalinfo);
    }

    public function getContact(Request $request)
    {
        $generalinfo['title'] = '::Contact Us';
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $generalinfo['user_logon'] = $this->regURL()['user_logon'];
        $rawdata = $request->all();
        $generalinfo['message_status'] = '';
        if (sizeof($rawdata) > 0) {
            $generalinfo['message_status'] = $this->addContactMessage($rawdata);
        }
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['navs'] = $this->getNavsextract($admin_id);
        $generalinfo['lands'] = $this->getLandsextract($admin_id);
        $generalinfo['indexlands'] = $this->getIndexlandsextract($admin_id);
        $generalinfo['indexabout'] = $this->getDaomnisettingindexaboutextract($admin_id);
        $generalinfo['foot_lands'] = $this->getLandsextract($admin_id);
        $generalinfo['source'] = $this->getUserAgent2()["source"];
        //$generalinfo['DataSynchronization'] = $this->DataSynchronization();
        return view('home/contact', $generalinfo);
    }
     public function getProjects()
    {
        $generalinfo['title'] = '::Projects';
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $generalinfo['user_logon'] = $this->regURL()['user_logon'];
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['navs'] = $this->getNavsextract($admin_id);
        $generalinfo['lands'] = $this->getLandsextract($admin_id);
        $generalinfo['indexlands'] = $this->getIndexlandsextract($admin_id);
        $generalinfo['indexabout'] = $this->getDaomnisettingindexaboutextract($admin_id);
        $generalinfo['foot_lands'] = $this->getLandsextract($admin_id);
        $generalinfo['abouts'] = $this->getALLLandsextract($admin_id);
        $generalinfo['source'] = $this->getUserAgent2()["source"];
        $generalinfo['projects'] = Daomniprojects::all();
        return view('home/project', $generalinfo);
    }
    public function getProjectdetails($project_id)
    {
        $generalinfo['title'] = '::Projects Details';
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
       
        $generalinfo['user_logon'] = $this->regURL()['user_logon'];
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['navs'] = $this->getNavsextract($admin_id);
        $generalinfo['houses'] = $this->getHousesextract($admin_id);
        $generalinfo['group'] = 'houses';
        $generalinfo['indexlands'] = $this->getIndexlandsextract($admin_id);
        $generalinfo['indexabout'] = $this->getDaomnisettingindexaboutextract($admin_id);
        $generalinfo['foot_lands'] = $this->getLandsextract($admin_id);
        $generalinfo['lands'] = $this->getLandsextract($admin_id);
        $generalinfo['source'] = $this->getUserAgent2()["source"];
        $generalinfo['DataSynchronization'] = $this->DataSynchronization();
        $generalinfo['projects'] = Daomniprojects::where("id", $project_id)->first();
        $generalinfo['projectImgs'] = DaomniprojectImage::where("project_id", $project_id)->get();
        return view('home/project_details', $generalinfo);
    }
    public function confirmOrder(Request $request)
    {
        $generalinfo['title'] = '::Home';
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $this->addDaomnirole($admin_id); //to generate roles
        $generalinfo['user_logon'] = $this->regURL()['user_logon'];
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['navs'] = $this->getNavsextract($admin_id);
        $generalinfo['modaldiscount'] = $this->getModaldiscountextract($admin_id);
        $generalinfo['sliders'] = $this->getSliderextract($admin_id);
        $generalinfo['terms_conditions'] = $this->getTermsConditionsextract($admin_id);
        $generalinfo['DataSynchronization'] = $this->DataSynchronization();
        $generalinfo['discountpercent'] = '0';
        $generalinfo['group'] = 'lands'; //this is to feed slider form, and this is for rooms
        $generalinfo['indexabout'] = $this->getDaomnisettingindexaboutextract($admin_id);
        $generalinfo['indexlands'] = $this->getIndexlandsextract($admin_id);
        $generalinfo['lands'] = $this->getLandsextract($admin_id);
        $generalinfo['services'] = $this->getDaomnisettingserviceextract($admin_id);
        $generalinfo['foot_lands'] = $this->getLandsextract($admin_id);
        $generalinfo['source'] = $this->getUserAgent2()["source"];
        $orderdetails = $request;
        if ($request->hasFile('userpassport')) {
            $file = $request->file('userpassport');
            $passport = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/frontend/images/passports/', $passport);
            $imgPath = 'public/frontend/images/passports/' . $passport;
        } else {
            $imgPath = 'backend/images/placeholder.png';
        }
        if ($request->hasFile('useridphoto')) {
            $file = $request->file('useridphoto');
            $useridphoto = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/frontend/images/passports/', $useridphoto);
            $imgPathuseridphoto = 'public/frontend/images/passports/' . $useridphoto;
        } else {
            $imgPathuseridphoto = 'backend/images/placeholder.png';
        }
        //dd( $orderdetails );
        return view("home.confirm_order_form", compact('orderdetails', "imgPath", "imgPathuseridphoto"), $generalinfo);
  
    }

    public function makePayment(Request $request)
    {
        $generalinfo['title'] = '::Home';
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $this->addDaomnirole($admin_id); //to generate roles
        $generalinfo['user_logon'] = $this->regURL()['user_logon'];
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['navs'] = $this->getNavsextract($admin_id);
        $generalinfo['modaldiscount'] = $this->getModaldiscountextract($admin_id);
        $generalinfo['sliders'] = $this->getSliderextract($admin_id);
        $generalinfo['terms_conditions'] = $this->getTermsConditionsextract($admin_id);
        $generalinfo['DataSynchronization'] = $this->DataSynchronization();
        $generalinfo['discountpercent'] = '0';
        $generalinfo['group'] = 'lands'; //this is to feed slider form, and this is for rooms
        $generalinfo['indexabout'] = $this->getDaomnisettingindexaboutextract($admin_id);
        $generalinfo['indexlands'] = $this->getIndexlandsextract($admin_id);
        $generalinfo['lands'] = $this->getLandsextract($admin_id);
        $generalinfo['services'] = $this->getDaomnisettingserviceextract($admin_id);
        $generalinfo['foot_lands'] = $this->getLandsextract($admin_id);
        $generalinfo['source'] = $this->getUserAgent2()["source"];
        $orderdetails = $request;
        $generalinfo['bookings'] = $request->all();
        //getting the details of item to pay for
         $generalinfo['selectedplot_detail'] = Daomnilandtypes::where('lands_name',$generalinfo['bookings']['selectedplot'])->where('admin_id',$admin_id)->orderBy('id','desc')->first();
        //getting the details of item to pay for
        $checkuser = User::where('email',$orderdetails->emailaddress)->orderBy('id', 'desc')->count('id');
        if($checkuser<=0){
            $user = new User();
            $user->name = $orderdetails->first_name . " " . $orderdetails->last_name;
            $user->email = $orderdetails->emailaddress;
            $user->phone = $orderdetails->phonenumber;
            $user->address = $orderdetails->homeaddress;
            $user->password = Hash::make($orderdetails->phonenumber);
            $user->save();
            $userid = $user->id;
        }else{
            $checkuser = User::where('email',$orderdetails->emailaddress)->orderBy('id', 'desc')->first();
            $userid = $checkuser->id;
                
        }
        $getLastContentIDcount = Daomniorder::where('id','>',0)->orderBy('id','desc')->count('id');
        if($getLastContentIDcount<=0){
            $content_id = 1;
        }else{
            $getLastContentID = Daomniorder::where('id','>',0)->orderBy('id','desc')->first();
            $content_id = 1 + $getLastContentID->content_id;
        }
            $getlandstype = Daomnilandtypes::where('lands_name',$orderdetails->selectedplot)->orderBy('id','desc')->first();
        $order = new Daomniorder();
        $order->admin_id = $admin_id;
        $order->content_id = $content_id;
        $order->user_id = $userid;
        $order->title = $orderdetails->_title;
        $order->firstname = $orderdetails->first_name;
        $order->lastname = $orderdetails->last_name;
        $order->othername = $orderdetails->other_name;

        $order->date_of_birth = $orderdetails->d_o_b;
        $order->gender = $orderdetails->_gender;
        $order->maritalststatus = $orderdetails->_ms;

        $order->phone = $orderdetails->phonenumber;
        $order->email = $orderdetails->emailaddress;
        $order->address = $orderdetails->homeaddress;

        $order->employer = $orderdetails->_employer;
        $order->officeaddress= $orderdetails->_office;
        $order->city = $orderdetails->_city;
        $order->idtype = $orderdetails->_idtype;
        $order->idcard = $orderdetails->_idcard;
        $order->passport = $orderdetails->passport;
        $order->idpassport = $orderdetails->idpassport;

        $order->group = $getlandstype->page_name;
        $order->payment_mode = $orderdetails->payoperation;
        $order->payment_plan = $orderdetails->paymentmethod;

        $order->kin_name = $orderdetails->_kinname;
        $order->kin_relationship = $orderdetails->_relationship;
        $order->kin_phone = $orderdetails->_kinphone;
        $order->kin_email = $orderdetails->_kinemail;
        $order->kin_address = $orderdetails->_kinaddress;
        $order->kin_city = $orderdetails->_kincity;
        $order->preferred_location = $orderdetails->_preferred_location;
        $order->plot = $orderdetails->_plot;
        $order->agent = $orderdetails->_agent;

        $order->learn_about = $orderdetails->learnabout;
        $order->payment_type = $orderdetails->numbermonthpay;
        $order->order_price = $orderdetails->originalcost;
        $order->price_pay = $orderdetails->payamount;
        $order->pay_monthly = $orderdetails->paypermonth;
        $order->daomnilandtypes_id = $getlandstype->id;
        $order->save();
        $orderid = $order->id;
        $generalinfo['orderdetailsprocessed'] = Daomniorder::where('id',$orderid)->where('admin_id',$admin_id)->orderBy('id','desc')->first();
        $generalinfo['userdetails'] = User::where('id',$userid)->orderBy('id','desc')->first();
        $emailAddress = $orderdetails->emailaddress;
        $subject = "Welcome to ThroneHomes";
        $details = $orderdetails;
        $helperClass = new HelperClass();
        $sendMail = $helperClass->sendEmail($emailAddress, $subject, $details, 1);

        $subject = "Registration Details";
        $helperClass = new HelperClass();
        $sendMail = $helperClass->sendEmail($emailAddress, $subject, $details,2);
        if($orderdetails->processform=='payonline'){
            return view("home.paynow", compact('orderdetails', 'orderid'), $generalinfo);
        }
        if($orderdetails->processform=='paycash'){
            return view("home.receipt2", compact('orderdetails', 'orderid'), $generalinfo);
        }
        if($orderdetails->processform=='edit'){
                return 'editdata';
        }
    }

    public function getTerms_Conditions()
    {
        $generalinfo['title'] = '::Terms and Conditions';
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $generalinfo['user_logon'] = $this->regURL()['user_logon'];
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['navs'] = $this->getNavsextract($admin_id);
        $generalinfo['terms_conditions'] = $this->getTermsConditionsextract($admin_id);
        $generalinfo['lands'] = $this->getLandsextract($admin_id);
        $generalinfo['indexlands'] = $this->getIndexlandsextract($admin_id);
        $generalinfo['indexabout'] = $this->getDaomnisettingindexaboutextract($admin_id);
        $generalinfo['foot_lands'] = $this->getLandsextract($admin_id);
        $generalinfo['source'] = $this->getUserAgent2()["source"];
        //$generalinfo['DataSynchronization'] = $this->DataSynchronization();
        return view('home/terms_conditions', $generalinfo);
    }

    public function addContactMessage($rawdata)
    {
        $content_id = 0;
        $this->admin_id = $this->regURL()['admin_id'];
        $checkcontacts = Daomnicontact::where('admin_id', $this->admin_id)->orderBy('id', 'desc')->get();
        $contactduplicate = Daomnicontact::where('admin_id', $this->admin_id)->where('email', $rawdata['email'])->where('message', $rawdata['message'])->orderBy('id', 'desc')->get();
        if (sizeof($contactduplicate) > 0) {
            $contactduplicate = Daomnicontact::where('admin_id', $this->admin_id)->where('email', $rawdata['email'])->where('message', $rawdata['message'])->orderBy('id', 'desc')->first();
            return ["status" => "error", "message_id" => $contactduplicate->id];
        }
        if (sizeof($checkcontacts) <= 0) {
            $content_id = 1;
        }
        if (sizeof($checkcontacts) > 0) {
            $checkcontacts = Daomnicontact::where('admin_id', $this->admin_id)->orderBy('id', 'desc')->first();
            $content_id = $checkcontacts->content_id + 1;
        }
        $messagehandlers = array('admin_id', 'content_id', 'name', 'email', 'subject', 'phone', 'message', 'channel');
        if (sizeof($rawdata) > 0 && !empty($rawdata['message'])) {
            $addcontactmessage = new Daomnicontact();
        }
        foreach ($messagehandlers as $messagehandler) {
            if ($messagehandler == 'admin_id') {
                $addcontactmessage->$messagehandler = (int) $this->admin_id;
            }
            if ($messagehandler == 'content_id') {
                $addcontactmessage->$messagehandler = (int) $content_id;
            }
            if ($messagehandler == 'channel') {
                $addcontactmessage->$messagehandler = url()->current();
            }
            if ($messagehandler != 'admin_id' && $messagehandler != 'content_id' && $messagehandler != 'channel') {
                $addcontactmessage->$messagehandler = $rawdata[$messagehandler];
            }
        }
        if (sizeof($rawdata) > 0 && !empty($rawdata['message'])) {
            $addcontactmessage->save();
        }
        return ["status" => "successful", "message_id" => $addcontactmessage->id];
    }

    public function getDaomnilandtypes($landstype_id){
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $Daomnilandtypes = Daomnilandtypes::where('admin_id', $admin_id)->where('id', (int)$landstype_id)->orderBy('id', 'desc')->first();
        return $Daomnilandtypes;
    }

    public function countLand_in_a_Locationextract($lands_location){
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $count_lands = Daomnilandtypes::where('admin_id', $admin_id)->where('lands_location', $lands_location)->where('page_name', 'Lands')->orderBy('id', 'desc')->count('id');
        return $count_lands;
    }

    public function LandHouseFrontView($landstype_id){
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $LandHouseFrontView = Daomnilanddetailimage::where('admin_id', $admin_id)->where('daomnilandtypes_id', $landstype_id)->where('group', 'LandHouseFrontView')->orderBy('id', 'desc')->first();
        return $LandHouseFrontView->land_plan_images;
    }

    public function LandHouseBackView($landstype_id){
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $LandHouseBackView = Daomnilanddetailimage::where('admin_id', $admin_id)->where('daomnilandtypes_id', $landstype_id)->where('group', 'LandHouseBackView')->orderBy('id', 'desc')->first();
        return $LandHouseBackView->land_plan_images;
    }

    public function FloorPlanImage($landstype_id){
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $FloorPlanImage = Daomnilanddetailimage::where('admin_id', $admin_id)->where('daomnilandtypes_id', $landstype_id)->where('group', 'Floorplan')->orderBy('id', 'desc')->first();
        return $FloorPlanImage->land_plan_images;
    }

    public function GroundFloorPlanImage($landstype_id){
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $GroundFloorPlanImage = Daomnilanddetailimage::where('admin_id', $admin_id)->where('daomnilandtypes_id', $landstype_id)->where('group', 'Groundfloorplan')->orderBy('id', 'desc')->first();
        return $GroundFloorPlanImage->land_plan_images;
    }

    public function CountLandOrder($landstype_id){
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $CountLandOrder_ = Daomniorder::where('admin_id', $admin_id)->where('status', 'confirmed')->where('daomnilandtypes_id', $landstype_id)->where('group', 'Lands')->orderBy('id', 'desc')->count('id');
        $getDaomnilandtypes = Daomnilandtypes::where('id',$landstype_id)->orderBy('id', 'desc')->first();
        $availabletotal = (int)$getDaomnilandtypes->lands_total - $CountLandOrder_;
        return $availabletotal;
    }

    public function getBestfor($landstype_id){
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $bestfor = Daomniadditionalfacilitiesrate::where('admin_id', $admin_id)->where('daomnilandtypes_id', $landstype_id)->where('facility_name', 'Best for')->where('group', 'Lands facilities')->orderBy('id', 'desc')->first();
        return $bestfor;
    }

    public function getLandInformations($landstype_id){
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $landinfo = Daomniadditionalfacilitiesrate::where('admin_id', $admin_id)->where('daomnilandtypes_id', $landstype_id)->where('group', 'Lands facilities')->orderBy('id', 'asc')->get();
        return $landinfo;
    }

    public function getBuildingSpecification($landstype_id){
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $landinfo = Daomniadditionalfacilitiesrate::where('admin_id', $admin_id)->where('daomnilandtypes_id', $landstype_id)->where('group', 'Houses Specifications')->orderBy('id', 'asc')->get();
        return $landinfo;
    }

    public function getDaomnipandemicextract($admin_id)
    {
        $this->admin_id = $admin_id;
        $generalinfo['pandemics'] = Daomnipandemic::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->get();
        if (sizeof($generalinfo['pandemics']) <= 0) {
            $this->addDaomnipandemic($this->admin_id);
        }
        $generalinfo['pandemics'] = Daomnipandemic::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->get();
        return $generalinfo['pandemics'];
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

    public function getNavsextract($admin_id)
    {
        $this->admin_id = $admin_id;
        $generalinfo['navs'] = Daomninavigation::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->get();
        if (sizeof($generalinfo['navs']) <= 0) {
            $this->addDatatoNavigation($this->admin_id);
        }
        $generalinfo['navs'] = Daomninavigation::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->get();
        return $generalinfo['navs'];
    }

    public function getModaldiscountextract($admin_id)
    {
        $this->admin_id = $admin_id;
        $generalinfo['modaldiscount'] = Daomnidiscountmodal::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->get();
        if (sizeof($generalinfo['modaldiscount']) <= 0) {
            $this->addDaomnidiscountmodal($this->admin_id);
        }
        $generalinfo['modaldiscount'] = Daomnidiscountmodal::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->first();
        return $generalinfo['modaldiscount'];
    }

    public function getSliderextract($admin_id)
    {
        $this->admin_id = $admin_id;
        $generalinfo['sliders'] = Daomnisettingslider::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->get();
        if (sizeof($generalinfo['sliders']) <= 0) {
            $this->addDaomnisettingslider($this->admin_id);
        }
        $generalinfo['sliders'] = Daomnisettingslider::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->get();
        return $generalinfo['sliders'];
    }

    public function getTermsConditionsextract($admin_id)
    {
        $this->admin_id = $admin_id;
        $generalinfo['terms_conditions'] = Daomniadmintermsconditions::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->get();
        if (sizeof($generalinfo['terms_conditions']) <= 0) {
            $this->addDaomniadmintermsconditions($this->admin_id);
        }
        $generalinfo['terms_conditions'] = Daomniadmintermsconditions::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->get();
        return $generalinfo['terms_conditions'];
    }

    public function getDaomnisettingindexaboutextract($admin_id)
    {
        $this->admin_id = $admin_id;
        $generalinfo['indexabout'] = Daomnisettingindexabout::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->get();
        if (sizeof($generalinfo['indexabout']) <= 0) {
            $this->addDaomnisettingindexabout($this->admin_id);
        }
        $generalinfo['indexabout'] = Daomnisettingindexabout::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->first();
        return $generalinfo['indexabout'];
    }

    public function getIndexlandsextract($admin_id)
    {
        $this->admin_id = $admin_id;
        $generalinfo['indexrooms'] = Daomnisettingindexlands::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->get();
        if (sizeof($generalinfo['indexrooms']) <= 0) {
            $this->addDaomniindexlands($this->admin_id);
        }
        $generalinfo['indexrooms'] = Daomnisettingindexlands::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->first();
        return $generalinfo['indexrooms'];
    }

    public function getLandsextract($admin_id)
    {
        $this->admin_id = $admin_id;
        $generalinfo['lands'] = Daomnilandtypes::where('admin_id', $this->admin_id)->where('page_name', 'Lands')->orderBy('id', 'asc')->get();
        if (sizeof($generalinfo['lands']) <= 0) {
            $this->addDaomnilandtypes($this->admin_id);
        }
        $generalinfo['lands'] = Daomnilandtypes::where('admin_id', $this->admin_id)->where('page_name', 'Lands')->orderBy('id', 'asc')->get();
        return $generalinfo['lands'];
    }

    public function getALLLandsextract($admin_id)
    {
        $this->admin_id = $admin_id;
        $generalinfo['lands'] = Daomnilandtypes::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->get();
        if (sizeof($generalinfo['lands']) <= 0) {
            $this->addDaomnilandtypes($this->admin_id);
        }
        $generalinfo['lands'] = Daomnilandtypes::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->get();
        return $generalinfo['lands'];
    }

    public function getHousesextract($admin_id)
    {
        $this->admin_id = $admin_id;
        $generalinfo['houses'] = Daomnilandtypes::where('admin_id', $this->admin_id)->where('page_name', 'Houses')->orderBy('id', 'asc')->get();
        if (sizeof($generalinfo['houses']) <= 0) {
            $this->addDaomnilandtypes($this->admin_id);
        }
        $generalinfo['houses'] = Daomnilandtypes::where('admin_id', $this->admin_id)->where('page_name', 'Houses')->orderBy('id', 'asc')->get();
        return $generalinfo['houses'];
    }

    public function getDaomnisettingserviceextract($admin_id)
    {
        $this->admin_id = $admin_id;
        $generalinfo['services'] = Daomnisettingservice::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->get();
        if (sizeof($generalinfo['services']) <= 0) {
            $this->addDaomnisettingservice($this->admin_id);
        }
        $generalinfo['services'] = Daomnisettingservice::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->get();
        return $generalinfo['services'];
    }

    public function getIndexroomsextract($admin_id)
    {
        $this->admin_id = $admin_id;
        $generalinfo['indexrooms'] = Daomnisettingindexrooms::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->get();
        if (sizeof($generalinfo['indexrooms']) <= 0) {
            $this->addDaomniindexroom($this->admin_id);
        }
        $generalinfo['indexrooms'] = Daomnisettingindexrooms::where('admin_id', $this->admin_id)->orderBy('id', 'asc')->first();
        return $generalinfo['indexrooms'];
    }

    public function orderForm(Request $request)
    {
        $generalinfo['title'] = '::Home';
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $this->addDaomnirole($admin_id); //to generate roles
        $generalinfo['user_logon'] = $this->regURL()['user_logon'];
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['navs'] = $this->getNavsextract($admin_id);
        $generalinfo['modaldiscount'] = $this->getModaldiscountextract($admin_id);
        $generalinfo['sliders'] = $this->getSliderextract($admin_id);
        $generalinfo['terms_conditions'] = $this->getTermsConditionsextract($admin_id);
        $generalinfo['DataSynchronization'] = $this->DataSynchronization();
        $generalinfo['discountpercent'] = '0';
        $generalinfo['group'] = 'lands'; //this is to feed slider form, and this is for rooms
        $generalinfo['indexabout'] = $this->getDaomnisettingindexaboutextract($admin_id);
        $generalinfo['indexlands'] = $this->getIndexlandsextract($admin_id);
        $generalinfo['lands'] = $this->getLandsextract($admin_id);
        $generalinfo['services'] = $this->getDaomnisettingserviceextract($admin_id);
        $generalinfo['foot_lands'] = $this->getLandsextract($admin_id);
        $generalinfo['source'] = $this->getUserAgent2()["source"];
        return view("home.order_form", $generalinfo);
    }

    public function storeOrders(Request $request)
    {
        $rawdata = $request->all();
        var_dump($rawdata);
        return null;

    }

    public function getDiscount(Request $request){

        $md5Request = $request->requestmd5;
       
        if(md5(md5('advert1_discount_percent')) === $md5Request){
          
            $md5Discount= Daomnidiscountmodal::first();
            return response()->json(['discount'=>$md5Discount->advert1_discount_percent]);
        }
        
        if(md5(md5('advert2_discount_percent'))=== $md5Request){
           
            $md5Discount= Daomnidiscountmodal::first();
            return response()->json(['discount'=>$md5Discount->advert2_discount_percent]);
        }

         return response()->json(['discount'=>1]);
    }
    public function addDaomniindexlands($admin_id)
    {
        $this->admin_id = $admin_id;
        $x1x = 0;
        $checkindexlands = Daomnisettingindexlands::where('admin_id', $this->admin_id)->orderBy('id', 'desc')->get();
        if (sizeof($checkindexlands) <= 0) {
            $x1x++;
            $newDaomnisettingindexrooms = new Daomnisettingindexlands;
            $newDaomnisettingindexrooms->admin_id = $this->admin_id;
            $newDaomnisettingindexrooms->content_id = $x1x;
            $newDaomnisettingindexrooms->section_title = 'LANDS';
            $newDaomnisettingindexrooms->section_subtitle = 'Available lands';
            $newDaomnisettingindexrooms->section_lands = 'View all lands';
            $newDaomnisettingindexrooms->section_lands_link = '/lands';
            $newDaomnisettingindexrooms->save();
        }
    }

    public function addDaomnisettingsiteinfos($admin_id)
    {
        $this->admin_id = $admin_id;
        $x1x = 0;
        $x1x++;
        $newSettingSiteInfos = new Daomnisettingsiteinfos;
        $newSettingSiteInfos->admin_id = $this->admin_id;
        $newSettingSiteInfos->content_id = $x1x;
        $newSettingSiteInfos->app_name = 'Throne_Homes_Ltd';
        $newSettingSiteInfos->app_email = 'info@thronehomesltd.com';
        $newSettingSiteInfos->app_phone = '+13109125184';
        $newSettingSiteInfos->welcomenote = 'Welcome to Throne Homes Ltd';
        $newSettingSiteInfos->booking_btn = 'SUBSCRIBE NOW';
        $newSettingSiteInfos->coy_logo = 'frontend/images/thronehomes.png';
        $newSettingSiteInfos->coy_apple_icon = 'frontend/images/thronehomes.png';
        $newSettingSiteInfos->coy_icon = 'frontend/images/thronehomes.png';
        $newSettingSiteInfos->meta_keywords = 'land lands abuja lagos portharcourt ph nigeria house houses africa hospitality hotels car hire rooms halls swimming pool pools booking bookings Jumia, hotels.com vacation travel flight';
        $newSettingSiteInfos->meta_description = 'We are located at the heart of FCT in a serene environment, with many lands and houses';
        $newSettingSiteInfos->contact_label = 'Contact Info';
        $newSettingSiteInfos->coy_address = 'ABUJA OFFICE>>>Plot 232, No. 2, Leventis Building, Samuel Adesujo Ademulegun Street, Off Muhammadu Buhari Way, Central Business District, Nigeria.:::LAGOS OFFICE>>>No. 13, Olutosin Ajayi Street, Ajao Estate, Isolo, Lagos, Nigeria.:::CALIFONIA OFFICE>>>3300 W RoseCrans Ave, Suite 204, Hawthorne CA, 90250, USA.';
        $newSettingSiteInfos->coy_city = 'Abuja';
        $newSettingSiteInfos->coy_state = 'FCT';
        $newSettingSiteInfos->coy_phone_nos = '07062010348, 07062010349, 08033404715, +13109568795';
        $newSettingSiteInfos->coy_facebook = 'https://web.facebook.com/thronehomes/';
        $newSettingSiteInfos->coy_twitter = 'https://twitter.com/thronehomes';
        $newSettingSiteInfos->coy_youtube = '#';
        $newSettingSiteInfos->coy_contact_title = 'CONTACT US';
        $newSettingSiteInfos->coy_contact_subtitle = 'LET’S TALK';
        $newSettingSiteInfos->coy_contact_note = 'We are glad to have you, send us a message, we will get back to you as soon as possible.';
        $newSettingSiteInfos->coy_contact_right = 'GET IN TOUCH';
        $newSettingSiteInfos->coy_contact_rightsub = 'HOW TO FIND US';
        $newSettingSiteInfos->coy_contact_botton_name = 'SEND YOUR MESSAGE';
        $newSettingSiteInfos->coy_url = 'www.thronehomesltd.com';
        $newSettingSiteInfos->paymentgatewayroute = 'https://daomnipay.thronehomesltd.com';
        $newSettingSiteInfos->save();

        //This is to populate corresponce
        $handlers = ["info@thronehomesltd.com", "emma2474u@gmail.com", "emmanuel@throneautos.com"];
        $x1x = 0;
        foreach ($handlers as $email) {
            $x1x++;
            $newDaomnicorrespondence = new Daomnicorrespondence;
            $newDaomnicorrespondence->admin_id = $this->admin_id;
            $newDaomnicorrespondence->content_id = $x1x;
            $newDaomnicorrespondence->timing = '0';
            $newDaomnicorrespondence->email = $email;
            $newDaomnicorrespondence->display = 1;
            $newDaomnicorrespondence->save();
        }
    }

    public function addDatatoNavigation($admin_id)
    {
        $this->admin_id = $admin_id;
        $x1x = 0;
        $checknav1 = Daomninavigation::where('admin_id', $this->admin_id)->where('nav_name', 'home')->orderBy('id', 'desc')->get();
        if (sizeof($checknav1) <= 0) {
            $x1x++;
            $newnav1 = new Daomninavigation;
            $newnav1->admin_id = $this->admin_id;
            $newnav1->content_id = $x1x;
            $newnav1->nav_name = 'home';
            $newnav1->nav_link = '/index';
            $newnav1->save();
        }
        $checknav4 = Daomninavigation::where('admin_id', $this->admin_id)->where('nav_name', 'about')->orderBy('id', 'desc')->get();
        if (sizeof($checknav4) <= 0) {
            $x1x++;
            $newnav4 = new Daomninavigation;
            $newnav4->admin_id = $this->admin_id;
            $newnav4->content_id = $x1x;
            $newnav4->nav_name = 'about';
            $newnav4->nav_link = '/about';
            $newnav4->save();
        }
        $checknav2 = Daomninavigation::where('admin_id', $this->admin_id)->where('nav_name', 'properties')->orderBy('id', 'desc')->get();
        if (sizeof($checknav2) <= 0) {
            $x1x++;
            $newnav2 = new Daomninavigation;
            $newnav2->admin_id = $this->admin_id;
            $newnav2->content_id = $x1x;
            $newnav2->nav_name = 'properties';
            $newnav2->nav_link = '/#';
            $newnav2->nav_dropdown = 'dropdown';
            $newnav2->nav_submenu0= '/lands';
            $newnav2->nav_submenu1 = '/houses';
            $newnav2->save();
        }
        $checknav3 = Daomninavigation::where('admin_id', $this->admin_id)->where('nav_name', 'projects')->orderBy('id', 'desc')->get();
        if (sizeof($checknav3) <= 0) {
            $x1x++;
            $newnav3 = new Daomninavigation;
            $newnav3->admin_id = $this->admin_id;
            $newnav3->content_id = $x1x;
            $newnav3->nav_name = 'projects';
            $newnav3->nav_link = '/projects';
            $newnav3->save();
        }
        $checknav5 = Daomninavigation::where('admin_id', $this->admin_id)->where('nav_name', 'contact')->orderBy('id', 'desc')->get();
        if (sizeof($checknav5) <= 0) {
            $x1x++;
            $newnav5 = new Daomninavigation;
            $newnav5->admin_id = $this->admin_id;
            $newnav5->content_id = $x1x;
            $newnav5->nav_name = 'contact';
            $newnav5->nav_link = '/contact';
            $newnav5->save();
        }
        $checknav6 = Daomninavigation::where('admin_id', $this->admin_id)->where('nav_name', 'covid-19 safety')->orderBy('id', 'desc')->get();
        if (sizeof($checknav6) <= 0) {
            $x1x++;
            $newnav6 = new Daomninavigation;
            $newnav6->admin_id = $this->admin_id;
            $newnav6->content_id = $x1x;
            $newnav6->nav_name = 'covid-19 safety';
            $newnav6->nav_link = '/covid-19';
            $newnav6->save();
        }
        $checknav6 = Daomninavigation::where('admin_id', $this->admin_id)->where('nav_name', 'login')->orderBy('id', 'desc')->get();
        if (sizeof($checknav6) <= 0) {
            $x1x++;
            $newnav6 = new Daomninavigation;
            $newnav6->admin_id = $this->admin_id;
            $newnav6->content_id = $x1x;
            $newnav6->nav_name = 'login';
            $newnav6->nav_link = '/login';
            $newnav6->save();
        }
        $checknav6 = Daomninavigation::where('admin_id', $this->admin_id)->where('nav_name', 'become an influencer')->orderBy('id', 'desc')->get();
        if (sizeof($checknav6) <= 0) {
            $x1x++;
            $newnav6 = new Daomninavigation;
            $newnav6->admin_id = $this->admin_id;
            $newnav6->content_id = $x1x;
            $newnav6->nav_name = 'become an influencer';
            $newnav6->nav_link = '/become_an_influencer';
            $newnav6->save();
        }
    }

    public function addSuperAdmin()
    {
        $user_id = 0;
        $content_id = 0;
        $role_id = 1;
        $this->admin_id = 0;
        $email = 'emmanuel@daomnitraders.com';
        $address = 'Abuja';
        $city = 'Abuja';
        $country = 'Nigeria';
        $phone = '1234567890';
        $checkuseremail = User::where('admin_id', 0)->orderBy('id', 'desc')->get();
        if (sizeof($checkuseremail) > 0) {
            $checkuseremail = User::where('admin_id', 0)->orderBy('id', 'desc')->first();
            $user_id = $checkuseremail->id;
        }
        $userhandlers = array('role_id', 'admin_id', 'content_id', 'name', 'middlename', 'lastname', 'email', 'password', 'address', 'city', 'country', 'phone', 'channel');
        if ($user_id <= 0) {
            $adduser = new User();
            foreach ($userhandlers as $userhandler) {
                if ($userhandler == 'role_id') {
                    $adduser->$userhandler = $role_id;
                }
                if ($userhandler == 'admin_id') {
                    $adduser->$userhandler = (int) $this->admin_id;
                }
                if ($userhandler == 'content_id') {
                    $adduser->$userhandler = (int) $content_id;
                }
                if ($userhandler == 'name') {
                    $adduser->$userhandler = 'Daomnitraders';
                }
                if ($userhandler == 'middlename') {
                    $adduser->$userhandler = 'Enterprises';
                }
                if ($userhandler == 'lastname') {
                    $adduser->$userhandler = 'Limited';
                }
                if ($userhandler == 'email') {
                    $adduser->$userhandler = $email;
                }
                if ($userhandler == 'password') {
                    $adduser->$userhandler = bcrypt($phone);
                }
                if ($userhandler == 'address') {
                    $adduser->$userhandler = $address;
                }
                if ($userhandler == 'city') {
                    $adduser->$userhandler = $city;
                }
                if ($userhandler == 'country') {
                    $adduser->$userhandler = $country;
                }
                if ($userhandler == 'phone') {
                    $adduser->$userhandler = $phone;
                }
                if ($userhandler == 'channel') {
                    $adduser->$userhandler = url()->current();
                }
            }
        }
        if ($user_id == 0) {
            $adduser->save();
            $user_id = $adduser->id;
            //Adding Default Influencer Code for SuperAdmin
            $add_default_influencer_code = new DaomniInfluentialcoupons;
            $add_default_influencer_code->user_id = $adduser->id;
            $add_default_influencer_code->coupon_code = '1234567890';
            $add_default_influencer_code->allocated_percentage = '10';
            $add_default_influencer_code->enduser_percentage = '5';
            $add_default_influencer_code->save();
            //End of Adding Default Influencer Code for SuperAdmin
        }
        return $user_id;
    }

    public function addUsers($rawdata, $role_id)
    {
        $user_id = 0;
        $content_id = 0;
        $this->admin_id = $this->regURL()['admin_id'];
        $checkusers = User::where('admin_id', $this->admin_id)->orderBy('id', 'desc')->get();
        if (sizeof($checkusers) <= 0) {
            $content_id = 1;
        }
        if (sizeof($checkusers) > 0) {
            $checkusers = User::where('admin_id', $this->admin_id)->orderBy('id', 'desc')->first();
            $content_id = $checkusers->content_id + 1;
        }
        $checkuseremail = User::where('admin_id', $this->admin_id)->where('email', $rawdata['email'])->orderBy('id', 'desc')->get();
        if (sizeof($checkuseremail) <= 0 && $user_id == 0) {
            $checkuserphone = User::where('admin_id', $this->admin_id)->where('phone', $rawdata['phone'])->orderBy('id', 'desc')->get();
            if (sizeof($checkuserphone) > 0) {
                $checkuseremail_ = User::where('admin_id', $this->admin_id)->where('phone', $rawdata['phone'])->orderBy('id', 'desc')->first();
                $user_id = $checkuseremail_->id;
            }
        }
        //in a situation where the phone number has been used already and new email is used, then check phone number seperate
        $checkuserphone = User::where('admin_id', $this->admin_id)->where('phone', $rawdata['phone'])->orderBy('id', 'desc')->get();
        if (sizeof($checkuseremail) <= 0 && sizeof($checkuserphone) > 0 && $user_id == 0) {
            $checkuseremail_ = User::where('admin_id', $this->admin_id)->where('phone', $rawdata['phone'])->orderBy('id', 'desc')->first();
            $user_id = $checkuseremail_->id;
        }
        //End of in a situation where the phone number has been used already and new email is used, then check phone number seperate
        //If user exist already
        if (sizeof($checkuseremail) > 0) {
            $checkuseremail_ = User::where('admin_id', $this->admin_id)->where('email', $rawdata['email'])->orderBy('id', 'desc')->first();
            $user_id = $checkuseremail_->id;
        }
        if (sizeof($checkuserphone) > 0) {
            $checkuseremail_ = User::where('admin_id', $this->admin_id)->where('phone', $rawdata['phone'])->orderBy('id', 'desc')->first();
            $user_id = $checkuseremail_->id;
        }
        //End of if user exist already
        $userhandlers = array('role_id', 'admin_id', 'content_id', 'name', 'middlename', 'lastname', 'email', 'password', 'address', 'city', 'country', 'phone', 'channel');
        if (array_key_exists("firstname", $rawdata)) {
            $userhandlers = array('role_id', 'admin_id', 'content_id', 'firstname', 'middlename', 'lastname', 'email', 'password', 'address', 'city', 'country', 'phone', 'channel');
        }
        if (sizeof($checkuseremail) <= 0) {
            $content_id = 1;
        }
        if (sizeof($checkuseremail) > 0) {
            $content_id = $checkuseremail_->content_id + 1;
        }
        $adduser = new User();
        foreach ($userhandlers as $userhandler) {
            if (array_key_exists("name", $rawdata)) {
                if ($userhandler == 'role_id') {
                    $adduser->$userhandler = $role_id;
                }
                if ($userhandler == 'admin_id') {
                    $adduser->$userhandler = (int) $this->admin_id;
                }
                if ($userhandler == 'content_id') {
                    $adduser->$userhandler = (int) $content_id;
                }
                if ($userhandler == 'name') {
                    $name = explode(' ', $rawdata['name']);
                    $namecount3 = substr_count($rawdata['name'], ' ');
                    if ($namecount3 == 1) {
                        $adduser->$userhandler = $name[0];
                    }
                    if ($namecount3 == 2) {
                        $adduser->$userhandler = $name[0];
                    }
                }
                if ($userhandler == 'middlename') {
                    $name = explode(' ', $rawdata['name']);
                    $namecount1 = substr_count($rawdata['name'], ' ');
                    if ($namecount1 == 1) {
                        $adduser->$userhandler = '';
                    }
                    if ($namecount1 == 2) {
                        $adduser->$userhandler = $name[1];
                    }
                }
                if ($userhandler == 'lastname') {
                    $name = explode(' ', $rawdata['name']);
                    $namecount2 = substr_count($rawdata['name'], ' ');
                    if ($namecount2 == 1) {
                        $adduser->$userhandler = $name[1];
                    }
                    if ($namecount2 == 2) {
                        $adduser->$userhandler = $name[2];
                    }
                }
                if ($userhandler == 'channel') {
                    if ($rawdata['booking_type'] == 'pay_on_arrival' || $rawdata['booking_type'] == 'pay_for_booking') {
                        $adduser->$userhandler = strtolower($this->CheckLocationStatus()['status']);
                    } else {
                        $adduser->$userhandler = strtolower($this->CheckLocationStatus()['status']);
                    }
                }
                if ($userhandler == 'password') {
                    $adduser->$userhandler = bcrypt($rawdata["phone"]);
                }
                if ($userhandler != 'role_id' && $userhandler != 'admin_id' && $userhandler != 'content_id' && $userhandler != 'name' && $userhandler != 'middlename' && $userhandler != 'lastname' && $userhandler != 'password' && $userhandler != 'channel') {
                    $adduser->$userhandler = $rawdata[$userhandler];
                }
            }

            if (array_key_exists("firstname", $rawdata)) {
                if ($userhandler == 'role_id') {
                    $adduser->$userhandler = (int) $this->getRoleextract($this->admin_id); //for users
                }
                if ($userhandler == 'admin_id') {
                    $adduser->$userhandler = (int) $rawdata[$userhandler];
                }
                if ($userhandler == 'content_id') {
                    $adduser->$userhandler = (int) $rawdata[$userhandler];
                }
                if ($userhandler == 'firstname') {
                    $adduser->name = $rawdata[$userhandler];
                }
                if ($userhandler == 'middlename') {
                    $adduser->$userhandler = $rawdata[$userhandler];
                }
                if ($userhandler == 'lastname') {
                    $adduser->$userhandler = $rawdata[$userhandler];
                }
                if ($userhandler == 'channel') {
                    $adduser->$userhandler = $rawdata[$userhandler];
                }
                if ($userhandler == 'password') {
                    $adduser->$userhandler = bcrypt($rawdata["phone"]);
                }
                if ($userhandler != 'role_id' && $userhandler != 'admin_id' && $userhandler != 'content_id' && $userhandler != 'firstname' && $userhandler != 'middlename' && $userhandler != 'lastname' && $userhandler != 'password' && $userhandler != 'channel') {
                    $adduser->$userhandler = $rawdata[$userhandler];
                }
            }

        }
        if ($user_id == 0) {
            if (!empty($rawdata['roomtype'])) {
                $adduser->save();
                $user_id = $adduser->id;
            }
        }
        return $user_id;

    }

    public function addDaomnidiscountmodal($admin_id)
    {
        $this->admin_id = $admin_id;
        $x1x = 0;
        $x1x++;
        $newDiscountmodal = new Daomnidiscountmodal;
        $newDiscountmodal->admin_id = $this->admin_id;
        $newDiscountmodal->content_id = $x1x;
        $newDiscountmodal->app_loader_icon = 'frontend/images/thronehomes.png';
        $newDiscountmodal->app_modal_advert1 = 'frontend/images/advert1.jpg';
        $newDiscountmodal->app_modal_advert2 = 'frontend/images/advert2.jpg';
        $newDiscountmodal->save();
    }

    public function addDaomnisettingslider($admin_id)
    {
        $this->admin_id = $admin_id;
        $x1x = 0;
        $x1x++;
        $newDaomnisettingslider1 = new Daomnisettingslider;
        $newDaomnisettingslider1->admin_id = $this->admin_id;
        $newDaomnisettingslider1->content_id = $x1x;
        $newDaomnisettingslider1->slider_img = 'frontend/images/slider/thronehomes_4.jpg';
        $newDaomnisettingslider1->slider_caption = "DON'T WAIT TO BUY, BUY AND WAIT!";
        $newDaomnisettingslider1->slider_caption_link = '/buynow';
        $newDaomnisettingslider1->slider_caption_link_label = 'SUBSCRIBE NOW';
        $newDaomnisettingslider1->slider_last_link_1 = '/contact';
        $newDaomnisettingslider1->slider_last_label_1 = 'CONTACT US NOW';
        $newDaomnisettingslider1->slider_last_link_2 = '#';
        $newDaomnisettingslider1->slider_last_label_2 = 'THRONE INVESTMENT HOMES';
        $newDaomnisettingslider1->save();

        $x1x++;
        $newDaomnisettingslider2 = new Daomnisettingslider;
        $newDaomnisettingslider2->admin_id = $this->admin_id;
        $newDaomnisettingslider2->content_id = $x1x;
        $newDaomnisettingslider2->slider_img = 'frontend/images/slider/thronehomes_7.jpg';
        $newDaomnisettingslider2->slider_caption = '...WITH VARIETIES OF PROPERTIES...';
        $newDaomnisettingslider2->slider_caption_link = '#';
        $newDaomnisettingslider2->slider_caption_link_label = "You'll Never Forget Your Experience";
        $newDaomnisettingslider2->slider_last_link_1 = '/buynow';
        $newDaomnisettingslider2->slider_last_label_1 = 'SUBSCRIBE NOW';
        $newDaomnisettingslider2->slider_last_link_2 = '/contact';
        $newDaomnisettingslider2->slider_last_label_2 = 'CONTACT US NOW';
        $newDaomnisettingslider2->save();

        $x1x++;
        $newDaomnisettingslider3 = new Daomnisettingslider;
        $newDaomnisettingslider3->admin_id = $this->admin_id;
        $newDaomnisettingslider3->content_id = $x1x;
        $newDaomnisettingslider3->slider_img = 'frontend/images/slider/thronehomes_2.jpg';
        $newDaomnisettingslider3->slider_caption = 'ENJOY YOUR PROPERTY';
        $newDaomnisettingslider3->slider_caption_link = '#';
        $newDaomnisettingslider3->slider_caption_link_label = 'Land/House at a cheap rate';
        $newDaomnisettingslider3->slider_last_link_1 = '/buynow';
        $newDaomnisettingslider3->slider_last_label_1 = 'SUBSCRIBE NOW';
        $newDaomnisettingslider3->slider_last_link_2 = '/contact';
        $newDaomnisettingslider3->slider_last_label_2 = 'CONTACT US NOW';
        $newDaomnisettingslider3->save();
    }

    public function addDaomnirole($admin_id)
    {
        $this->admin_id = $admin_id;
        $x1x = 0;
        $checkroles0 = Daomnirole::where('role', 'super')->orderBy('id', 'desc')->get();
        if (sizeof($checkroles0) <= 0) {
            $newDaomnirole0 = new Daomnirole;
            $newDaomnirole0->admin_id = 0;
            $newDaomnirole0->content_id = $x1x;
            $newDaomnirole0->role = 'super';
            $newDaomnirole0->save();
        }

        $checkroles1 = Daomnirole::where('admin_id', $this->admin_id)->where('role', 'admin')->orderBy('id', 'desc')->get();
        if (sizeof($checkroles1) <= 0) {
            $x1x++;
            $newDaomnirole1 = new Daomnirole;
            $newDaomnirole1->admin_id = $this->admin_id;
            $newDaomnirole1->content_id = $x1x;
            $newDaomnirole1->role = 'admin';
            $newDaomnirole1->save();
        }

        $checkroles2 = Daomnirole::where('admin_id', $this->admin_id)->where('role', 'user')->orderBy('id', 'desc')->get();
        if (sizeof($checkroles2) <= 0) {
            $x1x++;
            $newDaomnirole2 = new Daomnirole;
            $newDaomnirole2->admin_id = $this->admin_id;
            $newDaomnirole2->content_id = $x1x;
            $newDaomnirole2->role = 'user';
            $newDaomnirole2->save();
        }

        $checkroles3 = Daomnirole::where('admin_id', $this->admin_id)->where('role', 'laundary')->orderBy('id', 'desc')->get();
        if (sizeof($checkroles3) <= 0) {
            $x1x++;
            $newDaomnirole3 = new Daomnirole;
            $newDaomnirole3->admin_id = $this->admin_id;
            $newDaomnirole3->content_id = $x1x;
            $newDaomnirole3->role = 'laundary';
            $newDaomnirole3->save();
        }

        $checkroles4 = Daomnirole::where('admin_id', $this->admin_id)->where('role', 'inventory')->orderBy('id', 'desc')->get();
        if (sizeof($checkroles4) <= 0) {
            $x1x++;
            $newDaomnirole4 = new Daomnirole;
            $newDaomnirole4->admin_id = $this->admin_id;
            $newDaomnirole4->content_id = $x1x;
            $newDaomnirole4->role = 'inventory';
            $newDaomnirole4->save();
        }

        $checkroles5 = Daomnirole::where('admin_id', $this->admin_id)->where('role', 'staff')->orderBy('id', 'desc')->get();
        if (sizeof($checkroles5) <= 0) {
            $x1x++;
            $newDaomnirole5 = new Daomnirole;
            $newDaomnirole5->admin_id = $this->admin_id;
            $newDaomnirole5->content_id = $x1x;
            $newDaomnirole5->role = 'staff';
            $newDaomnirole5->save();
        }

        $checkroles6 = Daomnirole::where('admin_id', $this->admin_id)->where('role', 'frontdesk')->orderBy('id', 'desc')->get();
        if (sizeof($checkroles6) <= 0) {
            $x1x++;
            $newDaomnirole6 = new Daomnirole;
            $newDaomnirole6->admin_id = $this->admin_id;
            $newDaomnirole6->content_id = $x1x;
            $newDaomnirole6->role = 'frontdesk';
            $newDaomnirole6->save();
        }

        $checkroles7 = Daomnirole::where('admin_id', $this->admin_id)->where('role', 'security')->orderBy('id', 'desc')->get();
        if (sizeof($checkroles7) <= 0) {
            $x1x++;
            $newDaomnirole7 = new Daomnirole;
            $newDaomnirole7->admin_id = $this->admin_id;
            $newDaomnirole7->content_id = $x1x;
            $newDaomnirole7->role = 'security';
            $newDaomnirole7->save();
        }

        $checkroles8 = Daomnirole::where('admin_id', $this->admin_id)->where('role', 'accounting')->orderBy('id', 'desc')->get();
        if (sizeof($checkroles8) <= 0) {
            $x1x++;
            $newDaomnirole8 = new Daomnirole;
            $newDaomnirole8->admin_id = $this->admin_id;
            $newDaomnirole8->content_id = $x1x;
            $newDaomnirole8->role = 'accounting';
            $newDaomnirole8->save();
        }

        $checkroles9 = Daomnirole::where('admin_id', $this->admin_id)->where('role', 'maintenance')->orderBy('id', 'desc')->get();
        if (sizeof($checkroles9) <= 0) {
            $x1x++;
            $newDaomnirole9 = new Daomnirole;
            $newDaomnirole9->admin_id = $this->admin_id;
            $newDaomnirole9->content_id = $x1x;
            $newDaomnirole9->role = 'maintenance';
            $newDaomnirole9->save();
        }

        $checkroles10 = Daomnirole::where('admin_id', $this->admin_id)->where('role', 'architectural')->orderBy('id', 'desc')->get();
        if (sizeof($checkroles10) <= 0) {
            $x1x++;
            $newDaomnirole10 = new Daomnirole;
            $newDaomnirole10->admin_id = $this->admin_id;
            $newDaomnirole10->content_id = $x1x;
            $newDaomnirole10->role = 'architectural';
            $newDaomnirole10->save();
        }

        $checkroles11 = Daomnirole::where('admin_id', $this->admin_id)->where('role', 'agent')->orderBy('id', 'desc')->get();
        if (sizeof($checkroles10) <= 0) {
            $x1x++;
            $newDaomnirole10 = new Daomnirole;
            $newDaomnirole10->admin_id = $this->admin_id;
            $newDaomnirole10->content_id = $x1x;
            $newDaomnirole10->role = 'agent';
            $newDaomnirole10->save();
        }
    }

    public function addDaomniadmintermsconditions($admin_id)
    {
        $this->admin_id = $admin_id;
        $x1x = 0;
        $termshandlers = array('Payment is required at least 24 hours. before coming to office for proper documentation, to confirm your purchase.', 'Confirmed payment will be fully attend to - first come , first serve.', 'We will delete unpaid order without notice to reduce workload on server', 'We open 8:00am to 5:00pm (Monday-Friday) while 10:00am to 3:00pm (Saturday)');
        foreach ($termshandlers as $termsandconditions) {
            $checktermsconditions = Daomniadmintermsconditions::where('admin_id', $this->admin_id)->where('terms_conditions', $termsandconditions)->orderBy('id', 'desc')->get();
            if (sizeof($checktermsconditions) <= 0) {
                $x1x++;
                $newDaomniadmintermsconditions = new Daomniadmintermsconditions;
                $newDaomniadmintermsconditions->admin_id = $this->admin_id;
                $newDaomniadmintermsconditions->content_id = $x1x;
                $newDaomniadmintermsconditions->terms_conditions = $termsandconditions;
                $newDaomniadmintermsconditions->save();
            }
        }
    }

    public function addDaomnisettingindexabout($admin_id)
    {
        $this->admin_id = $admin_id;
        $x1x = 0;
        $checkindexabout = Daomnisettingindexabout::where('admin_id', $this->admin_id)->orderBy('id', 'desc')->get();
        if (sizeof($checkindexabout) <= 0) {
            $x1x++;
            $newDaomnisettingindexabout = new Daomnisettingindexabout;
            $newDaomnisettingindexabout->admin_id = $this->admin_id;
            $newDaomnisettingindexabout->content_id = $x1x;
            $newDaomnisettingindexabout->section_title = 'About Us';
            $newDaomnisettingindexabout->section_subtitle = 'Welcome to Throne Investment Homes';
            $newDaomnisettingindexabout->section_branding_info = 'Throne Investment Homes is a premium real estate development and construction company driven with a quest to provide the best living experiences. Entrenched in design philosophy is excellence, technology, safety, quality and lifestyle which we believe are key to contemporary urban living. With team of professionals, we continuously push the boundaries of the real estate sector in Africa as we integrate best global industry practices in the delivery of brand promise.';
            $newDaomnisettingindexabout->section_branding_info_ext = 'Also, Throne Investment Homes is with a passion to provide the best living experiences,
the Throne Investment Homes team is now developing the most opulent
urban residential estate in Abuja.

A masterful craftsmanship of green Architecture
and Technology of different kind of lands and houses that suite your dream.';
            $newDaomnisettingindexabout->section_label = 'Read More';
            $newDaomnisettingindexabout->section_link = '/about';
            $newDaomnisettingindexabout->section_img = 'frontend/images/thronehomes.png';
            $newDaomnisettingindexabout->save();
        }
    }

    public function addDaomnilandtypes($admin_id)
    {

        //Land Section
        $landshandlers = array('CRD Lugbe 450', 'CRD Lugbe 500', 'CRD Lugbe 600', 'IDU 450', 'IDU 500', 'IDU 600', 'APO 450', 'ACO 450');
        $landsimageshandlers = array('CRD Lugbe 450' => 'CRD_LUGBE.jpg', 'CRD Lugbe 500' => 'CRD_LUGBE.jpg', 'CRD Lugbe 600' => 'CRD_LUGBE.jpg', 'IDU 450' => 'IDU_Railway_Station.jpg', 'IDU 500' => 'IDU_Railway_Station.jpg', 'IDU 600' => 'IDU_Railway_Station.jpg', 'APO 450' => 'APO_Temporary_IMAGE.jpg', 'ACO 450' => 'ACO_Temporary_IMAGE.jpg');
        $landssizeshandlers = array('CRD Lugbe 450' => '450', 'CRD Lugbe 500' => '500', 'CRD Lugbe 600' => '600', 'IDU 450' => '450', 'IDU 500' => '500', 'IDU 600' => '600', 'APO 450' => '450', 'ACO 450' => '450');
        $landslocationhandlers = array('CRD Lugbe 450' => 'Lugbe', 'CRD Lugbe 500' => 'Lugbe', 'CRD Lugbe 600' => 'Lugbe', 'IDU 450' => 'IDU', 'IDU 500' => 'IDU', 'IDU 600' => 'IDU', 'APO 450' => 'APO', 'ACO 450' => 'ACO');
        $landspriceshandlers = array('CRD Lugbe 450' => '2700000', 'CRD Lugbe 500' => '3000000', 'CRD Lugbe 600' => '3500000', 'IDU 450' => '3800000', 'IDU 500' => '4200000', 'IDU 600' => '5000000', 'APO 450' => '20000000', 'ACO 450' => '6000000');
        $landsinfrastructurehandlers = array('CRD Lugbe 450' => '1500000', 'CRD Lugbe 500' => '1500000', 'CRD Lugbe 600' => '1500000', 'IDU 450' => '1700000', 'IDU 500' => '1700000', 'IDU 600' => '1700000', 'APO 450' => '0', 'ACO 450' => '0');
        $flaticonhandlers = array('CRD Lugbe 450' => 'flaticon-tray-1', 'CRD Lugbe 500' => 'flaticon-tray-1', 'CRD Lugbe 600' => 'flaticon-tray-1', 'IDU 450' => 'flaticon-nature', 'IDU 500' => 'flaticon-nature', 'IDU 600' => 'flaticon-nature', 'APO 450' => 'flaticon-screen-1', 'ACO 450' => 'flaticon-tray-1');
        $landstotalhandlers = array('CRD Lugbe 450' => '40', 'CRD Lugbe 500' => '10', 'CRD Lugbe 600' => '16', 'IDU 450' => '810', 'IDU 500' => '200', 'IDU 600' => '250', 'APO 450' => '6', 'ACO 450' => '4');
        $targetfolderlands = 'frontend/images/properties';
        $targetfolderlands2 = 'frontend/images/properties/propertiesdetails';
        $newWidth = 1200;
        $newHeight = 700;
        $planviewWidth = 750;
        $planviewHeight = 342;
        $servicehandlers = array('double_bed', '80_sq_mt', '2_persons', 'free_internet', 'complimentary_breakfast', 'private_balcony', 'free_newspaper', 'flat_tv_screen', 'full_ac', 'beach_view', 'room_service', 'desk', 'bathroom', 'wardrobe', 'bathrobe', 'free_toiletries', 'slippers', 'satellite_channels', 'electric_kettle', 'minibar', 'refrigerator', 'wake_up_service', 'linen', 'towels');
        $floorplanhandlers = array('CRD Lugbe 450' => 'floorplan.png', 'CRD Lugbe 500' => 'floorplan.png', 'CRD Lugbe 600' => 'floorplan.png', 'IDU 450' => 'floorplan.png', 'IDU 500' => 'floorplan.png', 'IDU 600' => 'floorplan.png', 'APO 450' => 'floorplan.png', 'ACO 450' => 'floorplan.png', 'APO_5_Bedroom_Detached_Duplex' => 'floorplan.png');
        $groundfloorplanhandlers = array('CRD Lugbe 450' => 'groundfloor.png', 'CRD Lugbe 500' => 'groundfloor.png', 'CRD Lugbe 600' => 'groundfloor.png', 'IDU 450' => 'groundfloor.png', 'IDU 500' => 'groundfloor.png', 'IDU 600' => 'groundfloor.png', 'APO 450' => 'groundfloor.png', 'ACO 450' => 'groundfloor.png', 'APO_5_Bedroom_Detached_Duplex' => 'groundfloor.png');

        $housefrontviewhandlers = array('CRD Lugbe 450' => 'CRD_LUGBE_FRONT_VIEW.jpg', 'CRD Lugbe 500' => 'CRD_LUGBE_FRONT_VIEW.jpg', 'CRD Lugbe 600' => 'CRD_LUGBE_FRONT_VIEW.jpg', 'IDU 450' => 'IDU_FRONT_VIEW.jpg', 'IDU 500' => 'IDU_FRONT_VIEW.jpg', 'IDU 600' => 'IDU_FRONT_VIEW.jpg', 'APO 450' => 'APO_FRONT_VIEW.jpg', 'ACO 450' => 'ACO_FRONT_VIEW.jpg', 'APO_5_Bedroom_Detached_Duplex' => 'APO_FRONT_VIEW.jpg');
        $housebackviewhandlers = array('CRD Lugbe 450' => 'CRD_LUGBE_FRONT_VIEW.jpg', 'CRD Lugbe 500' => 'CRD_LUGBE_FRONT_VIEW.jpg', 'CRD Lugbe 600' => 'CRD_LUGBE_FRONT_VIEW.jpg', 'IDU 450' => 'IDU_FRONT_VIEW.jpg', 'IDU 500' => 'IDU_FRONT_VIEW.jpg', 'IDU 600' => 'IDU_FRONT_VIEW.jpg', 'APO 450' => 'APO_FRONT_VIEW.jpg', 'ACO 450' => 'ACO_FRONT_VIEW.jpg', 'APO_5_Bedroom_Detached_Duplex' => 'APO_FRONT_VIEW.jpg');

        $roomnumbershandlers = array('CRD Lugbe 450' => '3', 'CRD Lugbe 500' => '4', 'CRD Lugbe 600' => '4', 'IDU 450' => '3', 'IDU 500' => '4', 'IDU 600' => '4', 'APO 450' => '3', 'ACO 450' => '3');
        $bastfor = array('CRD Lugbe 450' => 'Bedroom Detached Penthouse + BQ', 'CRD Lugbe 500' => 'Bedroom Fully Detached Duplex + BQ', 'CRD Lugbe 600' => 'Bedroom Fully Detached Duplex + BQ', 'IDU 450' => 'Bedroom Detached Duplex', 'IDU 500' => 'Bedroom Fully Detached Duplex + BQ', 'IDU 600' => 'Bedroom Fully Detached Duplex + BQ', 'APO 450' => 'Bedroom Detached Duplex', 'ACO 450' => 'Bedroom Detached Duplex');

        $h1x = 0;
        $y1y = 0;
        foreach ($landshandlers as $landsname) {
            $checklands_name0 = Daomnilandtypes::where('admin_id', $this->admin_id)->where('lands_name', $landsname)->orderBy('id', 'desc')->get();
            if (sizeof($checklands_name0) <= 0) {
                $h1x++;
                $content_id = $h1x;
                $imageResize = new ImageLibSmart();
                $room_image_name0 = $imageResize->imageLib(URL::current() . '/' . $targetfolderlands . '/' . $landsimageshandlers[$landsname], $targetfolderlands, $admin_id, $content_id, $newWidth, $newHeight);
                if (sizeof($room_image_name0) > 0) {
                    $newDaomnilandtypes0 = new Daomnilandtypes;
                    $newDaomnilandtypes0->admin_id = $this->admin_id;
                    $newDaomnilandtypes0->content_id = $h1x;
                    $newDaomnilandtypes0->page_name = 'Lands';
                    $newDaomnilandtypes0->lands_name = $landsname;
                    $newDaomnilandtypes0->lands_location = $landslocationhandlers[$landsname];
                    $newDaomnilandtypes0->lands_size = $landssizeshandlers[$landsname];
                    $newDaomnilandtypes0->lands_size_si_unit = 'sqm';
                    $newDaomnilandtypes0->lands_img = $targetfolderlands . '/' . $room_image_name0;
                    $newDaomnilandtypes0->lands_details = ucfirst(strtolower($landsname));
                    $newDaomnilandtypes0->lands_details_link = '/land_details';
                    $newDaomnilandtypes0->lands_price = $landspriceshandlers[$landsname];
                    $newDaomnilandtypes0->infrastructure = $landsinfrastructurehandlers[$landsname];
                    $newDaomnilandtypes0->feature1 = '';
                    $newDaomnilandtypes0->feature2 = '';
                    $newDaomnilandtypes0->lands_total = $landstotalhandlers[$landsname];
                    $newDaomnilandtypes0->lands_total_sold = 0;
                    $newDaomnilandtypes0->si_unit = '/ plot';
                    $newDaomnilandtypes0->lands_detail_others = 'Other Lands';
                    $newDaomnilandtypes0->section_title = 'ESTATE SERVICES';
                    $newDaomnilandtypes0->section_subtitle = 'ESTATE INCLUDES:';
                    $newDaomnilandtypes0->lands_detail_booking = 'SUBSCRIBE NOW';
                    $newDaomnilandtypes0->lands_detail_available_info = 'AVAILABLE LANDS';
                    $newDaomnilandtypes0->flaticon = $flaticonhandlers[$landsname];
                    $newDaomnilandtypes0->save(); 

                    //Add Downpayment Default
                    if($newDaomnilandtypes0->id>0){
                        $countdownpayment = DaomniDownpayment::where('daomnilandtypes_id', $newDaomnilandtypes0->id)->orderBy('id', 'desc')->count('id');
                        if($countdownpayment<=0){
                            $adddownpayment = new DaomniDownpayment;
                            $adddownpayment->daomnilandtypes_id = $newDaomnilandtypes0->id;
                            $adddownpayment->initial_payment = '750000';
                            $adddownpayment->save();
                        }
                    }
                    //Add Downpayment Default

                    foreach ($servicehandlers as $service_name0) {
                        $y1y++;
                        $checkroom_service0 = Daomnilandservice::where('admin_id', $this->admin_id)->where('daomnilandtypes_id', $newDaomnilandtypes0->id)->where('land_services', $service_name0)->orderBy('id', 'desc')->get();
                        if (sizeof($checkroom_service0) <= 0) {
                            $newDaomnilandservice0 = new Daomnilandservice;
                            $newDaomnilandservice0->admin_id = $this->admin_id;
                            $newDaomnilandservice0->content_id = $y1y;
                            $newDaomnilandservice0->Daomnilandtypes_id = $newDaomnilandtypes0->id;
                            $newDaomnilandservice0->land_services = $service_name0;
                            if (strlen($service_name0) <= 12) {
                                $newDaomnilandservice0->available = 0; //0 indicates not available
                            }
                            $newDaomnilandservice0->display = 1; //1 indicates to diplay to end users, while 0 means do not display == hide/show
                            $newDaomnilandservice0->group = 'Lands';
                            $newDaomnilandservice0->save();
                        }
                    }
                    $y1y = 0;

                    //This is to generate the rooms details images
                        $imageResize9 = new ImageLibSmart();
                        $detail_image_name9 =  $imageResize9->imageLib(URL::current().'/'.$targetfolderlands2.'/'.$floorplanhandlers[$landsname],$targetfolderlands2,$admin_id,$h1x,$newWidth,$newHeight);
                        $checklandimages9 = Daomnilanddetailimage::where('admin_id',$this->admin_id)->where('content_id',$h1x)->where('daomnilandtypes_id',$newDaomnilandtypes0->id)->where('land_plan_images',$targetfolderlands2.'/'.$detail_image_name9)->where('group','Land')->orderBy('id','desc')->get();
                        if(sizeof($checklandimages9)<=0){
                            $newDaomniroomdetailimage9 = new Daomnilanddetailimage;
                            $newDaomniroomdetailimage9->admin_id = $this->admin_id;
                            $newDaomniroomdetailimage9->content_id = $h1x;
                            $newDaomniroomdetailimage9->Daomnilandtypes_id = $newDaomnilandtypes0->id;
                            $newDaomniroomdetailimage9->land_plan_images = $targetfolderlands2.'/'.$detail_image_name9;
                            $newDaomniroomdetailimage9->group = 'Floorplan';
                            $newDaomniroomdetailimage9->save();
                        }

                        $imageResize9 = new ImageLibSmart();
                        $detail_image_name9 =  $imageResize9->imageLib(URL::current().'/'.$targetfolderlands2.'/'.$groundfloorplanhandlers[$landsname],$targetfolderlands2,$admin_id,$h1x,$newWidth,$newHeight);
                        $checklandimages9 = Daomnilanddetailimage::where('admin_id',$this->admin_id)->where('content_id',$h1x)->where('daomnilandtypes_id',$newDaomnilandtypes0->id)->where('land_plan_images',$targetfolderlands2.'/'.$detail_image_name9)->where('group','Land')->orderBy('id','desc')->get();
                        if(sizeof($checklandimages9)<=0){
                            $newDaomniroomdetailimage9 = new Daomnilanddetailimage;
                            $newDaomniroomdetailimage9->admin_id = $this->admin_id;
                            $newDaomniroomdetailimage9->content_id = $h1x;
                            $newDaomniroomdetailimage9->daomnilandtypes_id = $newDaomnilandtypes0->id;
                            $newDaomniroomdetailimage9->land_plan_images = $targetfolderlands2.'/'.$detail_image_name9;
                            $newDaomniroomdetailimage9->group = 'Groundfloorplan';
                            $newDaomniroomdetailimage9->save();
                        }

                        $imageResize9 = new ImageLibSmart();
                        $detail_image_name9 =  $imageResize9->imageLib(URL::current().'/'.$targetfolderlands2.'/'.$housefrontviewhandlers[$landsname],$targetfolderlands2,$admin_id,$h1x,$planviewWidth,$planviewHeight);
                        $checklandimages9 = Daomnilanddetailimage::where('admin_id',$this->admin_id)->where('content_id',$h1x)->where('daomnilandtypes_id',$newDaomnilandtypes0->id)->where('land_plan_images',$targetfolderlands2.'/'.$detail_image_name9)->where('group','LandHouseFrontView')->orderBy('id','desc')->get();
                        if(sizeof($checklandimages9)<=0){
                            $newDaomniroomdetailimage9 = new Daomnilanddetailimage;
                            $newDaomniroomdetailimage9->admin_id = $this->admin_id;
                            $newDaomniroomdetailimage9->content_id = $h1x;
                            $newDaomniroomdetailimage9->Daomnilandtypes_id = $newDaomnilandtypes0->id;
                            $newDaomniroomdetailimage9->land_plan_images = $targetfolderlands2.'/'.$detail_image_name9;
                            $newDaomniroomdetailimage9->group = 'LandHouseFrontView';
                            $newDaomniroomdetailimage9->save();
                        }

                        $imageResize9 = new ImageLibSmart();
                        $detail_image_name9 =  $imageResize9->imageLib(URL::current().'/'.$targetfolderlands2.'/'.$housebackviewhandlers[$landsname],$targetfolderlands2,$admin_id,$h1x,$planviewWidth,$planviewHeight);
                        $checklandimages9 = Daomnilanddetailimage::where('admin_id',$this->admin_id)->where('content_id',$h1x)->where('daomnilandtypes_id',$newDaomnilandtypes0->id)->where('land_plan_images',$targetfolderlands2.'/'.$detail_image_name9)->where('group','LandHouseBackView')->orderBy('id','desc')->get();
                        if(sizeof($checklandimages9)<=0){
                            $newDaomniroomdetailimage9 = new Daomnilanddetailimage;
                            $newDaomniroomdetailimage9->admin_id = $this->admin_id;
                            $newDaomniroomdetailimage9->content_id = $h1x;
                            $newDaomniroomdetailimage9->daomnilandtypes_id = $newDaomnilandtypes0->id;
                            $newDaomniroomdetailimage9->land_plan_images = $targetfolderlands2.'/'.$detail_image_name9;
                            $newDaomniroomdetailimage9->group = 'LandHouseBackView';
                            $newDaomniroomdetailimage9->save();
                        }
                    //end of This is to generate the rooms details images

                    //daomni Land facilities rates
                    $facilityhandlers = array('Latitude','Longitude','Size','Best for','Good access road','Water Supply','Electricity');
                    $facilityratehandlers = array('Latitude' => '0.0000','Longitude' => '0.0000','Size' => $landssizeshandlers[$landsname],'Best for' => $roomnumbershandlers[$landsname],'Good access road' => 'yes','Water Supply' => 'yes','Electricity' => 'yes');
                    $facilitydescriptionhandlers = array('Latitude' => '','Longitude' => '','Size' => 'sqm','Best for' => $bastfor[$landsname],'Good access road' => '','Water Supply' => '','Electricity' => '');
                    $facilitycount = 0;
                    foreach ($facilityhandlers as $facility_name) {
                        $facilitycount++;
                        $checkfacilities = Daomniadditionalfacilitiesrate::where('admin_id',$this->admin_id)->where('facility_name',$facility_name)->where('daomnilandtypes_id',$newDaomnilandtypes0->id)->where('group','Lands facilities')->orderBy('id','desc')->get();
                        if(sizeof($checkfacilities)<=0){
                            $newFacilities = new Daomniadditionalfacilitiesrate;
                            $newFacilities->admin_id = $this->admin_id;
                            $newFacilities->content_id = $facilitycount;
                            $newFacilities->daomnilandtypes_id = $newDaomnilandtypes0->id;
                            $newFacilities->facility_name = $facility_name;
                            $newFacilities->rates = $facilityratehandlers[$facility_name];
                            $newFacilities->description = $facilitydescriptionhandlers[$facility_name];
                            $newFacilities->available = 1;
                            $newFacilities->group = 'Lands facilities';
                            $newFacilities->save();
                        }
                    }
                    $facilitycount = 0;
                    //endof daomni Land facilities rates

                    //daomni House Specifications
                    $facilityhandlers = array('Spacious Living room & Dining','Visitors Toilet','Spacious two bedroom each','Kitchen & store','Sit-Out','Relaxation spot','Parking space for two cars');
                    $facilityratehandlers = array('Spacious Living room & Dining' => '0.0000','Visitors Toilet' => '0.0000','Spacious two bedroom each' => $landssizeshandlers[$landsname],'Kitchen & store' => $roomnumbershandlers[$landsname],'Sit-Out' => 'yes','Relaxation spot' => 'yes','Parking space for two cars' => 'yes');
                    $facilitydescriptionhandlers = array('Spacious Living room & Dining' => '','Visitors Toilet' => '','Spacious two bedroom each' => 'sqm','Kitchen & store' => 'bedroom','Sit-Out' => '','Relaxation spot' => '','Parking space for two cars' => '');
                    $facilitycount = 0;
                    foreach ($facilityhandlers as $facility_name) {
                        $facilitycount++;
                        $checkfacilities = Daomniadditionalfacilitiesrate::where('admin_id',$this->admin_id)->where('facility_name',$facility_name)->where('daomnilandtypes_id',$newDaomnilandtypes0->id)->where('group','House Specifications')->orderBy('id','desc')->get();
                        if(sizeof($checkfacilities)<=0){
                            $newFacilities = new Daomniadditionalfacilitiesrate;
                            $newFacilities->admin_id = $this->admin_id;
                            $newFacilities->content_id = $facilitycount;
                            $newFacilities->daomnilandtypes_id = $newDaomnilandtypes0->id;
                            $newFacilities->facility_name = $facility_name;
                            $newFacilities->rates = $facilityratehandlers[$facility_name];
                            $newFacilities->description = $facilitydescriptionhandlers[$facility_name];
                            $newFacilities->available = 1;
                            $newFacilities->group = 'Houses Specifications';
                            $newFacilities->save();
                        }
                    }
                    $facilitycount = 0;
                    //endof daomni Land facilities rates
                }
            }
        }
        //End of Lands Section

        //House Section
        $houseshandlers = array('APO_5_Bedroom_Detached_Duplex');
        $housesimageshandlers = array('APO_5_Bedroom_Detached_Duplex' => '1.jpg');
        $housessizeshandlers = array('APO_5_Bedroom_Detached_Duplex' => '5');
        $houseslocationhandlers = array('APO_5_Bedroom_Detached_Duplex' => 'APO');
        $housespriceshandlers = array('APO_5_Bedroom_Detached_Duplex' => '70000000');
        $housesinfrastructurehandlers = array('APO_5_Bedroom_Detached_Duplex' => '0');
        $flaticonhandlers = array('APO_5_Bedroom_Detached_Duplex' => 'flaticon-hotel');
        $landstotalhandlers = array('APO_5_Bedroom_Detached_Duplex' => '1');
        $targetfolderhouses = 'frontend/images/properties';
        $targetfolderhouses2 = 'frontend/images/properties/propertiesdetails';
        $newWidth = 1200;
        $newHeight = 700;
        $servicehandlers = array('double_bed', '80_sq_mt', '2_persons', 'free_internet', 'complimentary_breakfast', 'private_balcony', 'free_newspaper', 'flat_tv_screen', 'full_ac', 'beach_view', 'room_service', 'desk', 'bathroom', 'wardrobe', 'bathrobe', 'free_toiletries', 'slippers', 'satellite_channels', 'electric_kettle', 'minibar', 'refrigerator', 'wake_up_service', 'linen', 'towels');
        $h1x = 0;
        $y1y = 0;
        foreach ($houseshandlers as $housesname) {
            $checkhouses_name0 = Daomnilandtypes::where('admin_id', $this->admin_id)->where('lands_name', $housesname)->orderBy('id', 'desc')->get();
            if (sizeof($checkhouses_name0) <= 0) {
                $h1x++;
                $content_id = $h1x;
                $imageResize = new ImageLibSmart();
                $room_image_name0 = $imageResize->imageLib(URL::current() . '/' . $targetfolderhouses . '/' . $housesimageshandlers[$housesname], $targetfolderhouses, $admin_id, $content_id, $newWidth, $newHeight);
                if (sizeof($room_image_name0) > 0) {
                    $newDaomnilandtypes0 = new Daomnilandtypes;
                    $newDaomnilandtypes0->admin_id = $this->admin_id;
                    $newDaomnilandtypes0->content_id = $h1x;
                    $newDaomnilandtypes0->page_name = 'Houses';
                    $newDaomnilandtypes0->lands_name = $housesname;
                    $newDaomnilandtypes0->lands_location = $houseslocationhandlers[$housesname];
                    $newDaomnilandtypes0->lands_size = $housessizeshandlers[$housesname];
                    $newDaomnilandtypes0->lands_size_si_unit = 'sqm';
                    $newDaomnilandtypes0->lands_img = $targetfolderhouses . '/' . $room_image_name0;
                    $newDaomnilandtypes0->lands_details = ucfirst(strtolower('Enjoy a great ' . $housesname));
                    $newDaomnilandtypes0->lands_details_link = '/houses_details';
                    $newDaomnilandtypes0->lands_price = $housespriceshandlers[$housesname];
                    $newDaomnilandtypes0->infrastructure = $housesinfrastructurehandlers[$housesname];
                    $newDaomnilandtypes0->feature1 = '';
                    $newDaomnilandtypes0->feature2 = '';
                    $newDaomnilandtypes0->lands_total = $landstotalhandlers[$housesname];
                    $newDaomnilandtypes0->lands_total_sold = 0;
                    $newDaomnilandtypes0->si_unit = '/ house';
                    $newDaomnilandtypes0->lands_detail_others = 'Other Houses';
                    $newDaomnilandtypes0->section_title = 'ESTATE SERVICES';
                    $newDaomnilandtypes0->section_subtitle = 'ESTATE INCLUDES:';
                    $newDaomnilandtypes0->lands_detail_booking = 'SUBSCRIBE NOW';
                    $newDaomnilandtypes0->lands_detail_available_info = 'AVAILABLE HOUSES';
                    $newDaomnilandtypes0->flaticon = $flaticonhandlers[$housesname];
                    $newDaomnilandtypes0->save();

                    foreach ($servicehandlers as $service_name0) {
                        $y1y++;
                        $checkroom_service0 = Daomnilandservice::where('admin_id', $this->admin_id)->where('Daomnilandtypes_id', $newDaomnilandtypes0->id)->where('land_services', $service_name0)->orderBy('id', 'desc')->get();
                        if (sizeof($checkroom_service0) <= 0) {
                            $newDaomnilandservice0 = new Daomnilandservice;
                            $newDaomnilandservice0->admin_id = $this->admin_id;
                            $newDaomnilandservice0->content_id = $y1y;
                            $newDaomnilandservice0->daomnilandtypes_id = $newDaomnilandtypes0->id;
                            $newDaomnilandservice0->land_services = $service_name0;
                            if (strlen($service_name0) <= 12) {
                                $newDaomnilandservice0->available = 0; //0 indicates not available
                            }
                            $newDaomnilandservice0->display = 1; //1 indicates to diplay to end users, while 0 means do not display == hide/show
                            $newDaomnilandservice0->group = 'Houses';
                            $newDaomnilandservice0->save();
                        }
                    }
                    $y1y = 0;

                    //This is to generate the rooms details images
                        $imageResize9 = new ImageLibSmart();
                        $detail_image_name9 =  $imageResize9->imageLib(URL::current().'/'.$targetfolderhouses2.'/'.$housefrontviewhandlers[$housesname],$targetfolderhouses2,$admin_id,$h1x,$newWidth,$newHeight);
                        $checklandimages9 = Daomnilanddetailimage::where('admin_id',$this->admin_id)->where('content_id',$h1x)->where('daomnilandtypes_id',$newDaomnilandtypes0->id)->where('land_plan_images',$targetfolderhouses2.'/'.$detail_image_name9)->where('group','Land')->orderBy('id','desc')->get();
                        if(sizeof($checklandimages9)<=0){
                            $newDaomniroomdetailimage9 = new Daomnilanddetailimage;
                            $newDaomniroomdetailimage9->admin_id = $this->admin_id;
                            $newDaomniroomdetailimage9->content_id = $h1x;
                            $newDaomniroomdetailimage9->daomnilandtypes_id = $newDaomnilandtypes0->id;
                            $newDaomniroomdetailimage9->land_plan_images = $targetfolderhouses2.'/'.$detail_image_name9;
                            $newDaomniroomdetailimage9->group = 'Houses';
                            $newDaomniroomdetailimage9->save();
                        }

                        $imageResize9 = new ImageLibSmart();
                        $detail_image_name9 =  $imageResize9->imageLib(URL::current().'/'.$targetfolderhouses2.'/'.$housebackviewhandlers[$housesname],$targetfolderhouses2,$admin_id,$h1x,$newWidth,$newHeight);
                        $checklandimages9 = Daomnilanddetailimage::where('admin_id',$this->admin_id)->where('content_id',$h1x)->where('daomnilandtypes_id',$newDaomnilandtypes0->id)->where('land_plan_images',$targetfolderhouses2.'/'.$detail_image_name9)->where('group','Land')->orderBy('id','desc')->get();
                        if(sizeof($checklandimages9)<=0){
                            $newDaomniroomdetailimage9 = new Daomnilanddetailimage;
                            $newDaomniroomdetailimage9->admin_id = $this->admin_id;
                            $newDaomniroomdetailimage9->content_id = $h1x;
                            $newDaomniroomdetailimage9->daomnilandtypes_id = $newDaomnilandtypes0->id;
                            $newDaomniroomdetailimage9->land_plan_images = $targetfolderhouses2.'/'.$detail_image_name9;
                            $newDaomniroomdetailimage9->group = 'Houses';
                            $newDaomniroomdetailimage9->save();
                        }
                    //end of This is to generate the rooms details images

                    //daomni additional facilities rates
                    $facilityhandlers = array('Podium', 'Public Address System', 'Sweets & Kola Nuts', 'Conference Material(Folder/Pad/Pen)', 'Flit Chart(10 Sheets, 2 Maker)', 'TV Set/IV/CD Player', 'Video Set(VHS)', 'Internet facility in hall 1PC/Day', 'Desktop PC/(CPU/MONITOR/UPS)', 'Printer only(Black and White)', 'Printer only(Colour)', 'Laptop', 'Multimedia Projector', 'Multimedia Projector Screen or White Board', 'Live Band(Digital)', 'Live Band(Analog)', 'Decorations', 'Photographer', 'Video Camera', 'Multi-lingual interpretation equipment', 'Exhibition stand');
                    $facilityratehandlers = array(
                        'Podium' => '0.00', 'Public Address System' => '0.00', 'Sweets & Kola Nuts' => '0.00', 'Conference Material(Folder/Pad/Pen)' => '150', 'Flit Chart(10 Sheets, 2 Maker)' => '2000', 'TV Set/IV/CD Player' => '3000', 'Video Set(VHS)' => '3000', 'Internet facility in hall 1PC/Day' => '0.00', 'Desktop PC/(CPU/MONITOR/UPS)' => '10000', 'Printer only(Black and White)' => '10000', 'Printer only(Colour)' => '15000', 'Laptop' => '15000', 'Multimedia Projector' => '20000', 'Multimedia Projector Screen or White Board' => '2500', 'Live Band(Digital)' => '120000', 'Live Band(Analog)' => '90000', 'Decorations' => '0.00', 'Photographer' => '0.00', 'Video Camera' => '0.00', 'Multi-lingual interpretation equipment' => '0.00', 'Exhibition stand' => '2500',
                    );
                    $facilitydescriptionhandlers = array('Podium' => '', 'Public Address System' => '', 'Sweets & Kola Nuts' => '', 'Conference Material(Folder/Pad/Pen)' => 'each', 'Flit Chart(10 Sheets, 2 Maker)' => '/day', 'TV Set/IV/CD Player' => '/day', 'Video Set(VHS)' => '/day', 'Internet facility in hall 1PC/Day' => 'Inclusive', 'Desktop PC/(CPU/MONITOR/UPS)' => '/day', 'Printer only(Black and White)' => '/day', 'Printer only(Colour)' => '/day', 'Laptop' => '/day', 'Multimedia Projector' => '/day', 'Multimedia Projector Screen or White Board' => '/day', 'Live Band(Digital)' => '/day', 'Live Band(Analog)' => '/day', 'Decorations' => 'Negotiable', 'Photographer' => 'On request', 'Video Camera' => 'On request', 'Multi-lingual interpretation equipment' => 'On request', 'Exhibition stand' => '/day',
                    );
                    $facilitycount = 0;
                    // foreach ($facilityhandlers as $facility_name) {
                    //     $facilitycount++;
                    //     $checkfacilities = Daomniadditionalfacilitiesrate::where('admin_id',$this->admin_id)->where('facility_name',$facility_name)->where('facility_id',$newDaomnilandtypes9->id)->where('group','hall')->orderBy('id','desc')->get();
                    //     if(sizeof($checkfacilities)<=0){
                    //         $newFacilities = new Daomniadditionalfacilitiesrate;
                    //         $newFacilities->admin_id = $this->admin_id;
                    //         $newFacilities->content_id = $facilitycount;
                    //         $newFacilities->facility_id = $newDaomnilandtypes9->id;
                    //         $newFacilities->facility_name = $facility_name;
                    //         $newFacilities->rates = $facilityratehandlers[$facility_name];
                    //         $newFacilities->description = $facilitydescriptionhandlers[$facility_name];
                    //         if(strtoupper($facility_name)==strtoupper('Podium')||strtoupper($facility_name)==strtoupper('Public Address System')||strtoupper($facility_name)==strtoupper('Sweets & Kola Nuts')||strtoupper($facility_name)==strtoupper('Internet facility in hall 1PC/Day')){
                    //             $newFacilities->available = 1;
                    //         }
                    //         $newFacilities->save();
                    //     }
                    // }
                    // $facilitycount = 0;
                    //endof daomni additional facilities rates
                }
            }
        }
        //End of House Section
    }

    public function addDaomnisettingservice($admin_id)
    {
        $this->admin_id = $admin_id;
        $x1x = 0;
        $checkindexservice1 = Daomnisettingservice::where('admin_id', $this->admin_id)->where('service', 'Architectural & 3D Drawing')->orderBy('id', 'desc')->get();
        if (sizeof($checkindexservice1) <= 0) {
            $x1x++;
            $newDaomnisettingindexrooms = new Daomnisettingservice;
            $newDaomnisettingindexrooms->admin_id = $this->admin_id;
            $newDaomnisettingindexrooms->content_id = $x1x;
            $newDaomnisettingindexrooms->service_title = 'SERVICES';
            $newDaomnisettingindexrooms->service_subtitle = 'Check out awesome services';
            $newDaomnisettingindexrooms->service_image = 'frontend/images/services/architecture.jpg';
            $newDaomnisettingindexrooms->flaticon = 'flaticon-architecture';
            $newDaomnisettingindexrooms->service = 'Architectural & 3D Drawing';
            $newDaomnisettingindexrooms->service_details = 'We give a very good design , with this, you will be more familiar with actual construction at your finger tips';
            $newDaomnisettingindexrooms->service_count = '2';
            $newDaomnisettingindexrooms->save();
        }

        $checkindexservice2 = Daomnisettingservice::where('admin_id', $this->admin_id)->where('service', 'Property Sales')->orderBy('id', 'desc')->get();
        if (sizeof($checkindexservice2) <= 0) {
            $x1x++;
            $newDaomnisettingindexrooms2 = new Daomnisettingservice;
            $newDaomnisettingindexrooms2->admin_id = $this->admin_id;
            $newDaomnisettingindexrooms2->content_id = $x1x;
            $newDaomnisettingindexrooms2->service_title = 'SERVICES';
            $newDaomnisettingindexrooms2->service_subtitle = 'Check out awesome services';
            $newDaomnisettingindexrooms2->service_image = 'frontend/images/services/property.jpg';
            $newDaomnisettingindexrooms2->flaticon = 'flaticon-house';
            $newDaomnisettingindexrooms2->service = 'Property Sales';
            $newDaomnisettingindexrooms2->service_details = 'We sell fast, and you can resell through us';
            $newDaomnisettingindexrooms2->service_count = '1';
            $newDaomnisettingindexrooms2->save();
        }

        $checkindexservice3 = Daomnisettingservice::where('admin_id', $this->admin_id)->where('service', 'Facility Management')->orderBy('id', 'desc')->get();
        if (sizeof($checkindexservice3) <= 0) {
            $x1x++;
            $newDaomnisettingindexrooms3 = new Daomnisettingservice;
            $newDaomnisettingindexrooms3->admin_id = $this->admin_id;
            $newDaomnisettingindexrooms3->content_id = $x1x;
            $newDaomnisettingindexrooms3->service_title = 'SERVICES';
            $newDaomnisettingindexrooms3->service_subtitle = 'Check out awesome services';
            $newDaomnisettingindexrooms3->service_image = 'frontend/images/services/facility.jpg';
            $newDaomnisettingindexrooms3->flaticon = 'flaticon-factory';
            $newDaomnisettingindexrooms3->service = 'Facility Management';
            $newDaomnisettingindexrooms3->service_details = 'With skill and experience, you will never regret leaving your properties for us.';
            $newDaomnisettingindexrooms3->service_count = '9';
            $newDaomnisettingindexrooms3->save();
        }

        $checkindexservice4 = Daomnisettingservice::where('admin_id', $this->admin_id)->where('service', 'Construction, Supplies & General Contracts')->orderBy('id', 'desc')->get();
        if (sizeof($checkindexservice4) <= 0) {
            $x1x++;
            $newDaomnisettingindexrooms4 = new Daomnisettingservice;
            $newDaomnisettingindexrooms4->admin_id = $this->admin_id;
            $newDaomnisettingindexrooms4->content_id = $x1x;
            $newDaomnisettingindexrooms4->service_title = 'SERVICES';
            $newDaomnisettingindexrooms4->service_subtitle = 'Check out awesome services';
            $newDaomnisettingindexrooms4->service_image = 'frontend/images/services/construction.jpg';
            $newDaomnisettingindexrooms4->flaticon = 'flaticon-brickwall';
            $newDaomnisettingindexrooms4->service = 'Construction, Supplies & General Contracts';
            $newDaomnisettingindexrooms4->service_details = 'We are professional, all technical teams are available for you at your convinience. We supply you with first grade item.';
            $newDaomnisettingindexrooms4->service_count = '1';
            $newDaomnisettingindexrooms4->save();
        }
    }

    public function addDaomnipandemic($admin_id)
    {
        $this->admin_id = $admin_id;
        $x1x = 0;
        $measurehandlers = array('regularly and thoroughly wash your hands with soap under running water or use alcohol based 
   sanitizer if water is not available.', 'cover your mouth and nose with your bent elbow or tissue when you cough or sneeze. dispose
  properly into a dustbin and sanitize your hand', '', 'avoid touching your eyes,nose,and mouth with unwashed hands', 'maintain at least two metres distance between yourself and anyone who is coughing or 
  sneezing around you', 'if you have travelled recently from a country with widespread community transmission
  of covid-19  out break in the last 14 days,and you have a fever,cough,or breathing 
  difficultly call NCDC
', 'if you have travelled recently from a country with widespread community transmission of 
  covid-19 outbreak in the last 14 days,stay at home and isolate your self', '', '', '');
        foreach ($measurehandlers as $measures) {
            $checkabout1 = Daomnipandemic::where('admin_id', $this->admin_id)->where('measures', $measures)->orderBy('id', 'desc')->get();
            if (sizeof($checkabout1) <= 0) {
                $x1x++;
                $newDaomnisettingabout1 = new Daomnipandemic;
                $newDaomnisettingabout1->admin_id = $this->admin_id;
                $newDaomnisettingabout1->content_id = $x1x;
                $newDaomnisettingabout1->measures = $measures;
                if (!empty($measures)) {
                    $newDaomnisettingabout1->save();
                }
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
        $this->addSuperAdmin();
        //End of This is to generate superadmin
        $admin_id = 2;
        return ["admin_id" => $admin_id, "user_logon" => $user_logon];
    }

    public function Array2json($data2process)
    {
        $data2processsss = json_encode($data2process);
        return json_decode($data2processsss);
    }

    public function DataSynchronization()
    {
        if (strtolower($this->CheckLocationStatus()['status']) == 'offline') {
            // $url = url('/').'/api/servergetofflinebookings';
            // $json = file_get_contents($url);
            // $json_content = json_decode($json,true);

            // $url2 = url('/').'/api/serverdownload';
            // $json2 = file_get_contents($url2);
            // $json_content2 = json_decode($json2,true);

            // $url3 = url('/').'/api/reupdateonlinebookings';
            // $json3 = file_get_contents($url3);
            // $json_content3 = json_decode($json3,true);

            // $url4 = url('/').'/api/availablebookingsonlinefromoffline';
            // $json4 = file_get_contents($url4);
            // $json_content4 = json_decode($json4,true);

        }
    }

    public function CheckLocationStatus()
    {
        $status = 'server_error';
        $countlocalhost = substr_count(url()->current(), 'localhost');
        if ($countlocalhost <= 0) {
            $status = 'online';
        }
        if ($countlocalhost > 0) {
            $status = 'offline';
        }
        return ["status" => $status];
    }

    public function getUserAgent($request)
    {
        $useragent = $request->server('HTTP_USER_AGENT');
        if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {
            return ["source" => "mobile"];
        } else {
            return ["source" => "pc"];
        }
    }

    public function getUserAgent2()
    {
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {
            return ["source" => "mobile"];
        } else {
            return ["source" => "pc"];
        }
    }
    
    public function Error_Url(Request $request){
        $generalinfo['title'] = '::Error';
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $generalinfo['user_logon'] = $this->regURL()['user_logon'];
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['navs'] = $this->getNavsextract($admin_id);
        return 'Oops! There is an error in payment, try again later';        
    }

    public function Notify_Url(Request $request){
        $generalinfo['title'] = '::Notify';
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $generalinfo['user_logon'] = $this->regURL()['user_logon'];
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['navs'] = $this->getNavsextract($admin_id);
        return 'Hurray! There is a Notifification, please check your Reservation History, thanks';        
    }

    public function getReceipt(Request $request){
        $bookings = '';
        $rawdata = $request->all();
        $generalinfo['title'] = '::Receipt';
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $alldatae = Daomniorder::where('admin_id',$admin_id)->orderBy('id')->get();
        $booking_id = 0;
        foreach ($alldatae as $alldata) {
            // print_r($alldata->id);
            // print_r("=");
            // print_r(md5(md5($alldata->id)));
            // print_r("===");
            // print_r($rawdata['identifier']);
            // print_r("===");
            // print_r($rawdata['reg']);
            // print_r("===");
            // print_r($rawdata['ref']);
            // print_r("<br>");
            if($alldata->id==$rawdata['reg']){
                $booking_id = $alldata->id;
                $check_trans_ref = Daomniorder::where('transaction_reference',$rawdata['ref'])->orderBy('id')->count('id');
                if($check_trans_ref<=0){
                    $target_order = Daomniorder::where('admin_id',$admin_id)->where('id',$booking_id)->orderBy('id')->first();
                    $target_order->transaction_reference = $rawdata['ref'];
                    $target_order->status = 'confirmed';
                    $target_order->save();
                }
            }
        }
        $bookingg = Daomniorder::where('id',$booking_id)->where('admin_id',$admin_id)->orderBy('id')->first();
        //Only place to send email to client as it is online booking
            // $sendmailpre = new DaomniEmailProcessor();
            // $booking_id = (int)$bookingg->id;
            // $generalinfo['sendmail_message'] = $sendmailpre->sendEmail($booking_id);
        //End of Only place to send email to client as it is online booking

        $generalinfo['message'] = $bookingg->transaction_reference;
        $generalinfo['bookings'] = $bookingg;
        $generalinfo['orderdetailsprocessed'] = $bookingg;
        $generalinfo['userdetails'] = User::where('id',$bookingg->user_id)->orderBy('id','desc')->first();
        //getting the details of item to pay for
         $generalinfo['selectedplot_detail'] = Daomnilandtypes::where('id',$generalinfo['orderdetailsprocessed']->daomnilandtypes_id)->where('admin_id',$admin_id)->orderBy('id','desc')->first();
        //getting the details of item to pay for
        $generalinfo['user_logon'] = $this->regURL()['user_logon'];
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['navs'] = $this->getNavsextract($admin_id);
        return view('home/receipt', $generalinfo);        
    }

    public function logout(){
        Auth::logout();
        return  redirect()->route('login')->with('success', 'Your registration was successful, You can Login now');
    }

    public function getBecome_an_agent(Request $request){
        $generalinfo['title'] = '::Agent Registration Form';
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $this->addDaomnirole($admin_id); //to generate roles
        $generalinfo['user_logon'] = $this->regURL()['user_logon'];
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['navs'] = $this->getNavsextract($admin_id);
        $generalinfo['modaldiscount'] = $this->getModaldiscountextract($admin_id);
        $generalinfo['sliders'] = $this->getSliderextract($admin_id);
        $generalinfo['terms_conditions'] = $this->getTermsConditionsextract($admin_id);
        $generalinfo['DataSynchronization'] = $this->DataSynchronization();
        $generalinfo['discountpercent'] = '0';
        $generalinfo['group'] = 'lands'; //this is to feed slider form, and this is for rooms
        $generalinfo['indexabout'] = $this->getDaomnisettingindexaboutextract($admin_id);
        $generalinfo['indexlands'] = $this->getIndexlandsextract($admin_id);
        $generalinfo['lands'] = $this->getLandsextract($admin_id);
        $generalinfo['services'] = $this->getDaomnisettingserviceextract($admin_id);
        $generalinfo['foot_lands'] = $this->getLandsextract($admin_id);
        $generalinfo['source'] = $this->getUserAgent2()["source"];
        return view("home.agent_form", $generalinfo);
    }

    public function confirm_Agent_Reg(Request $request){
        $generalinfo['status'] = 0;
        $generalinfo['title'] = '::Home';
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $this->addDaomnirole($admin_id); //to generate roles
        $generalinfo['user_logon'] = $this->regURL()['user_logon'];
        $generalinfo['siteinfos'] = $this->getSiteinfosextract($admin_id);
        $generalinfo['navs'] = $this->getNavsextract($admin_id);
        $generalinfo['modaldiscount'] = $this->getModaldiscountextract($admin_id);
        $generalinfo['sliders'] = $this->getSliderextract($admin_id);
        $generalinfo['terms_conditions'] = $this->getTermsConditionsextract($admin_id);
        $generalinfo['DataSynchronization'] = $this->DataSynchronization();
        $generalinfo['discountpercent'] = '0';
        $generalinfo['group'] = 'agent'; //this is to feed slider form, and this is for rooms
        $generalinfo['indexabout'] = $this->getDaomnisettingindexaboutextract($admin_id);
        $generalinfo['indexlands'] = $this->getIndexlandsextract($admin_id);
        $generalinfo['lands'] = $this->getLandsextract($admin_id);
        $generalinfo['services'] = $this->getDaomnisettingserviceextract($admin_id);
        $generalinfo['foot_lands'] = $this->getLandsextract($admin_id);
        $generalinfo['source'] = $this->getUserAgent2()["source"];
        $orderdetails = $request;
        if ($request->hasFile('userpassport')) {
            $file = $request->file('userpassport');
            $passport = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/frontend/images/passports/', $passport);
            $imgPath = 'public/frontend/images/passports/' . $passport;
        } else {
            $imgPath = 'backend/images/placeholder.png';
        }
        if($request->all()["processform"]=="agentreg") {
            $userid_agentcode = $this->addUser2($orderdetails,$generalinfo['group']);
            $uplinecode = explode('/',$orderdetails->agent);
            $check_upline = DaomniInfluentialcoupons::where('coupon_code',trim($uplinecode[1]))->orderBy('id','desc')->count('id');
            if($check_upline>=1){
                if(strtolower($orderdetails->genagentcode)=='yes'){
                    $agentcode = $userid_agentcode["agentcode"];
                    $userid = $userid_agentcode["userid"];
                }
                if(strtolower($orderdetails->genagentcode)=='no'){
                    $agentcode = strtolower($orderdetails->genagentcode);
                    $userid = $userid_agentcode["userid"];
                }
                $generalinfo['status'] = ["check_upline"=>'Agent exist',"userid"=>$userid,"influencercode"=>$agentcode,"username"=>$orderdetails->emailaddress,"password"=>$orderdetails->phonenumber];
            }
            if($check_upline==0){
                $generalinfo['status'] = ["check_upline"=>'We can not register you because, the influencer code you used was not in our system',"userid"=>'not available',"influencercode"=>'not available',"username"=>'not available',"password"=>'not available'];
            }
        }
        if($request->all()["processform"]=="processing") {
            $generalinfo['status'] = $request->all()["processform"];
        }
        //dd( $orderdetails );
        return view("home.confirm_agent_reg", compact('orderdetails', "imgPath"), $generalinfo);
    }

    public function addUser2($orderdetails, $role){
        $admin_id = $this->regURL()['admin_id']; //this is determined by url owner while 1 = super admin
        $countadmincontentid = User::where('admin_id',$admin_id)->orderBy('id', 'desc')->count('id');
        if($countadmincontentid>0){
            $checkadmincontentid = User::where('admin_id',$admin_id)->orderBy('id', 'desc')->first();
            $content_id = $checkadmincontentid->content_id + 1;
        }else{
            $content_id = 1;
        }
        $checkuser = User::where('email',$orderdetails->emailaddress)->orderBy('id', 'desc')->count('id');
        $countseperation = substr_count($orderdetails->city,'/');
        if($countseperation>0){
            $getcitycountry = explode('/',$orderdetails->city);
        }
        if($checkuser<=0){
            $user = new User();
            $user->role_id = 12;
            $user->admin_id = $admin_id;
            $user->content_id = $content_id;
            $user->name = $orderdetails->first_name;
            $user->middlename = $orderdetails->othername;
            $user->lastname = $orderdetails->last_name;
            $user->email = $orderdetails->emailaddress;
            $user->phone = $orderdetails->phonenumber;
            $user->address = $orderdetails->homeaddress;
            if($countseperation>0){
                $user->city = trim(($getcitycountry[0]));
                $user->country = trim($getcitycountry[1]);
            }
            $user->password = Hash::make($orderdetails->phonenumber);
            $user->save();
            $userid = $user->id;
        }else{
            $checkuser = User::where('email',$orderdetails->emailaddress)->orderBy('id', 'desc')->first();
            $userid = $checkuser->id;      
        }
        //Generate Agent Code
            $agentcode = strtolower($orderdetails->first_name);
            $checkinfluencercode = DaomniInfluentialcoupons::where('coupon_code',$agentcode)->orderBy('id','desc')->count('id');
            if($checkinfluencercode>0){
                $agentcode = $agentcode.rand(111,999);
            }            
            $checkinfluencercode = DaomniInfluentialcoupons::where('coupon_code',$agentcode)->orderBy('id','desc')->count('id');
            $checkinfluencer = DaomniInfluentialcoupons::where('user_id',$userid)->orderBy('id','desc')->count('id');
            if($checkinfluencercode<=0 && $checkinfluencer<=0){
                $newinfluencer = new DaomniInfluentialcoupons();
                $newinfluencer->user_id = $userid;
                $newinfluencer->coupon_code = $agentcode;
                $newinfluencer->status = "active";
                $newinfluencer->allocated_percentage = 10;
                $newinfluencer->enduser_percentage = 5;
                $newinfluencer->save();
                if($newinfluencer->id > 0){
                    $agentcode = $agentcode;
                }
            }
            if($checkinfluencer>0){
                $checkinfluencer = DaomniInfluentialcoupons::where('user_id',$userid)->orderBy('id','desc')->first();
                $agentcode = $checkinfluencer->coupon_code;
            }
        //End of Generate Agent Code
        return ["userid"=>$userid,"agentcode"=>$agentcode];
    }

}