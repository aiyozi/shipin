<form action="{{url('admin/logindo')}}" method="post">
    <table>
        <tr>
            <td>账号或手机号</td>
            <td><input type="text" name="admin_name"></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="admin_pwd" >
            <font color="#8a2be2">{{session("msg")}}</font>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="登录"></td>
            <td></td>
        </tr>

    </table>
</form>