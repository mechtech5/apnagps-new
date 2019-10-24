<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Http\Requests\StoreOrder;
use App\Http\Controllers\OrderController;
use App\order_cust;
use App\Customer;
use App\cart;
use App\Product;
use Session;
use DB;

class PalorderController extends OrderController 
{

	public function index(){
       
       if(!session::has('cart')){
		return view('checkout');
	}
	$cart=session::get('cart');
	foreach($cart->getContents() as $productname => $product){
            $products_id=  $product['product']->id;
            $productname=  $product['product']->productname;
             $qty = $product['qty'];

         $checkQty = Product::where('id',$products_id)->select('quantity')->first();
         $item_no = $checkQty->quantity;
        if($item_no >= $qty){
           continue;
        }else{
        	return redirect()->back()->with('success',"For $productname select lesser quantity");
        }
                 
        }
	
            

	return view('checkout',compact('cart'));
	}

public function custorder(Request $request){
 
//return  OrderController::paytmorder($request);
// dd($request->all());
	  

		$cart=[];
		$checkout='';
		$order='';

		if(session::has('cart')){

			$cart= session::get('cart');
		}
		if($request->shipping_address1){

			$customer =$request->validate([
				"billing_firstName"=>'required|min:2|max:20',
				"billing_lastName"=>'required|min:2|max:20',
				"billing_username"=>'nullable',
				"billing_email"=>'required|email',
				"contact_no"=>'required|digits:12',
				"billing_address1"=>'required',
				"billing_address2"=>'nullable',
				"billing_state"=>'required|min:1',
				"billing_district"=>'required|min:1',
				"billing_Pincode"=>'required|digits:6',
				"shipping_customername"=>'nullable',
				"shipping_lastname"=>'nullable',
				"shipping_contact"=>'nullable',
				"shipping_state"=>'nullable',
				"shipping_district"=>'nullable',
				"shipping_Pincode"=>'nullable',
				"shipping_address1"=>'nullable',
				"shipping_address2"=>'nullable'
			     ]);
		    }else{
                 $customer = $request->validate([
       	        "billing_firstName"=>'required|min:2|max:20',
				"billing_lastName"=>'required|min:2|max:20',
				"billing_username"=>'nullable|min:2|max:20',
				"billing_email"=>'required|email',
				"contact_no"=>'required|digits:12',
				"billing_address1"=>'required',
				"billing_address2"=>'nullable',
				"billing_state"=>'required|min:1',
				"billing_district"=>'required|min:1',
				"billing_Pincode"=>'required|digits:6',
       ]);

		}
		 DB::beginTransaction();
		 $checkout= Customer::create($customer);
		  foreach($cart->getContents() as $productname => $product){
            $products=[
                 "user_id"=>$checkout->id,
                 "product_id"=>$product['product']->id,
                 "qty"=>$product['qty'],
                 "status"=>'pending',
                 "price"=>$product['price'],
                 "payment_id"=>0,
            ];
            $order= order_cust::create($products);
            $userid= session::push('userid',$checkout->id);
		  }
		  
		  if($checkout && $order){

		  	DB::commit();
		    return redirect()->route('apna_getpayment');
		  	//return view('pages.apna_product');
		  }else{
		  	DB::rollback();

		  	return redirect('checkout')->with('message', 'Invalid Activity');
		  }

		
	}

	

	public function apna_getpayment(Request $request){
          
          $cart=session::get('cart');
         //OrderController::paytmorder($request);
          //dd($cart);
        return view('payment',compact('cart'));
	}
    
}
