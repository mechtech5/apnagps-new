<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact_us extends Model
{
   use SoftDeletes;
    protected $table= 'contact_us';
    protected $guarded = [];
    public $timestamps = true;
}
