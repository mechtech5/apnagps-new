<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Services_all extends Model
{ 
	use SoftDeletes;
    protected $table= 'service_all';
    protected $guarded = [];
    public $timestamps = true;
}
