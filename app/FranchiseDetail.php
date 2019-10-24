<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FranchiseDetail extends Model
{
	use SoftDeletes;
    protected $table= 'franchisedetail';
    protected $guarded = [];
    public $timestamps = true;
}
