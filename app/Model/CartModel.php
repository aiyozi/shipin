<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'cart_id';

    public $timestamps = false;
    //黑名单
    protected $guarded = [];
}
