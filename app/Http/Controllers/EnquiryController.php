<?php

namespace App\Http\Controllers;

use Mail;
use App\mail\OrderShipped;
use Illuminate\Http\Request;
use App\EnquiryDetail;
use App\businessdetail;
use App\FranchiseDetail;
use App\ComplaintDetail;
use App\Services_all;
use App\install_device;
use App\RenewableDetail;
use App\demo_registra;
use App\state;
use App\district;
use App\Product;
use App\Customer;
use App\Contact_us;
use App\network_detail;
use App\bustracker;
use DB;
use Session;




class EnquiryController extends Controller
{
    public function insertenquiery(Request $request){

    	$data = $this->enq_validate($request);
    	EnquiryDetail::create($data);
        $abhi=[];
        $abhi['email']= [$request->enq_email,'abhisheksimy@gmail.com'];
        $abhi['name']= $request->enq_name;
        $abhi['subject']= 'Laxyo Enquiry';
        $abhi['mgs']= 'we have got mail regarding  Gps Devices Enquiry';
        $this->send($abhi);
    	return  redirect()->back()->with('success','Your Enquiry is with us will contact you soon');
    }

    public function enq_validate($request){

    	$data= $request->validate([
    		'enq_name'=>'required|min:2|max:20',
    		'enq_email'=>'nullable|email',
    		'enq_subject'=>'required|min:5|max:20',
    		'enq_contact'=>'required|numeric',
    		'enq_detail'=>'required'


    	]);
    	return  $data;
    }
    
    public function getdistrict(Request $request){
        $state_code=$request->id;
        $district=district::select('*')->where('state_code',$state_code)->get();
        
        return $district;
        
    }

    public function Product_qty(Request $request){
      $quantity = $request->quantity;
        $Product = $request->Product; 
      
       $findqty = Product::select('quantitys')->where('productname',$Product)->get();
       $pro = json_encode($findqty);
       return $pro;


        
    }

    public function businessstore(Request $request){
        $data= $request->validate([
            'business_owner'=>'required|min:2|max:20',
            'business_name'=>'required|min:5|max:25',
            'contact_number'=>'required|numeric',
            'email_id'=>'nullable|email',
            'state'=>'required',
            'district'=>'required',
            'town'=>'required',
            'address'=>'required',
            'business_type'=>'required|min:5|max:25',
            'message'=>'nullable'
        ]);
        businessdetail::create($data);
        $abhi=[];
        $abhi['email']= $request->email_id;
        $abhi['name']= $request->business_owner;
        $abhi['subject']= 'Laxyo Gps Bussiness';
        $abhi['mgs']= 'we have got mail regarding  Bussiness Partnership';
        //dd($abhi);
        $this->send($abhi);
        return  redirect()->back()->with('success','Your Business Details is with us will contact you soon');

        
  


    }
    public function franchisestore(Request $request){

        $data= $request->validate([
            'full_name'=>'required|min:2|max:20',
            'email'=>'required|email',
            'age'=>'required|numeric',
            'contact_number'=>'required|numeric',
            'landline'=>'required|numeric|nullable',
            'total_cash'=>'required|numeric',
            'free_cash'=>'nullable|numeric',
            'cash_from'=>'nullable|numeric',
            'total_store'=>'required|numeric',
            'startdate'=>'required|date',
            'borrower_name'=>'nullable|',
            'message'=>'required'
            
        ]);

        FranchiseDetail::create($data);
         $abhi=[];
        $abhi['email']= $request->email;
        $abhi['name']= $request->full_name;
        $abhi['subject']= 'Laxyo Gps Franchise';
        $abhi['mgs']= 'we have got mail regarding  You Are Interested To Get Franchise Form Us';
        $this->send($abhi);
        return  redirect()->back()->with('success','Thank You, Franchise Application is with us will contact you soon');


    }

    public function complaintstore(Request $request){

         $data= $request->validate([
            'customername'=>'required|min:2|max:20',
            'vehicle_no'=>'required|min:13|max:15',
            'reg_email'=>'required|email',
            'mobile_no'=>'required|numeric',
            'address'=>'required',
            'description'=>'required'
            
        ]);
          ComplaintDetail::create($data);
            $abhi=[];
        $abhi['email']= $request->reg_email;
        $abhi['name']= $request->customername;
        $abhi['subject']= 'Gps Complaint';
        $abhi['mgs']= 'we have got mail regarding  We Got Your Compalint About Gps';
        $this->send($abhi);
        return  redirect()->back()->with('success','Your Complaint is registered we will response you soon');
    }

    public function allservices_store(Request $request){

        $data['cust_name']=$request->customername;
        $data['contact_no']=$request->contact_no;
        $data['need_devices']=$request->device_for;
        $data['period']=$request->period;
        $data['fencing']=$request->geofance;
        $data['assign_route']=$request->assigned;
        $data['cut_off']=$request->cut_off;
        $data['mgs_alert']=$request->mgs_alert;
        $data['email_alert']=$request->email_alert;
        $data['over_speed']=$request->over_speed;
        $data['theft']=$request->theft;
        $data['event']=$request->event;
        $data['fulesensor']=$request->fulesensor;
        $data['datatime']=$request->datatime;
        $data['total']=$request->total;

        Services_all::create($data);
        return  redirect()->back()->with('success','Your Application is send we will response you soon');
    }

