<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class order_cust extends Model
{
    use SoftDeletes;
     protected $table = 'orders';
     protected $guarded = [];
    protected $dates = ['deleted_at'];
    
   

   public function product(){

    	return $this->belongsTo('App\Product');
   }
  
}


