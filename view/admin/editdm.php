<div class="addhh">
    <h2 style="padding-top: 10px; margin-left: 10px; color: #606063;">SỬA LOẠI HÀNG HÓA</h2>
</div>
<form action="" method="post">
    <p>Mã loại</p>
    <input class="ipt" type="text" value="<?php  echo $danhmuckkk->iddm ?>" disabled>
    <p>Tên loại</p>
    <input class="ipt" type="text" value="<?php echo $danhmuckkk->name ?>" name="tenloai" required>
    <input type="submit" name="submit-editdm" value="SỬA">
    <button>NHẬP LẠI</button>
    <a href="index.php?act=listdm"><input value="DANH SÁCH" type="button" ></a><br> 
</form>
