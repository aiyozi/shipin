<font color="red"><h1>商品添加</h1></font>
<button><a href="{{url('admin/goodsindex')}}">点击进入商品展示</a></button>
<form action="{{url('admin/goodsstore')}}" method="post" enctype="multipart/form-data">
    @csrf
    商品名称<input type="text" name="goods_name">{{$errors->first('goods_name')}}<br>
    商品单价<input type="text" name="goods_price">{{$errors->first('goods_price')}}<br>
    商品描述<textarea name="goods_desc"></textarea>{{$errors->first('goods_desc')}}<br>
    商品库存<input type="text" name="goods_num">{{$errors->first('goods_num')}}<br>
    商品图片<input type="file" name="goods_img"><br>

    商品所属分类<select name="cate_id">
                    <option value="0">请选择</option>
                    @foreach($cateInfo as $k =>$v)
                    <option value="{{$v->cate_id}}">{{$v->cate_name}}</option>
                    @endforeach
                </select><br>
    <input type="submit" value="点击添加商品"><br>
</form>

