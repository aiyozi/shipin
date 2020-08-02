<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\UserModel;
class LoginController extends Controller
{
    //登录
    public function login(){
        return view('index.login.login');
    }
    public function login_do(){
        $data=request()->except('_token');
        $name=$data['name'];
        $password=$data['password'];
        //var_dump($password);die;
        $userInfo=UserModel::where('name',$name)->first();
        if(!$userInfo){
            return ["err_code" => 005, "msg" => "账号密码错误，请重新输入"];
        }
        if($userInfo){
            if($userInfo['password']!=$password){
                return ["err_code" => 005, "msg" => "账号密码错误，请重新输入"];
            }
        }
        $se=session(["id"=>$userInfo['id']]);
         return ["err_code" => 006, "msg" => "登录成功"];
    }


    //注册
    public function reg(){
        return view('index.login.reg');
    }
    public function reg_do(){
        $data=request()->except('_token');
        //var_dump($password);die;
        //dd($data);
        //验证用户名
        if (!preg_match("/^[\u4E00-\u9FA5]{1,6}$/", $data['name']) == false ) {
            return ["err_code" => 001, "msg" => "用户名由中文组成,长度1-6位"];
        }
        if($data['name']==""){
            return ["err_code" => 001, "msg" => "用户名由中文组成,长度1-6位"];
        }
        $res=UserModel::where('name',$data['name'])->first();
        if($res){
            return ["err_code" => 002, "msg" => "该用户名已存在"];
        }

        //验证密码
       if($data['password']==""){
           return ["err_code" => 003, "msg" => "密码长度由6-15位 数字 大写字母 小写字母组成，不能有特殊符号"];
       }
       $p='/^[a-zA-Z0-9]{6,15}$/';
       if(!preg_match($p,$data['password'])){
           return ["err_code" => 003, "msg" => "密码长度由6-15位 数字 大写字母 小写字母组成，不能有特殊符号"];
       }


        //验证用户邮箱
        if (!preg_match("/^[a-zA-Z0-9]{6,}@[a-zA-Z0-9]{3,}\.[0-9a-zA-Z]{3,}$/",$data['email'])==false){
            return ["err_code" => 004, "msg" => "请输入正确的邮箱格式"];
        }
        if($data['email']==""){
            return ["err_code" => 004, "msg" => "请输入正确的邮箱格式"];
        }

        //添加入库
        $register_data=[
            "name"=>$data['name'],
            "password"=>$data['password'],
            "email"=>$data['email'],
            "created_at"=>time()
        ];
        $register=UserModel::insert($register_data);
        if($register_data){
            return ["err_code" => 000, "msg" => "注册成功"];
        }

    }
    public function test(){
        $se=session('id');
        dd($se);
    }
}
