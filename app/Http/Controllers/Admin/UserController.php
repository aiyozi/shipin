<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\UserModel;
class UserController extends Controller
{
    //用户展示
    public function userindex(){
        $admin= UserModel::orderBy('id','desc')->Paginate(3);
        return view('admin.user.userindex',['admin'=>$admin,'admin'=>$admin]);
    }
    //用户删除
    public function delete($id){
        $res = UserModel::where('id',$id)->delete();
        if($res){
            return redirect('/admin/userindex');
        }
    }
    //修改试图
    public function edit($id){
        $admin  = UserModel::find($id);
        return view('admin.user.edit',['admin'=>$admin]);
    }
    //执行修改
    public function update(Request $request, $id){
        $post = request()->except(['_token']);

        $res = UserModel::where('id',$id)->update($post);
        if($res!==false){
            return redirect('/admin/userindex');
        }
    }
}
