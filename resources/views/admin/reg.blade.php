<form action="{{url('admin/regdo')}}" method="post">
    <table>
        <tr>
            <td>用户名</td>
            <td><input type="text" name="admin_name">
                <font color="red">{{$errors->first("admin_name")}}</font>
            </td>
        </tr>
        <tr>
            <td>手机号</td>
            <td><input type="text" name="admin_tel">
                <font color="#ff4500">{{$errors->first("admin_tel")}}</font>
            </td>
        </tr>
        <tr>
            <td>邮箱</td>
            <td><input type="text" name="admin_email">
                <font color="#d2691e">{{$errors->first("admin_email")}}</font>
            </td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="admin_pwd">
                <font color="#8a2be2">{{$errors->first("admin_pwd")}}</font>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="注册"></td>
            <td></td>
        </tr>
    </table>

</form>