<?php

$act = 'ttdonhang';
$limit = 5;
$page = 1;
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
if($page <= 0){
    $page = 1;
}
$firstIndex = ($page-1)*$limit;

$search = '';
if(isset($_GET['search'])){
    $search = $_GET['search'];
}
//trang can lay san pham. so phan tu tren 1 trang: $limit
$additional = '';

if(!empty($search)){
    $additional = 'and id like "%'.$search.'%"';
}

$conn = connectdb();
$sql = 'select * from orders '.$additional.' limit '.$firstIndex.', '.$limit;
$stmt = $conn->prepare($sql);
$stmt->execute();
$ordersList = $stmt->fetchAll();


$sql = 'select count(id) as total from orders where 1 '.$additional;
$stmt = $conn->query($sql);
$countResult = $stmt->fetchColumn();

$number = 0;
if($countResult != null){
    $number = ceil($countResult/$limit);
}

    function getall_orders(){
        $conn = connectdb();
        $stmt = $conn->prepare("select * from orders");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
       $kq = $stmt->fetchAll();
        return $kq;
    }

    function getoneorders($id){
        $conn = connectdb();
        $stmt = $conn->prepare("select * from orders where orders.id=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
   
    function updateorders($id, $id_user, $name, $tongtien, $address, $tel, $ngaydat, $hinhthucthanhtoan, $trangthaithanhtoan, $trangthai, $note ,$updated_at){
        $conn = connectdb();
        $sql = 'update orders set id_user = "'.$id_user.'", name = "'.$name.'", tongtien = "'.$tongtien.'", address = "'.$address.'", tel = "'.$tel.'", ngaydat = "'.$ngaydat.'", hinthucthanhtoan = "'.$hinthucthanhtoan.'", trangthaithanhtoan = "'.$trangthaithanhtoan.'", trangthai = "'.$trangthai.'", note = "'.$note.'", updated_at = "'.$updated_at.'" where id = '.$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

    function addorders($id_user, $name, $tongtien, $address, $tel, $ngaydat, $hinhthucthanhtoan, $trangthaithanhtoan, $trangthai, $note ,$created_at, $updated_at){
        $conn = connectdb(); 
        $sql = "INSERT INTO orders (id, id_user, name, tongtien, address, tel, ngaydat, hinhthucthanhtoan, trangthaithanhtoan, trangthai, note , created_at, updated_at) values ( '.$id.', '.$id_user.', '.$name.', '.$tongtien.', '.$address.', '.$tel.', '.$ngaydat.', '.$hinhthucthanhtoan.', '.$trangthaithanhtoan.', '.$trangthai.', '.$note.' , '.$created_at.', '.$updated_at.')";
        // use exec because no results are returned
        $conn->exec($sql);
    }

    
?>