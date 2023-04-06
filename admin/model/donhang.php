<?php

$act = 'donhang';
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
$sql = 'select * from cart left join product on cart.id_product = product.id '.$additional.' limit '.$firstIndex.', '.$limit;
$stmt = $conn->prepare($sql);
$stmt->execute();
$cartList = $stmt->fetchAll();


$sql = 'select count(id) as total from cart where 1 '.$additional;
$stmt = $conn->query($sql);
$countResult = $stmt->fetchColumn();

$number = 0;
if($countResult != null){
    $number = ceil($countResult/$limit);
}

    function getall_cart(){
        $conn = connectdb();
        $stmt = $conn->prepare("select * from cart left join product on cart.id_product = product.id");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
       $kq = $stmt->fetchAll();
        return $kq;
    }
    function getall_cart_orders(){
        $conn = connectdb();
        $stmt = $conn->prepare("select * from cart left join product on cart.id_product = product.id");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
       $kq = $stmt->fetchAll();
        return $kq;
    }

    function getonecart($id){
        $conn = connectdb();
        $stmt = $conn->prepare("select * from cart left join product on cart.id_product = product.id where cart.id=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
   
    function updatecart($id, $id_product, $soluong, $total ,$updated_at){
        $conn = connectdb();
        $sql = 'update cart set id_product = "'.$id_product.'", soluong = "'.$soluong.'", total = "'.$total.'", updated_at = "'.$updated_at.'" where id = '.$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

    function addcart($id_product, $soluong, $total,$created_at, $updated_at){
        $conn = connectdb(); 
        $sql = "INSERT INTO cart (id, id_product, soluong, total,created_at, updated_at) values ( '.$id_product.', '.$soluong.', '.$total.', '.$created_at.', '.$updated_at.')";
        // use exec because no results are returned
        $conn->exec($sql);
    }

    
?>