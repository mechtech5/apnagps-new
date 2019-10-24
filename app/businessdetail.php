<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 


class businessdetail extends Model
{
	 use SoftDeletes;
    protected $table= 'businessdetail';
    protected $guarded = [];
    public $timestamps = true;
}
