<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class demo_registra extends Model
{
     use SoftDeletes;
    protected $table= 'userrigester';
    protected $guarded = [];
    public $timestamps = true;
}
