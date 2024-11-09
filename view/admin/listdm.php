<div class="danhsachhh" style="height: auto;">
    <h2 style=" color: #606063; padding-left: 20px;">DANH SÁCH LOẠI HÀNG HÓA</h2>
    <table>
        <tr>
            <th></th>
            <th>Mã loại</th>
            <th>Tên loại</th>
            <th></th>
        </tr>
        <?php foreach ($list as $danhmuc) { ?>
            <tr>
                <td><input type="checkbox"></td>
                <td><?php echo $danhmuc->iddm ?></td>
                <td><?php echo $danhmuc->name ?></td>
                <td>
                    <a href="index.php?act=editdm&iddm=<?php echo $danhmuc->iddm ?>"><input type="button" value="Sửa"></a>
                    <a href="index.php?act=deletedm&iddm=<?php echo $danhmuc->iddm ?>"><input type="button" value="Xóa"></a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<div>
    <button>CHỌN TẤT CẢ </button>
    <button>BỎ CHỌN TẤT CẢ</button>
    <a href="index.php?act=adddm"><input type="button" value="NHẬP THÊM"></a>
</div>
</div>