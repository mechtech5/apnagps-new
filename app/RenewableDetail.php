<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RenewableDetail extends Model
{
	use SoftDeletes;
    protected $table= 'renewabledetail';
    protected $guarded = [];
    public $timestamps = true;
}
