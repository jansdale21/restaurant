<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class MenuProduct extends Model
{
    //use SoftDeletes;
    public $timestamps = false;
    protected $fillable = ['menu_id', 'product_id'];
}
