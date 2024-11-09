<div class="box1">
    <p class="tieude">TÀI KHOẢN</p>
    <form action="">
        <h4>Tên đăng nhập</h4>
        <input class="iplogin" type="text">
        <h4>Mật khẩu</h4>
        <input class="iplogin" type="password"><br>

        <button>Đăng nhập</button><br>
        <a class="dk" href="">Quên mật khẩu</a> <br>
        <a class="dk" href="">Đăng kí thành viên</a>
    </form>
</div>


<div class="box2">
    <div>
        <p class="tieude">DANH MỤC</p>
        <div class="dm">
            <?php foreach ($listdm as $danhmuc) { ?>
                <a href="<?php echo 'index.php?act=sanpham&iddm=' . $danhmuc->iddm; ?>"><?php echo $danhmuc->name ?></a>
            <?php } ?>
        </div>
    </div>
</div>


<div class="timkiem">
    <form action="index.php?act=sanpham" method="post">
        <input type="text" name="timkiem" placeholder=" Từ khóa tìm kiếm">
        <input type="submit" value="Tìm kiếm" name="submit-timkiem">
   
    </form>
</div>


<div class="box3">
    <p class="tieude">SẢN PHẨM YÊU THÍCH</p>
    <div id="group">
        <?php foreach ($topsp as $sanphamyt) {
            $linksp = "index.php?act=sanphamct&idsp=$sanphamyt->id"; ?>
            <div style="margin-left:10px;">

                <img style="width:30px; height:30px;" src="<?php echo '/duanmau' . $sanphamyt->image ?>" alt="">
                <a style="text-decoration:none;" href="<?php echo $linksp ?>"><?php echo $sanphamyt->name ?></a>
            </div><br>
        <?php } ?>
    </div>
</div>