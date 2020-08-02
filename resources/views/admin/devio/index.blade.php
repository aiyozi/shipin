<form action="{{url('admin/deviodo')}}" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>商品ID</td>
            <td><input type="text" name="goods_id"></td>
        </tr>
        <tr>
            <td>上传视频</td>
            <td><input type="file" name="goods_devio"></td>
        </tr>
        <tr>
            <td><input type="submit" value="上传"></td>
            <td></td>
        </tr>
    </table>
</form>