<div class="addhh">
    <h2 style="padding-top: 10px; margin-left: 10px; color: #606063;">SỬA HÀNG HÓA</h2>
</div>
<form action="" method="post" enctype="multipart/form-data">
    <p>Loại hàng</p>
    <select name="iddm" >
        <?php foreach($listdm as $danhmuc){ ?>
        <option value="<?php echo $danhmuc->iddm?>"> <?php echo $danhmuc->name?></option>
        <?php } ?>
    </select>
    <p>Tên sản phẩm</p>
    <input class="ipt" type="text" name="tensp" value="<?php echo $sanphamkkk->name ?>" required>
    <p>Giá tiền</p>
    <input class="ipt" type="text" name="giasp" value="<?php echo $sanphamkkk->price ?>">
    <p>Hình ảnh</p>
    <input class="ipt" type="file" name="anhsp" value="<?php echo $sanphamkkk->images ?>">
    <p>Mô tả</p>
    <textarea name="mota" cols="30" rows="10" id="" value="<?php echo $sanphamkkk->mota ?>"></textarea><br>
    <button name="submit-editsp">SỬA</button>
    <button>NHẬP LẠI</button>
    <a href="index.php?act=listsp"><input value="DANH SÁCH" type="button" ></a><br>
    
</form>
