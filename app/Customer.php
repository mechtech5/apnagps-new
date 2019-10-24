<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
	use SoftDeletes;
    protected $table= 'customer';
    protected $guarded = [];
    public $timestamps = true;

     

    public function orders(){

    	return $this->hasMany('App\order_cust','user_id');
    }
}
