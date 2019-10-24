<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class EnquiryDetail extends Model
{ 
	use SoftDeletes;
    protected $table= 'enquierydetail';
    protected $guarded = [];
    public $timestamps = true;
}
