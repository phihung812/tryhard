<?php
require_once "connect.php";
class sanpham
{
    public $connect;
    public function __construct()
    {
        $this->connect = new Connect();
    }
    // ADMIN ------------------------------------------
    public function insert_sanpham($id, $name, $price, $image, $mota, $luotxem, $iddm)
    {
        $sql = "INSERT INTO `sanpham` VALUES (?,?,?,?,?,?,?)";
        $this->connect->setQuery($sql);
        return $this->connect->loadData([$id, $name, $price, $image, $mota, $luotxem, $iddm]);
    }
    public function deletesp($id)
    {
        $sql = "DELETE FROM `sanpham` WHERE id = ?";
        $this->connect->setQuery($sql);
        return $this->connect->loadData([$id], false);
    }
    public function updatesp($name, $price, $image, $mota, $iddm, $id)
    {
        $sql = "UPDATE `sanpham` SET `name`=? WHERE `id`=?";
        $sql = "UPDATE `sanpham` SET `name`=?,`price`=?,`image`=?,`mota`=?,`iddm`=?  WHERE `id`=?";
        $this->connect->setQuery($sql);
        return $this->connect->loadData([$name, $price, $image, $mota, $iddm, $id], false);
    }

    // Lấy tất cả sản phẩm theo tên
    public function allsp($kyw, $iddm)
    {
        $sql = "SELECT * FROM `sanpham` WHERE 1=1";
        if ($kyw != "") {
            $sql .= " AND name LIKE '%$kyw%'";
        }
        if ($iddm > 0) {
            $sql .= " AND iddm = $iddm";
        }
        $sql .= " ORDER BY id DESC";
        $this->connect->setQuery($sql);
        return $this->connect->loadData();
    }
// lấy 9 sản phẩm mới nhất hiển thị ở trang chủ
    public function listsp_home()
    {
        $sql = "SELECT * FROM `sanpham` WHERE 1 ORDER BY id DESC LIMIT 9";
        $this->connect->setQuery($sql);
        return $this->connect->loadData();
    }
// lấy 6 sản phẩm nhiều lượt xem nhất
    public function allsp_top6()
    {
        $sql = "SELECT * FROM `sanpham` WHERE 1 ORDER BY luotxem DESC LIMIT 6";
        $this->connect->setQuery($sql);
        return $this->connect->loadData();
    }

// Lấy ra sản phẩm theo id truyền vào
    public function getIdsp($id)
    {
        $sql = "SELECT * FROM `sanpham` WHERE id = ?";
        $this->connect->setQuery($sql);
        return $this->connect->loadData([$id], false);
    }
// Lấy ra tên danh mục hiển thị ở boxright
    public function get_ten_dm($iddm)
    {
        if ($iddm > 0) {
            $sql = "SELECT * FROM `danhmuc` WHERE iddm = ?";
            $this->connect->setQuery($sql);
            return $this->connect->loadData([$iddm], false);
        } else {
            return "";
        }

    }
// lấy ra 7 sản phẩm cùng loại hiển thị ở boxright
    public function getspcungloai($id)
    {
        $sql = "SELECT * FROM `sanpham` ORDER BY RAND() LIMIT 7";


        $this->connect->setQuery($sql);
        return $this->connect->loadData();
    }
    


}

?>