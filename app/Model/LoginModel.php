<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'user_id';

    public $timestamps = false;
    //黑名单
    protected $guarded = [];
}
