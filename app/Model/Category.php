<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
class Category extends Model
{
    public $table="category";
    public $timestamps=false;
    protected $primaryKey="cate_id";
    public $guarded=[];

    public static function getcateinfo(){
        $cateinfo=DB::table('category')->get();
        $result=self::list_level($cateinfo,$parent_id=0,$level=0);
        return $result;
    }


    public static function list_level($cateinfo,$parent_id,$level){
        static $array =array();
        foreach($cateinfo as $k => $v){
            if($parent_id == $v->parent_id){
                $v->level = $level;

                $array[] = $v;

                self::list_level($cateinfo,$v->cate_id,$level+1);
            }
        }

        return $array;
    }
}
