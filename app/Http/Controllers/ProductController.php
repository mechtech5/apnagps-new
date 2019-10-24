<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use App\cart;

class ProductController extends Controller
{
   
   public function insertcard(Request $request){

          $name=$request->productname;
          $price=$request->price;
          $quantity=$request->quantity;
          $cart=array($name,$price,$quantity);
         Session::push('cartdetail', $cart);
         //$detail = session('cartdetail');
         //dd($detail);
         return view('pages.apna_product');

   }

   public function viewcart(){

      dd(session::get('cart'));
        //dd($cartdetail);
   	 return view('viewcart',compact('cartdetail'));
   }

   public function updatecart(Request $request){

         //dd($request->session()->all());
          $name=$request->name0;
          $price=$request->name1;
          $quantity=$request->name2;
          $event=$request->event;
          //dd($event);
          $cartdetail = session('cartdetail');
          //dd($cartdetail);
          $cart=array($name,$price,$quantity);
          $cartdetail=$cart;
          
          //dd($cartdetail);

          if($event == 'update'){

          	 Session::push('cartdetail', $cartdetail);
          	 $cartdetail = session('cartdetail');
             //dd($cartdetail);
          }elseif($event =='delete'){

          	 $cartdetail =Session::forget($cart);
          }

          return view('viewcart',compact('cartdetail'));
          

   }

   public function addTocart(Product $Product,Request $request){
     $product_id = $request->product_id;
     $rProduct=Product::where('id',$product_id)->select('quantity')->first();
     $rquantity = $rProduct->quantity -1;
     if($rquantity < 0 ){
       return back()->with('success',"Product $Product->productname is not avaiable in Stock");
     }else{
   
     $oldcart= session::has('cart') ? session::get('cart') : null;
     $qty= $request->quantity ? $request->quantity :null;
      $cart= new cart($oldcart);
      ///dd($Product);
      $cart->addProduct($Product,$qty);
      // dd($cart);
      Session::put('cart',$cart);
     ///dd($cart);
      return back()->with('success',"Product $Product->productname is added successfully to cart");
}
   }

   public function viewcartdetails(){
    //dd(Session::get('cart'));
     if(!Session::has('cart')){
        return view('viewcartdetails');
      }
      $cart = Session::get('cart');
      return view('viewcartdetails', compact('cart'));
   }

    public function removeProduct(Request $request){

     //return $request->productname;

      $Product['productname'] = $request->productname;
      $Product['qty'] = $request->qty;
      $Product['price'] = $request->price;
      //dd( $Product['qty']);

     
       $oldcart= session::has('cart') ? session::get('cart') : null;
        $cart= new cart($oldcart);
        $cart->removeProduct($Product);

        // dd($cart);
        Session::put('cart',$cart);
       return redirect()->route('viewcartdetails')->with('success', $Product['productname']." is removed from the cart");
      
    }

    public function apna_product($category){
        
         $ProductStore = Product::where('category_id',$category)->select('*')->get();
         
         return view('pages.apna_product',compact('ProductStore'));

    }

    public function updateProduct(Request $request){

       //return $request->product_id;

      $Product['productname'] = $request->productname;
      $Product['qty'] = $request->qty;
      $Product['price'] = $request->price;
       $id= $request->product_id;
      //dd($id);
       $checkProduct= Product::where('id',$id)->select('quantity')->first();
       $item_no = $checkProduct->quantity;
       if($item_no >= $Product['qty'] && $Product['qty'] !='0'){

        $oldcart= session::has('cart') ? session::get('cart') : null;
        $cart= new cart($oldcart);
        $cart->updateProduct($Product,$request->qty);
        //dd($cart);
        Session::put('cart',$cart);
       return redirect()->route('viewcartdetails')->with('success', $Product['productname']." is updated in the cart");
}else{
  return redirect()->back()->with('success',$Product['productname']." is not avaible in this quantity");
}

    }


}
