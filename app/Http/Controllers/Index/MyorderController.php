<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Order;
use App\Model\Myorder;
use App\Model\UserModel;
use App\Model\Pinglun;
use App\Model\Shoucang;
use DB;
class MyorderController extends Controller
{
//    我的订单
    public function order(){

    }

    //我的评论
    public function desc(){
        $user_id=session("id");

        $where=[
            ['pinglun.id',"=",$user_id]
        ];
        $data=Pinglun::where($where)
            ->leftJoin('users','pinglun.id','=','users.id')
            ->leftJoin('goods','pinglun.goods_id','=','goods.goods_id')
            ->get();
        return view("index.order.desc",["data"=>$data]);

    }

    //我的收藏
    public function collect(){

        $user_id=session("id");
        $where=[
            "shoucang.id"=>$user_id,
            "is_shoucang"=>1
        ];
        $goods=Shoucang::where($where)->leftJoin('users','shoucang.id','=','users.id')->get();
        return view("index.order.collect",["goods"=>$goods]);
    }
}
