
<div class="all">
    <div class="boxleft">
        <div class="box4">

            <div class="tieude2"><?php echo $sanphamct->name ?></div>
            <div class="noidung">
                <img src="<?php echo '/duanmau' . $sanphamct->image ?>" alt="">
                <div class="dulieu">
                    <li><span>MÃ HÀNG HÓA : <span><?php echo $sanphamct->id ?></span></span></li>
                    <li><span>TÊN HÀNG HÓA : <span><?php echo $sanphamct->name ?></span></span></li>
                </div>
            </div>
        </div>
        <div class="box4">
            <div class="tieude2">BÌNH LUẬN</div>
            <div class="noidung"></div>
        </div>
        <div class="box6">
            <div class="tieude2">SẢN PHẨM CÙNG LOẠI</div>

            <div class="noidung">
                <?php foreach ($sanphamcl as $sanpham) {
                    $linksp = "index.php?act=sanphamct&idsp=$sanpham->id"; ?>
                    <li>
                        <a href="<?php echo $linksp ?>"><?php echo $sanpham->name ?></a>
                    </li>
                <?php } ?>
            </div>
        </div>
    </div>

    <aside class="boxright">
        <?php require_once "boxright.php"; ?>
    </aside>
</div>