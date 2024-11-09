<?php
require_once "connect.php";
class danhmuc
{
    public $connect;
    public function __construct()
    {
        $this->connect = new Connect();
    }
    public function insert_danhmuc($iddm, $tendm ){
        $sql = "INSERT INTO `danhmuc` VALUES (?,?)";
        $this->connect->setQuery($sql);
        return $this->connect->loadData([$iddm, $tendm]);
    }
    public function alldm(){
        $sql = "SELECT * FROM `danhmuc`";
        $this->connect->setQuery($sql);
        return $this->connect->loadData();
    }
    public function deletedm($iddm){
        $sql = "DELETE FROM `danhmuc` WHERE iddm = ?";
        $this->connect->setQuery($sql);
        return $this->connect->loadData([$iddm],false);
    }

    public function getIddm($iddm){
        $sql = "SELECT * FROM `danhmuc` WHERE iddm = ?";
        $this->connect->setQuery($sql);
        return $this->connect->loadData([$iddm],false);
    }
    public function updatedm($name,$iddm){
        $sql = "UPDATE `danhmuc` SET `name`=? WHERE `iddm`=?";
        $this->connect->setQuery($sql);
        return $this->connect->loadData([$name, $iddm],false);
    }
    public function updatedm2($name, $iddm){
        $sql = "UPDATE `danhmuc` SET `name`=? WHERE `iddm`=?";
        $this->connect->setQuery($sql);
        return $this->connect->loadData([$name, $iddm],false);
    }

    
}

?>