<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Model\User;
class LoginController extends Controller
{
    //注册
    public function reg(){
        return view("admin.reg");
    }
    //注册执行
    public function regdo(Request $request){
        $data=request()->except(['_token']);
        $admin_name=request()->admin_name;
        $admin_pwd=request()->admin_pwd;
        $admin_tel=request()->admin_tel;
        $admin_email=request()->admin_email;
        $data['admin_time']=time();
        $request->validate([
            "admin_name"=>"required|unique:admin|max:10|regex:/^[\x{4e00}-\x{9fa5}\w]{3,20}$/u",
            "admin_pwd"=>"required|regex:/^\w{6,15}$/u",
            "admin_email"=>"required|regex:/^[a-zA-Z0-9]{4,}@[a-zA-Z0-9]{2,6}\.\w{2,4}$/u",
            "admin_tel"=>"required|max:11"
        ],[
            "admin_name.required"=>"用户名不能为空",
            "admin_name.unique"=>"用户名已有",
            "admin_name.regex"=>"用户名可以是中文，字母，数字最少3位",
            "admin_pwd.required"=>"密码不可为空",
            "admin_pwd.pwd"=>"密码可以是数字 字母最少6位",
            "admin_email.required"=>"邮箱不能为空",
            "admin_email.regex"=>"邮箱格式错误",
            "admin_tel.required"=>"手机号不能为空",
            "admin_tel.max"=>"手机号最大11位",
        ]);

        $res=User::insert($data);
        if($res){
            return redirect("admin/login");
        }else{
            return redirect("admin/reg");
        }
    }
    //登录
    public function login(Request $request){
        return view("admin.login");
    }
    //登录执行
    public function logindo(){
        $admin_name=request()->admin_name;
        $admin_pwd=request()->admin_pwd;
        $user=User::where("admin_name",$admin_name)->first();
        if($admin_pwd!=$user['admin_pwd']){
            return redirect("admin/login")->with("msg","账号或密码有误");
        }
        if($user){
            session(['user'=>$user]);
            return redirect("admin/goodsindex");
        }else{
            return redirect("admin/login")->with("msg","账号或密码有误");
        }
    }

}
