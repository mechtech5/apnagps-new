<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class network_detail extends Model
{
    use SoftDeletes;
    protected $table= 'networkdetail';
    protected $guarded = [];
    public $timestamps = true;
}
