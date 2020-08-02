<style>
    ul li{
        list-style:none;
        float: left;
        width: 30px;
    }

</style>

<table border="1">
    <tr>
        <td>id</td>
        <td>用户名</td>
        <td>邮箱</td>
        <td>添加时间</td>
        <td>操作</td>
    </tr>
    @foreach($admin as $v)
    <tr>
        <td>{{$v->id}}</td>
        <td>{{$v->name}}</td>
        <td>{{$v->email}}</td>
        <td>{{$v->created_at}}</td>
        <td><a href="{{url('/admin/edit/'.$v->id)}}" class="btn btn-success">
                编辑</a> | <a  href="{{url('/admin/delete/'.$v->id)}}" class="btn btn-danger">
                删除</a></td>
    </tr>
    @endforeach
</table>
{{ $admin->links() }}
