<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Goods;
use App\Model\Pinglun;
use App\Model\UserModel;
use App\Model\Category;
use App\Model\Shoucang;
use App\Model\Cart;
use App\Model\Devio;
class GoodsController extends Controller
{
    //主页
    public function goodsindex(){
        $res=Goods::get();
        return view('index.goods.goodsindex',['res'=>$res]);
    }
    //商品列表
    public function goodsshop(){
        $res=Goods::get();
        $category=Category::get();
        return view('index.goods.goodsshop',['res'=>$res,'category'=>$category]);
    }
    //商品详情
    public function goodslists($id){
        $user_id=session('id');
        $res=Goods::find($id);



       $shi=Devio::where("goods_id",$id)->first();


        $where=[
            ['id','=',$user_id],
            ['goods_id','=',$id]
        ];
        $shoucang=Shoucang::where($where)->first();
        $wheres=[
            ['goods_id','=',$id]
        ];
        $goodsInfo=Goods::where($wheres)->first();

        if(empty($shoucang)){
            $data=[
                'is_shoucang'=>2,
                'goods_id'=>$id,
                'goods_name'=>$goodsInfo['goods_name'],
                'goods_img'=>$goodsInfo['goods_img'],
                'goods_desc'=>$goodsInfo['goods_desc'],
                'goods_price'=>$goodsInfo['goods_price'],
                'cate_id'=>$goodsInfo['cate_id'],
                'id'=>$user_id
            ];
            $aec=Shoucang::insert($data);
        }
        $pinglun=Pinglun::where('goods_id',$id)->leftjoin('users','pinglun.id','=','users.id')->get();
        return view('index.goods.goodslists',['res'=>$res,'shi'=>$shi,'pinglun'=>$pinglun,'shoucang'=>$shoucang]);

    }
    //评论
    public function pinglun(){
        $content=request()->content;
        $goods_id=request()->goods_id;
        $user_id=session('id');
        $data=[
            'p_content'=>$content,
            'goods_id'=>$goods_id,
            'id'=>$user_id,
            'p_time'=>time()
        ];
        $res=Pinglun::insert($data);
        if($res){
            echo "ok";
        }else{
            echo "no";
        }
    }
    //收藏变为未收藏
    public function shoucang(){
        $goods_id=request()->goods_id;
        $s_id=request()->shoucang;
        $where=[
            ['s_id','=',$s_id]
        ];
        $res=Shoucang::where($where)->first();
        $shoucang=Shoucang::where($where)->update(['is_shoucang'=>2]);
        if($shoucang){
            echo "ok";
        }
    }
    //未收藏变为收藏
    public function shoucang2(){
        $goods_id=request()->goods_id;
        $s_id=request()->shoucang;
        $where=[
            ['s_id','=',$s_id]
        ];
        $res=Shoucang::where($where)->first();
        if(!empty($res)){
            $shoucang=Shoucang::where($where)->update(['is_shoucang'=>1]);
            if($shoucang){
                echo "ok";
            }
        }

    }
    //加入购物车
    public function addCart(){
        $goods_id=request()->goods_id;
        $buy_number=request()->buy_number;
        $user_id=session('id');
        $where=[
            ['goods_id','=',$goods_id]
        ];
        //加入的购物车的商品数据
        $goodsInfo=Goods::where($where)->first();
        //要加入商品的库存
        $goods_num=$goodsInfo['goods_num'];
        if($buy_number>$goods_num){
            $buy_number=$goods_num;
        }

        $wheres=[
            ['id','=',$user_id],
            ['goods_id','=',$goods_id]
        ];
        $cartInfo=Cart::where($wheres)->first();
        if(!empty($cartInfo)){
            //累加
            $num=$buy_number+$cartInfo['buy_number'];
            if($num>$goods_num){
                $num=$goods_num;
            }
            $cart=Cart::where($wheres)->update(['buy_number'=>$num,'addtime'=>time()]);
            if($cart){
                echo "ok";
            }
        }else{
            //添加
            $data=[
                'goods_name'=>$goodsInfo['goods_name'],
                'goods_id'=>$goodsInfo['goods_id'],
                'buy_number'=>$buy_number,
                'id'=>$user_id,
                'goods_img'=>$goodsInfo['goods_img'],
                'goods_price'=>$goodsInfo['goods_price'],
                'addtime'=>time()
            ];
            $res=Cart::insert($data);
            if($res){
                echo "ok";
            }
        }


    }
}
