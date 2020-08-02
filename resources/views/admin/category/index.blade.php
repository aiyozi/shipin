<table>
    <tr>
        <td>分类ID</td>
        <td>分类名称</td>
        <td>分类介绍</td>
        <td>操作</td>
    </tr>
@foreach($cateInfo as $k =>$v)
    <tr>
        <td>{{$v->cate_id}}</td>
        <td align="left">{{str_repeat('==',$v->level)}}{{$v->cate_name}}</td>
        <td>{{$v->cate_desc}}</td>
        <td><a href="{{url('/admin/category_destory/'.$v->cate_id)}}">删除</a>
            <a href="{{url('/admin/category_edit/'.$v->cate_id)}}">修改</a>
        </td>
    </tr>
    @endforeach
</table>
