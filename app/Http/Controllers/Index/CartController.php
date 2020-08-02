<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CartModel;
use App\Model\Goods;
class CartController extends Controller
{
    public function cart(){
        $res=session('id');
        $where=[
            "id"=>$res
        ];
        $cart = CartModel::where($where)->get();
        return view('index.cart.cart',['cart'=>$cart]);
    }
    //重新获取小计
    public function toPrice(){
        $goods_id=request()->goods_id;
        $goods_price=request()->goods_price;
        $buy_number=request()->buy_number;
        $where=[
            ['goods_id','=',$goods_id]
        ];
        $goodsInfo=Goods::where($where)->first();
        $goods_num=$goodsInfo['goods_num'];
        if($buy_number>=$goods_num){
            $buy_number=$goods_num;
        }else if($buy_number<1){
            $buy_number=1;
        }
        $money=$buy_number*$goods_price;
        echo $money;

    }
    public function cartDel(){
        //删除购物车表
        $goodsmodel=new CartModel();
        $id=session('id');
//        echo $id; die;
        $goods_id=request()->goods_id;
        $where=[
            'goods_id'=>$goods_id,
            'id'=>$id,
        ];
//        echo "111";die;
        $res=$goodsmodel::where($where)->delete();
        if($res){
             echo "ok";
        }else{
            echo  "no";
        }
    }
    public function test(){
        $se=session('res');
        //dd($se);
    }

}
