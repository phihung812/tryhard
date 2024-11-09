<div class="addhh">
    <h2 style="padding-top: 10px; margin-left: 10px; color: #606063;">THÊM MỚI LOẠI HÀNG HÓA</h2>
</div>
<form action="index.php?act=adddm" method="post">
    <p>Mã loại</p>
    <input class="ipt" type="text" disabled>
    <p>Tên loại</p>
    <input class="ipt" type="text" name="tenloai" required>
    <button name="submit-adddm">THÊM MỚI</button>
    <button>NHẬP LẠI</button>
    <a href="index.php?act=listdm"><input value="DANH SÁCH" type="button" ></a><br>
    <?php 
        if(isset($thongbao) && ($thongbao != "")){
            echo "<p>$thongbao</p>";
        }
    ?>
</form>
