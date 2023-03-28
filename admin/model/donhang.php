<?php
    function getall_orders(){
        $conn = connectdb();
        $stmt = $conn->prepare("select orders.id, orders.id_user, orders.id_product, orders.ngaydat, orders.ngaygiao,orders.noigiao, orders.trangthaithanhtoan, orders.hinhthucthanhtoan, orders.trangthai, user.name, user.address, product.price from orders left join user on user.id = orders.id_user join product on orders.id_product = product.id");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
       $kq = $stmt->fetchAll();
        return $kq;
    }

    function getoneOrders($id){
        $conn = connectdb();
        $stmt = $conn->prepare("select orders.id, orders.id_user, orders.id_product, orders.ngaydat, orders.ngaygiao,orders.noigiao, orders.trangthaithanhtoan, orders.hinhthucthanhtoan, orders.trangthai, user.name, user.address, product.price from orders left join user on user.id = orders.id_user join product on orders.id_product = product.id where orders.id=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
   
    function updateorders($id, $id_user, $id_product, $noigiao, $hinhthucthanhtoan, $trangthaithanhtoan, $trangthai ,$updated_at){
        $conn = connectdb();
        $sql = 'update orders set id_user = "'.$id_user.'", id_product = "'.$id_product.'", noigiao = "'.$noigiao.'", hinhthucthanhtoan = "'.$hinhthucthanhtoan.'", trangthaithanhtoan = "'.$trangthaithanhtoan.'", trangthai = "'.$trangthai.'", updated_at = "'.$updated_at.'" where id = '.$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

    function addOrders($id, $id_user, $id_product, $noigiao, $hinhthucthanhtoan, $trangthaithanhtoan, $trangthai ,$created_at, $updated_at){
        $conn = connectdb(); 
        $sql = "INSERT INTO orders (id_user, id_product, noigiao, hinhthucthanhtoan, trangthaithanhtoan, trangthai, created_at, updated_at) values ('".$id_user."','".$id_product."','".$noigiao."','".$hinhthucthanhtoan."','".$trangthaithanhtoan."','".$trangthai."','".$created_at."','".$updated_at."')";
        // use exec because no results are returned
        $conn->exec($sql);
    }

    
?>