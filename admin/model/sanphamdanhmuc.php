<?php 
    function getall_spdm($id){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * from product where product.id_category=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
    function getall_spdm_tc($id){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * from product where product.id_category=".$id." limit 0,8");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
?>