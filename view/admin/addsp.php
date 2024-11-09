<div class="addhh">
    <h2 style="padding-top: 10px; margin-left: 10px; color: #606063;">THÊM MỚI HÀNG HÓA</h2>
</div>
<form action="" method="post" enctype="multipart/form-data">
    <p>Loại sản phẩm</p>
    <select name="iddm" >
        <?php foreach($listdm as $danhmuc){ ?>
        <option value="<?php echo $danhmuc->iddm?>"> <?php echo $danhmuc->name?></option>
        <?php } ?>
    </select>
    <p>Tên sản phẩm</p>
    <input class="ipt" type="text" name="tensp" required>
    <p>Giá tiền</p>
    <input class="ipt" type="text" name="giasp" >
    <p>Hình ảnh</p>
    <input class="ipt" type="file" name="anhsp" >
    <p>Mô tả</p>
    <textarea name="mota" cols="30" rows="10" id=""></textarea><br>
    <button name="submit-addsp">THÊM MỚI</button>
    <button>NHẬP LẠI</button>
    <a href="index.php?act=listsp"><input value="DANH SÁCH" type="button" ></a><br>
    <?php 
        if(isset($thongbao) && ($thongbao != "")){
            echo "<p>$thongbao</p>";
        }
    ?>
</form>
