<?php
include_once(__DIR__ . '/../model/danhmuc.php');
class danhmucController
{
    public function adddm()
    {
        if (isset($_POST['submit-adddm'])) {
            $tenloai = $_POST['tenloai'];
            $mDanhmuc = new danhmuc();
            $add = $mDanhmuc->insert_danhmuc(null, $tenloai);
            $thongbao = "Thêm thành công!";
        }
        require_once "../view/admin/adddm.php";
        
    }
    public function listdm()
    {
        $mDanhmuc = new danhmuc();
        $list = $mDanhmuc->alldm();
        require_once "../view/admin/listdm.php";
        
    }
    public function deletedm()
    {
        if (isset($_GET['iddm'])) {
            $iddm = $_GET['iddm'];
            $mDanhmuc = new danhmuc();
            $delete = $mDanhmuc->deletedm($iddm);
            if (!$delete) {
                header("location:index.php?act=listdm");
            }
        }
    }

    public function editdm()
    {
        if (isset($_GET['iddm'])) {
            $iddm = $_GET['iddm'];
            $mDanhmuc = new danhmuc();
            $danhmuckkk = $mDanhmuc->getIddm($iddm);
            if (isset($_POST['submit-editdm'])) {
                $tenloai = $_POST['tenloai'];
                $mDanhmuc = new danhmuc();
                $edit = $mDanhmuc->updatedm2($tenloai, $iddm);
                if (!$edit) {
                    header("location:index.php?act=listdm");
                }

            }


        }
        require_once "../view/admin/editdm.php";

    }

}


?>