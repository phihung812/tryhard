<?php
include_once (__DIR__ . '/../model/sanpham.php');
include_once (__DIR__ . '/../model/danhmuc.php');
// require_once "../model/sanpham.php";
// require_once "../model/danhmuc.php";
class sanphamController
{

    public function list_9sp_list_dm()
    {
        $mSanpham = new sanpham();
        $spnew = $mSanpham->listsp_home();
        $topsp = $mSanpham->allsp_top6();
        $mDanhmuc = new danhmuc();
        $listdm = $mDanhmuc->alldm();
        require_once "./view/index/home.php";
    }


    public function list_sptop_list_dm_sanpham()
    {
        $mSanpham = new sanpham();
        $mDanhmuc = new danhmuc();
        if (isset($_GET['idsp'])) {
            $id = $_GET['idsp'];
            $sanphamct = $mSanpham->getIdsp($id);
            $sanphamcl = $mSanpham->getspcungloai($id);
        }

        if (isset($_POST['submit-timkiem'])) {
            $timkiem = $_POST['timkiem'];
        } else {
            $timkiem = "";
        }

        if (isset($_GET['iddm'])) {
            $iddm = $_GET['iddm'];
        } else {
            $iddm = 0;
        }

        $tendm = $mSanpham->get_ten_dm($iddm);
        $listsp = $mSanpham->allsp($timkiem, $iddm);
        $topsp = $mSanpham->allsp_top6();
        $listdm = $mDanhmuc->alldm();

        require_once "./view/index/sanpham.php";
    }
    public function list_sptop_list_dm_sanphamct()
    {
        $mSanpham = new sanpham();
        if (isset($_GET['idsp'])) {
            $id = $_GET['idsp'];
            $sanphamct = $mSanpham->getIdsp($id);
            $sanphamcl = $mSanpham->getspcungloai($id);
        }
        $topsp = $mSanpham->allsp_top6();
        $mDanhmuc = new danhmuc();
        $listdm = $mDanhmuc->alldm();

        require_once "./view/index/sanphamct.php";
    }

    public function addsp()
    {
        if (isset($_POST['submit-addsp'])) {
            $iddm = $_POST['iddm'];
            $name = $_POST['tensp'];
            $price = $_POST['giasp'];
            $mota = $_POST['mota'];

            $target_dir = "../images/";
            $target_img = $_FILES['anhsp']['name'];
            $image = $target_dir . $target_img;
            move_uploaded_file($_FILES['anhsp']['tmp_name'], $image);

            $mSanpham = new sanpham();
            $add = $mSanpham->insert_sanpham(null, $name, $price, $image, $mota, null, $iddm);
            if (!$add) {
                $thongbao = "Thêm sản phẩm thành công!";
            }
        }
        $mDanhmuc = new danhmuc();
        $listdm = $mDanhmuc->alldm();
        require_once "../view/admin/addsp.php";
    }


    public function listsp()
    {
        if (isset($_POST['submit-ok'])) {
            $kyw = $_POST['kyw'];
            $iddm = $_POST['iddm'];
        } else {
            $kyw = "";
            $iddm = 0;
        }
        $mSanpham = new sanpham();
        $list = $mSanpham->allsp($kyw, $iddm);
        $mDanhmuc = new danhmuc();
        $listdm = $mDanhmuc->alldm();
        require_once "../view/admin/listsp.php";
    }


    public function deletesp()
    {
        if (isset($_GET['idsp'])) {
            $idsp = $_GET['idsp'];
            $mSanpham = new sanpham();
            $delete = $mSanpham->deletesp($idsp);
            if (!$delete) {
                header("location:index.php?act=listsp");
            }
        }
    }

    public function editsp()
    {
        if (isset($_GET['idsp'])) {
            $id = $_GET['idsp'];
            $mSanpham = new sanpham();
            $sanphamkkk = $mSanpham->getIdsp($id);
            if (isset($_POST['submit-editsp'])) {
                $name = $_POST['tensp'];
                $price = $_POST['giasp'];
                $mota = $_POST['mota'];
                $iddm = $_POST['iddm'];
                if ($_FILES['anhsp']['name'] != null) {
                    $target_dir = "../images/";
                    $target_img = $_FILES['anhsp']['name'];
                    $image = $target_dir . $target_img;
                    move_uploaded_file($_FILES['anhsp']['tmp_name'], $image);
                } else {
                    $image = $sanphamkkk->image;
                }
                $msanpham = new sanpham();
                $edit = $msanpham->updatesp($name, $price, $image, $mota, $iddm, $id);
                if (!$edit) {
                    header("location:index.php?act=listsp");
                }

            }
        }
        $mDanhmuc = new danhmuc();
        $listdm = $mDanhmuc->alldm();
        require_once "../view/admin/editsp.php";

    }

}


?>