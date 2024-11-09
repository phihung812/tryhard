<?php
require_once "controller/sanphamController.php";
require_once "controller/danhmucController.php";
<<<<<<< HEAD
require_once "controller/taikhoanController.php";
require_once "controller/binhluanController.php";
=======

>>>>>>> c3b98c8 (first commit)
require_once "view/index/header.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'lienhe':
<<<<<<< HEAD
            require_once "view/index/lienhe.php";
=======
            require_once "view/index/home.php";
>>>>>>> c3b98c8 (first commit)
            break;
        case 'sanphamct':
            $sanpham = new sanphamController();
            $sanpham->list_sptop_list_dm_sanphamct();
<<<<<<< HEAD

=======
            require_once "view/index/sanphamct.php";
>>>>>>> c3b98c8 (first commit)
            break;
        case 'sanpham':
            $sanpham = new sanphamController();
            $sanpham->list_sptop_list_dm_sanpham();
<<<<<<< HEAD
            break;
        case 'dangki':
            $mTaikhoan = new TaikhoanController();
            $mTaikhoan->dangki_taikhoan();
            break;
        case 'dangnhap':
            $mTaikhoan = new TaikhoanController();
            $mTaikhoan->dangnhap();
            break;
        
        case 'dangxuat':
            session_unset();
            header('location:index.php');
            break;

=======
            require_once "view/index/sanpham.php";
            break;
>>>>>>> c3b98c8 (first commit)
    }
} else {
    $sanpham = new sanphamController();
    $sanpham->list_9sp_list_dm();
<<<<<<< HEAD

=======
    require_once "view/index/home.php";
>>>>>>> c3b98c8 (first commit)
}


require_once "view/index/footer.php";

?>