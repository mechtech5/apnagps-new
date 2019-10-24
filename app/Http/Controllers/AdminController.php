<?php

namespace App\Http\Controllers;

use Mail;
use App\mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Login;
use App\EnquiryDetail;
use App\ComplaintDetail;
use App\businessdetail;
use App\FranchiseDetail;
use App\state;
use App\district;
use App\Product;
use App\Services_all;
use App\install_device;
use App\RenewableDetail;
use App\Customer;
use App\order_cust;
use App\order;
use App\network_detail;
use App\bustracker;
use App\demo_registra;
use Session;
use PDF;

class AdminController extends Controller
{
    public function index(){

    	return view('admin.login');
    }

    public function loginuser(Request $request){

     $username=$request->username;
     $pass=$request->password;

     $data= Login::select('*')->where('username',$username)->where('password',$pass)->get();
     foreach($data as $user){
          $name=$user->username;
          $pasword=$user->password;

         if($name==$username && $pasword==$pass){
         	 return view('admin.index');
         }
     }
     return view('admin.login');
}
 public function enquirydetail(){
    
    $enquiry = EnquiryDetail::all();
    return view('admin.pages.enquirydetail',compact('enquiry'));

 }
 public function removeenquiry($id){
   $renquiry = EnquiryDetail::find($id);
   $renquiry->delete();
   return redirect('enquirydetail')->with('success','Enquiry is Successfully Removed From List');

 }

 public function businessdetail(){

        $business= DB::table('businessdetail')
            ->select('businessdetail.*', 'state_mast.state_name', 'city_mast.city_name')
            ->join('state_mast', 'businessdetail.state', '=', 'state_mast.state_code')
            ->join('city_mast', 'businessdetail.district', '=', 'city_mast.city_code')
            ->whereNull('businessdetail.deleted_at')
            ->get();
            return view('admin.pages.businessdetail',compact('business'));
           
}
public function removebusiness($id){
 
   $rbusinessdetail = businessdetail::find($id);
   $rbusinessdetail->delete();
   return redirect('businessdetail')->with('success','B-Frnds is Successfully Removed From List');

}

public function franchise(){

    $franchise=FranchiseDetail::all();
   return view('admin.pages.franchisedetail',compact('franchise'));
}

public function rfranchise($id){
    $rrfranchise = FranchiseDetail::find($id);
    $rrfranchise->delete();
    return redirect('franchise')->with('success','F-frnds is Successfully Removed From List');
}

 public function complaintdetail(){

      $complaint=ComplaintDetail::all();
      return view('admin.pages.ComplaintDetail',compact('complaint'));
 }

 public function rcomPlaint($id){
       $dcomPlaint = ComplaintDetail::find($id);
       $dcomPlaint->delete();
       return redirect('complaintdetail')->with('success','Complaint is succesfully Removed From List');
 }

 public function addProduct(){


    return view('admin.pages.addProduct_form');
 }

 public function storeProduct(Request $request){
      $newfilename = $request->file('file');
       $filename ='';
      if($newfilename != ''){
      $filename =  uniqid().$newfilename->getClientOriginalName();
      $store = $request->file('file')->move(public_path("\adminn"), $filename);
      }
      $data['productname']=$request->productname;
      $data['category_id']=$request->category;
     $data['price']=$request->price;
     $data['quantity']=$request->quantity;
     $data['image']=$filename;
     $product = Product::create($data);
     return redirect()->back()->with('message', 'Product Is Added Successfully');

 }

 public function showProduct(){
  
    $product = DB::table('product')
              ->join('product_mast','product.category_id','=' ,'product_mast.id')
              ->select('product.*','product_mast.id as pcid','product_mast.category','product_mast.us_age')
              ->get();
    //$product;
    return  view('admin.pages.showProduct',compact('product'));
 }

 public function editProduct($id){
    
    $product = Product::find($id);
    $cate_id = $product->category_id;
    $cat= DB::table('product_mast')->select('category')->where('id',$cate_id)->select('category')->first();
    return view('admin.pages.UPdateProduct', compact('product','cat'));
    
 }
 public function UPdateProduct(Request $request,$id){
  $updatefile=$request->file('file');
   $filename ='';
      if($updatefile != ''){
      $filename =  uniqid().$updatefile->getClientOriginalName();
      $store = $request->file('file')->move(public_path("\adminn"), $filename);
      }else{

         $filename=$request->old_file;
      }

  $data['productname'] = $request->productname;
  $data['price'] = $request->price;
  $data['quantity'] = $request->quantity;
  $data['image'] = $filename;
  $product = Product::where('id', $id)->update($data);
  return redirect('show_Product')->with('message','Product Detail Is Successfully Update');
 }

