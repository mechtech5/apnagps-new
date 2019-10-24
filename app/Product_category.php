<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_category extends Model
{
    
    protected $table= 'product_mast';
    protected $guarded = [];
    public $timestamps = true;
}
