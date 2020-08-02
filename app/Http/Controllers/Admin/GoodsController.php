<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Devio;
use Illuminate\Http\Request;
use App\Model\Goods;
use App\Model\Category;
use Validator;
class GoodsController extends Controller
{
    //商品展示
    public function index(){
        $res=Goods::leftjoin('category','goods.cate_id','=','category.cate_id')->get();
        return view('admin.goods.goodsindex',['res'=>$res]);
    }
    //商品添加视图
    public function create(){
        $cateInfo=Category::getcateinfo();
        return view('admin.goods.goodscreate',['cateInfo'=>$cateInfo]);
    }
    
    public function store(Request $request)
    {
        //添加方法
        $data=$request->except(['_token']);
        $validator=Validator::make($data,[
            'goods_name'=>'required|unique:goods',
            'goods_num'=>'required',
            'goods_price'=>'required',
        ],[
            'goods_name.required'=>'商品名称必填！',
            'goods_name.unique'=>'商品名称已存在！',
            'goods_num.required'=>'商品库存必填！',
            'goods_price.required'=>'商品单价必填！',
        ]);
        if($validator->fails()){
            return redirect('admin/goodscreate')->withErrors($validator)->withInput();
        }

        

        //如果有文件信息，就调用其方法执行文件上传
        if(request()->hasFile('goods_img')){
            $data['goods_img']=$this->upload('goods_img');
        }

        //实现添加
        $res=Goods::insert($data);
        if($res){
            return redirect('admin/goodsindex');
        }
    }

        //上传文件
        function upload($filename){
            //判断上传文件过程中是否出错
            if(request()->file($filename)->isValid()){
                //正确就接收文件
                $file=request()->$filename;
                //保存进入目录
                $path=$file->store('');
                return $path;
            }
            exit('文件上传有误');
        }

    public function edit($id)
    {
        //修改视图
        $res=Goods::find($id);
        $cateInfo=Category::getcateinfo();
        return view('admin.goods.goodsedit',['res'=>$res,'cateInfo'=>$cateInfo]);
    }

  
    public function update(Request $request, $id)
    {
        //修改执行
        $data=$request->except(['_token']);
        $validator=Validator::make($data,[
            'goods_name'=>'required|unique:goods',
            'goods_num'=>'required',
            'goods_price'=>'required',
        ],[
            'goods_name.required'=>'商品名称必填！',
            'goods_name.unique'=>'商品名称已存在！',
            'goods_num.required'=>'商品库存必填！',
            'goods_price.required'=>'商品单价必填！',
        ]);
        if($validator->fails()){
            return redirect('admin/goodscreate')->withErrors($validator)->withInput();
        }

        

        //如果有文件信息，就调用其方法执行文件上传
        if(request()->hasFile('goods_img')){
            $data['goods_img']=$this->upload('goods_img');
        }
        $res=Goods::where('goods_id',$id)->update($data);
        if($res){
            return redirect('admin/goodsindex');
        }
    }

    //删除方法
    public function delete($id)
    {
        $res=Goods::destroy($id);
        if($res){
            return redirect('admin/goodsindex');
        }
    }
    //视频上传
    public function devios(){
        return view("admin.devio.index");
    }
    public function deviodo(Request $request){
        $data=request()->except(['_token']);
        //如果有文件信息，就调用其方法执行文件上传
       if(request()->hasFile('goods_devio')){
           $data['goods_devio']=$this->uploads('goods_devio');
       };
        $res=Devio::insert($data);
        if($res){
            echo"上传成功";
        }else{
            echo "上传失败";
        }
    }
    //上传文件
    function uploads($filename){
        //判断上传文件过程中是否出错
        if(request()->file($filename)->isValid()){
            //正确就接收文件
            $file=request()->$filename;
            //保存进入目录
            $path=$file->store("phpo");
            return $path;
        }
        exit('文件上传有误');
    }
   
}