 public function custservices(){
       $service= Services_all::all();
       return view('admin.pages.custservice',compact('service'));

 }
 public function rservices($id){
       $dservice = Services_all::find($id);
       $dservice->delete();
       return redirect()->back()->with('success','Service Request Is Successfully Removed From List');
 }
 public function installdevice(){
    $install=install_device::all();
    return view('admin.pages.custinstalldevice',compact('install'));

 }
 public function rinstall($id){
       $dinstall = install_device::find($id);
       $dinstall->delete();
       return redirect()->back()->with('success','Installation Request Is Successfully Removed From List');

 }

 public function renewbledevice(){
        $renew= RenewableDetail::all();
        return view('admin.pages.renewdevice',compact('renew'));

 }
public function rrenew($id){
    $drenew = RenewableDetail::find($id);
    $drenew->delete();
    return redirect()->back()->with('success','Renewable Request Is Successfully Removed From List');

}
 public function Productbuyer(){

  $buyer = DB::table('customer')
            ->join('state_mast', 'customer.billing_state', '=', 'state_mast.state_code')
            ->join('city_mast', 'customer.billing_district', '=', 'city_mast.city_code')
            ->select('customer.*', 'state_mast.state_name', 'city_mast.city_name')
            ->where('customer.transaction_id', '<>' ,'')
            ->get();

          //return $customer = $buyer->billing_firstName;


            //return $buyer;
  return view('admin.pages.Productbuyer',compact('buyer'));
 }

 public function custProductlist($id){
  $custname = Customer::where('id',$id)->select('billing_firstName','billing_email')->first();
  $name = $custname->billing_firstName;
  $email = $custname->billing_email;
  $customername = session::put('customername',$name);
  $customeremail = session::put('customeremail',$email);
  $totalamount=order::where('Cust_id',$id)->select('price')->first();
  $total = $totalamount->price;
  $custProduct=DB::table('orders')
                ->join('product' ,'orders.product_id','=','product.id')
                ->where('orders.user_id', $id)
                ->where('orders.transectionId','<>','')
                ->where('orders.delivery_status','<>','delivered')
                ->select('orders.*','product.productname','product.price')
                ->get();
                //dd($custProduct);
                

          return view('admin.pages.CustProduct',compact('custProduct','total'));
  
 }

