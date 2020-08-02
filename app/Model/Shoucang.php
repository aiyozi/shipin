<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Shoucang extends Model
{
    //表名
    protected $table = 'shoucang';
    //主键
    protected $primaryKey = 's_id';
    //时间戳
    public $timestamps = false;
    //黑名单  用create添加的时候加黑名单
    protected $guarded = [];
}
