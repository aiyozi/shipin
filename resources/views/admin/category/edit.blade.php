<form action="{{url('/admin/category_update/'.$res->cate_id)}}" method="post">
{{--    <input type="hidden" name="cate_id" value="{{$res->cate_id}}">--}}
    <table>
        <tr>
            <td>分类名称</td>
            <td><input type="text" name="cate_name" value="{{$res->cate_name}}"></td>
        </tr>
        <tr>
            <td>分类</td>
            <td><select name="parent_id">
                    <option value="0">请选择</option>
                    @foreach($cateInfo as $k =>$v)
                        <option value="{{$v->cate_id}}">{{$v->cate_name}}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>分类介绍</td>
            <td><textarea name="cate_desc">
                    {{$res->cate_desc}}
                </textarea>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="修改"></td>
            <td></td>
        </tr>
    </table>
</form>