 public function deliverProduct($id){
 $name= session::get('customername');
 $email= session::get('customeremail');
 $Productdelivered = order_cust::where('id',$id)->select('*')->first();
 $Product_id = $Productdelivered->product_id;
 $dataqty = $Productdelivered->qty;
 $user_id = $Productdelivered->user_id;
 $price = $Productdelivered->price;
 $order = order::where('Cust_id',$user_id)->select('*')->first();
 $t_order = $order->price-$price;
 $orderUPdate = order::where('Cust_id',$user_id)->update(['price'=>$t_order]);
//  $Productqty = Product::where('id',$Product_id)->select('*')->first();
//  $blance = $Productqty->quantity;
//  $blance_left=$blance-$dataqty;
// //return $price=$Productqty->price*;
// $ProductUPdate = Product::where('id',$Product_id)->update(['quantity'=>$blance_left]);
$Orderdel= order_cust::where('id',$id)->update(['delivery_status'=>'delivered']);
$abhi=[];
        $abhi['email']= $email;
        $abhi['name']= $name;
        $abhi['subject']= 'Device Delivery Status';
        $abhi['mgs']= 'Your Product Delivery Dispatched Successfully';
        $this->send($abhi);
 return redirect()->back()->with('success',"'$name' Order is succesfully placed For Delivery");

 

 }
 public function all_Product($id){

   $product_all= DB::table('product')
                 ->join('orders','orders.product_id','=','product.id')
                 ->join('customer','orders.user_id','=','customer.id')
                 ->join('state_mast', 'customer.billing_state', '=', 'state_mast.state_code')
                 ->join('city_mast', 'customer.billing_district', '=', 'city_mast.city_code')
                 ->select('orders.*','customer.*','state_mast.state_name', 'city_mast.city_name','product.productname')
                 ->where('orders.user_id','=',$id)
                 ->where('orders.delivery_status','delivered')
                 ->get();
                $pdf = PDF::loadView('admin.pages.invoice_all',compact('product_all'));
                return $pdf->download('invoice_all.pdf');

   
     // return $all_Product = Customer::with(['orders'=>function($query){
     //              $query->with('product');
     //         }])->get();
                
   /// return $all_Product;
    //  foreach($all_Product as $product){

    //       $productid = $product->product_id;
    //       $Pname = Product::where('id',$productid)->select('productname')->first();
    //       $item = $Pname->productname;
    //       $itemname = session::put('item',$item);
    //       $customer = Customer::where('id',$id)->select('billing_firstName','billing_lastName')->first();
    //       $customername= $customer->billing_firstName." ".$customer->billing_lastName;
    //       $custname = session::put('custname',$customername);


    
    // }  
          return $product;
     
      
 }
 public function shipingaddress($id){
  
    $shiping = DB::table('customer')
            ->join('state_mast', 'customer.billing_state', '=', 'state_mast.state_code')
            ->join('city_mast', 'customer.billing_district', '=', 'city_mast.city_code')
            ->select('customer.*', 'state_mast.state_name', 'city_mast.city_name')
            ->where('customer.transaction_id', '<>' ,'')
            ->where('customer.id' ,$id)
            ->first();
      //return $shiping;
      return view('admin.pages.shipingaddress',compact('shiping'));
   
 }
 public function deliveredProduct(){
     $Pdelivered = DB::table('orders')
                ->join('customer','orders.user_id', '=','customer.id')
                ->join('product' ,'orders.product_id','=','product.id')
                ->select('orders.*','customer.billing_firstName','customer.billing_lastName','product.productname')
                ->where('orders.delivery_status','=','delivered')
                ->get();
                //return $Pdelivered;

     return view('admin.pages.Productdelivered',compact('Pdelivered'));
 }
 public function Pdf($id){
 $data = DB::table('orders')
                ->join('customer','orders.user_id', '=','customer.id')
                ->join('product' ,'orders.product_id','=','product.id')
               ->join('state_mast', 'customer.billing_state', '=', 'state_mast.state_code')
            ->join('city_mast', 'customer.billing_district', '=', 'city_mast.city_code')
                ->select('orders.*','customer.*','customer.billing_lastName','product.productname','state_mast.state_name', 'city_mast.city_name')
                ->where('orders.delivery_status','=','delivered')
                ->where('orders.id',$id)
                ->first();
   $pdf = PDF::loadView('admin.pages.invoice',compact('data'));
   return $pdf->download('invoice.pdf');
  //return "htpp";
 }

 public function networkvisit(){

       $visitor = network_detail::all();

    
        return view('admin.pages.networkvisitor',compact('visitor'));
 }

 public function removenet($id){
     
     $rvisitor = network_detail::find($id);
     $rvisitor->delete();

     return redirect()->back()->with('message','Network visitor is Successfully Removed');

 }

 public function bustvisitor(){
       
      $bvisitor = bustracker::all();
      return view('admin.pages.bustvisitor',compact('bvisitor'));
 }

 public function removebus($id){
    
   $rbustracker = bustracker::find($id);
   $rbustracker->delete();

   return redirect()->back()->with('message','Bus Tracker Visitor is Successfully Removed');
 }

 public function demovisitor(){

    $newvisitor = demo_registra::all();

    return  view('admin.pages.demo_visitor',compact('newvisitor')); 
 }

 public function rdemouser($id){
    
    $rdemo = demo_registra::find($id); 
    $rdemo->delete();
    return redirect()->back()->with('message','Demo user is successfully Removed');
 }

  public function send($abhi){
       //dd($abhi);
         $data=$abhi;
        mail::send(new OrderShipped($data));
       }


 public function removeProduct($id){

    $id = Product::find($id);
    $id ->delete();
    return redirect()->back()->with('message','Product is Deleted Successfully');
 }


}
