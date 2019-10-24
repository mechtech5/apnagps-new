<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComplaintDetail extends Model
{
	use SoftDeletes;
    protected $table= 'complaintdetail';
    protected $guarded = [];
    public $timestamps = true;
}
