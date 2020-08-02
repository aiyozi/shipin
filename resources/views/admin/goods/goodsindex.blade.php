<font color="red"><h1>商品展示</h1></font>
<button><a href="{{url('admin/goodscreate')}}">点击添加商品</a></button>
<table border="1">
    <tr>
        <td>商品ID</td>
        <td>商品名称</td>
        <td>商品单价</td>
        <td>商品描述</td>
        <td>商品库存</td>
        <td>商品图片</td>

        <td>商品所属分类</td>
        <td>操作</td>
    </tr>
    @foreach($res as $k=>$v)
    <tr>
        <td>{{$v->goods_id}}</td>
        <td>{{$v->goods_name}}</td>
        <td>{{$v->goods_price}}</td>
        <td>{{$v->goods_desc}}</td>
        <td>{{$v->goods_num}}</td>
        <td>{{$v->goods_img}}</td>

        <td align="left">{{str_repeat('==',$v->level)}}{{$v->cate_name}}</td>
        <td>
            <a href="{{url('admin/goodsdelete/'.$v->goods_id)}}">删除</a>
            <a href="{{url('admin/goodsedit/'.$v->goods_id)}}">编辑</a>
        </td>
    </tr>
    @endforeach
</table>
