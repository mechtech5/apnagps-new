<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
     protected $table= 'apnaorder';
    protected $guarded = [];
    public $timestamps = true;
}
