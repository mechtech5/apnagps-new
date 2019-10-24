<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class install_device extends Model
{
    use SoftDeletes;
    protected $table= 'install_info';
    protected $guarded = [];
    public $timestamps = true;
}