    public function installinfo_store(Request $request){

            $data= $request->validate([
            'cust_name'=>'required|min:2|max:20',
            'contact_no'=>'required|numeric',
            'ondate'=>'required|date',
            'devicename'=>'required|',
            'address'=>'required'
            
        ]);
           install_device::create($data);
    return  redirect()->back()->with('success','We Got You Request we will send Technical Team as scheduled');



    }

    public function renewable_store(Request $request){

            $data= $request->validate([
            'cust_name'=>'required|min:2|max:20',
            'contact_no'=>'required|numeric',
            'ondate'=>'required|date',
            'dateto'=>'required|date',
            'devicename'=>'required|',
            'address'=>'required'
            
        ]);
           RenewableDetail::create($data);
           return  redirect()->back()->with('success','Thank You, Requested Renewable we Will Serve on submitted Date');

    }

    public function register_user(){


        return view('pages.apna_user');
    }
     public function formenquiry(){

        return view('pages.formenquiery');
     }

     public function formfranchise(){

        return view('pages.formfranchise');
     }

     public function formbussiness(){

        return view('pages.formbussiness');
     }

    public function storeuser(Request $request){
       
      $data=$request->validate([
            'firstname'=>'required|min:2|max:20',
            'lastname'=>'nullable',
            'mobile'=>'required|numeric|digits:12',
            'email'=>'required',
            'address'=>'nullable',
      ]);

      $store= demo_registra::create($data);
      return redirect()->back()->with('success', 'Now You Can To Take Demo');


    }

    public function fleet(){

        return view('pages.fleet');
    }

    public function fastag(){

        return view('pages.fastag');
    }
    public function heavyvehicle(){

        return view('pages.heavyvehicle');
    }
    public function asitarcker(){

        return view('pages.asitarcker');
    }
    public function gpstarcking(){

        return view('pages.gpstarcking');
    }
    public function bustracking(){

        return view('pages.bustrack');
    }
    public function apnanewtwork(){

        return view('pages.apnanewtwork');
    }

    public function networkdetail(Request $request){

        $data['name'] = $request->name;
        $data['contact'] = $request->contact;

          network_detail::create($data);
        return redirect()->back()->with('success', 'Your info is Reached to Us');
    }

    public function bustarcking(Request $request){
        
        $data['name'] = $request->name;
        $data['contact'] = $request->contact;

          bustracker::create($data);
        return redirect()->back()->with('success', 'Your info is Reached to Us');

    }

    public function contactus(Request $request){
     
     $data['name'] = $request->name;
     $data['email'] = $request->email;
     $data['contact'] = $request->contact;
     $data['message'] = $request->message;

        Contact_us::create($data);
        return redirect()->back()->with('success', 'Your info is Reached to Us');

    }
    public function shippingdetails(Request $request){
       $userid=$request->user_id;
       $mobile=$request->mobile_;
       $user_search = Customer::where('id',$userid)->where('contact_no',$mobile)->select('*')->first();
       if($user_search != ''){
        $address = DB::table('customer')
                   ->join('state_mast','state_mast.state_code','=','customer.billing_state')
                   ->join('city_mast','city_mast.city_code','=','customer.billing_district')
                   ->select('customer.*','state_mast.state_name','city_mast.city_name')
                   ->where('customer.id',$userid)
                   ->first();

                  
          return view('pages.shipping',compact('address'));
       }else{

        return redirect()->back()->with('success','You have entered Wrong Id Password');
       }


    }

    public function logintotracking(Request $request){
   
        $usermob= $request->usermobile;
       $user = demo_registra::select('*')->where('mobile',$usermob)->get();
        foreach($user as $login){
            $mob=$login->mobile;
        if($usermob == $mob){

           return redirect('http://s0.apnagps.com/track/index.php?req=auto&user=sk.transportdewas@gmail.com&pass=123456');
        }
    }
    return redirect()->back()->with('newuser', 'Register You Mobile Number To See Demo');
        



    }

    public function send($abhi){
       //dd($abhi);
         $data=$abhi;
        mail::send(new OrderShipped($data));

     // mail::send(['text'=>'mail'],['name','sharthak'],function($message) use ($abhi){
     //    $message->to($abhi['email'],$abhi['name'])->subject($abhi['mgs']);
     //    $message->from('abhisheksimy@gmail.com','Success');
     //    });


}

public function sendmessage(){

        // Account details
    $apiKey = urlencode('I3Ei0VlXgrM-l2ZWAD7ZVbsyXRdZujW1YVgxrVqzsl');
    
    // Message details
    $numbers = array(8815218231);
    $sender = urlencode('TXTLCL');
    $message = rawurlencode('This is your message from Laxyo');
 
    $numbers = implode(',', $numbers);
 
    // Prepare data for POST request
    $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
    // Send the POST request with cURL
    $ch = curl_init('https://api.textlocal.in/send/');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    // Process your response here
    echo $response;
}

}
