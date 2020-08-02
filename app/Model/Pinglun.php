<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pinglun extends Model
{
    protected $table="pinglun";
    protected $primaryKey="p_id";
    public $timestamps=false;
    protected $guarded=[];
}
