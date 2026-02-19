<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuProduct extends Model
{
    public $timestamps = false;
    protected $fillable = ['menu_id', 'product_id'];
}
