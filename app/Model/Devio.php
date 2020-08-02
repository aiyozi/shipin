<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Devio extends Model
{
    protected $table = 'devio';
    protected $primaryKey = 'id';

    public $timestamps = false;
    //黑名单
    protected $guarded = [];
}
