<?php
require_once "../controller/danhmucController.php";
require_once "../controller/sanphamController.php";

require_once "admin/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            $danhmuc = new danhmucController();
            $danhmuc->adddm();
            require_once "admin/adddm.php";
            break;
        case 'listdm':
            $danhmuc = new danhmucController();
            $danhmuc->listdm();
            require_once "admin/listdm.php";
            break;
        case 'deletedm':
            $danhmuc = new danhmucController();
            $danhmuc->deletedm();
            require_once "admin/listdm.php";
            break;
        case 'editdm':
            $danhmuc = new danhmucController();
            $danhmuc->editdm();
            require_once "admin/editdm.php";
            break;
        // sản phẩm ----------------------sản phẩm---------------------------- sản phẩm
        case 'addsp':
            $sanpham = new sanphamController();
            $sanpham->addsp();
            // $sanpham->listdm();
            require_once "admin/addsp.php";
            break;
        case 'listsp':
            $sanpham = new sanphamController();
            $sanpham->listsp();
            require_once "admin/listsp.php";
            break;
        case 'deletesp':
            $sanpham = new sanphamController();
            $sanpham->deletesp();
            require_once "admin/listsp.php";
            break;
        case 'editsp':
            $sanpham = new sanphamController();
            $sanpham->editsp();
            require_once "admin/editsp.php";
            break;
    }
} else {
    require_once "admin/home.php";
}

require_once "admin/footer.php";
?>