<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cateInfo=Category::getcateinfo();
        return view('admin.category.index',['cateInfo'=>$cateInfo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cateInfo=Category::getcateinfo();


        return view('admin.category.create',['cateInfo'=>$cateInfo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=request()->except(['_token']);
        //dump($data);die;
        $cate_name=$data['cate_name'];
        $parent_id=$data['parent_id'];
        if($parent_id==""){
            echo "分类名称不能为空";die;
        }
        if($cate_name==""){
            echo "分类名称不能为空";die;
        }
        $res=Category::where("cate_name",$cate_name)->first();
        if($res){
            echo "该名称已存在";die;
        }
        //dump($res);die;
        $cate=Category::insert($data);
        //dump($cate);die;
        if($cate){
            return redirect('/admin/category_index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cateInfo=Category::getcateinfo();
        $res=Category::where('cate_id',$id)->first();
        return view('admin.category.edit',['res'=>$res,'cateInfo'=>$cateInfo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //echo $id;
        $data=$request->except('_token');

        $cate_name=$data['cate_name'];
        $parent_id=$data['parent_id'];
        if($parent_id==""){
            echo "分类名称不能为空";die;
        }
        if($cate_name==""){
            echo "分类名称不能为空";die;
        }
        $res=Category::where("cate_name",$cate_name)->first();
        if($res){
            echo "该名称已存在";die;
        }

        $result=Category::where('cate_id',$id)->update($data);
        //dump($result);
        if($result){
            return redirect('/admin/category_index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo $id;
        $res=Category::destroy($id);
        if($res){
            return redirect('/admin/category_index');
        }
    }




}
