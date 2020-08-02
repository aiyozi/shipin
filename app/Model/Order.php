<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table="ordergoods";
    protected $primaryKey="rec_id";
    public $timestamps=false;
    protected $guarded=[];
}
