<div class="danhsachhh" style="height: auto;">
    <h2 style=" color: #606063; padding-left: 20px;">DANH SÁCH HÀNG HÓA</h2>

    <form action="" method="post">
        <input style="margin-left:300px; margin-bottom: 50px;" type="text" name="kyw">

        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php foreach ($listdm as $danhmuc) { ?>
                <option value="<?php echo $danhmuc->iddm ?>"> <?php echo $danhmuc->name ?></option>
            <?php } ?>
        </select>

        <input type="submit" value="OK" name="submit-ok">
    </form>
    <table>
        <tr>
            <th></th>
            <th>Mã sản phẩm</th>
            <th>Loại hàng</th>
            <th>Tên hàng hóa</th>
            <th>Giá tiền</th>
            <th>Hình ảnh</th>
            <th>Mô tả</th>
            <th>Lượt xem</th>
            <th>Chỉnh sửa</th>
        </tr>
        <?php foreach ($list as $sanpham) { ?>
            <tr>
                <td><input type="checkbox"></td>
                <td><?php echo $sanpham->id ?></td>
                <td><?php foreach ($listdm as $danhmuc) {
                    if ($danhmuc->iddm == $sanpham->iddm) {
                        $x = $danhmuc;
                        echo $x->name;
                    }

                } ?></td>
                <td><?php echo $sanpham->name ?></td>
                <td><?php echo $sanpham->price ?></td>
                <td><img style="width: 100px; height: 100px;" src="<?php echo $sanpham->image ?>" alt=""></td>
                <td><?php echo $sanpham->mota ?></td>
                <td><?php echo $sanpham->luotxem ?></td>
                <td>
                    <a href="index.php?act=editsp&idsp=<?php echo $sanpham->id ?>"><input type="button" value="Sửa"></a>
                    <a href="index.php?act=deletesp&idsp=<?php echo $sanpham->id ?>"><input type="button" value="Xóa"></a>
                </td>
            </tr>
        <?php } ?>
    </table>

</div>
<div class="btn-submit">
    <button>CHỌN TẤT CẢ </button>
    <button>BỎ CHỌN TẤT CẢ</button>
    <a href="index.php?act=addsp"><input type="button" value="NHẬP THÊM"></a>
</div>
</div>