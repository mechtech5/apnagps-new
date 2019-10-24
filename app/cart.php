<?php

namespace App;


class cart  
{

	 private $content;
	 private $totalqty;
	 private $totalprice;
    

   public function __construct($oldcart) {
   	if($oldcart){

   		$this->content=$oldcart->content;
   		$this->totalqty=$oldcart->totalqty;
   		$this->totalprice=$oldcart->totalprice;
   	}

   }

   public function addProduct($product,$qty){
   ///dd($qty);

   	$products=['qty'=>0, 'price'=>$product->price, 'product'=>$product];
   	//dd($product);
   	if($this->content){

   		if(array_key_exists($product->productname, $this->content)){

   			$products=$this->content[$product->productname];
   		}
   	}
   	 $products['qty']+=$qty;
     ///dd($products['price']);
   	 $products['price']=$product['price']*$products['qty'];
   	//dd($products['price']);
   	$this->content[$product->productname]=$products;
   	$this->totalqty+=$qty;
   	$this->totalprice+=$product->price;


   }

   public function removeProduct($product){
      //dd($product);
     if($this->content){

         if(array_key_exists($product['productname'], $this->content)){
            $rProducts=$this->content[$product['productname']];
            $this->totalqty-=$rProducts['qty'];
            $this->totalprice-=$rProducts['price'];
            //dd($this->totalprice);
           //dd($this->content);
            array_forget($this->content,$product['productname']);

         }
          //dd($product);
      }

   }

   public function updateProduct($product ,$qty){
     if($this->content){
            if(array_key_exists($product['productname'], $this->content)){
                $products = $this->content[$product['productname']];

                //dd($products);
            }
        }
        $this->totalqty -= $products['qty'];
        $this->totalprice -= $products['price'];
        $products['qty'] = $qty;
        $products['price'] =  $product['price'] *  $qty;
        $this->totalprice += $products['price'];
        $this->totalqty += $qty;
        $this->content[$product['productname']] = $products;
       


   }


   public function getcontents(){
   	  return $this->content;
   }
    public function gettotalqty(){
   	  return $this->totalqty;
   }
    public function gettotalprice(){
   	  return $this->totalprice;
   }



   }
