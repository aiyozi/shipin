<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Devio;
class DevioController extends Controller
{
    //视频转码
    public function devio(){
        $res=Devio::where(['static'=>0])->get();
//        dd($res);
        echo " 开始转码 ： ". date("Y-m-d H:i:s");echo '</br>';
//        dd($res);
        if($res){
            foreach ($res as $k=>$v){
                //修改状态开始转码
                $goods_id=$v->goods_id;
                Devio::where(['goods_id'=>$goods_id])->update(['static'=>1]);
                fastcgi_finish_request();

                //转码
                $video_file = $v->goods_devio;                 // 原视频文
                $video_out_path = 'video_out/';          //转码后文件路径
                $m3u8_file =$video_out_path.$goods_id.'.m3u8';         // m3u8文件名
                $ts_file = $video_out_path.$goods_id.'_%03d.ts';        //分片文件名
                $ts_second = 20;                        // 分片视频长度 秒
                $cmd = "cd storage && ffmpeg -i {$video_file} -codec:v libx264 -codec:a mp3 -map 0 -f ssegment -segment_format mpegts -segment_list $m3u8_file -segment_time $ts_second $ts_file";
//                print_r($cmd);exit;
                shell_exec($cmd);
                Devio::where(['goods_id'=>$goods_id])->update(['static'=>2,'m3u8'=>$m3u8_file]);  //更新转码状态为完成
            }
        }
    }
}
