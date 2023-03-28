<?php
    function getall_sp(){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT product.id, product.title, product.price, product.thumbnail, product.id_category, product.created_at, product.updated_at, category.name FROM product left join category on category.id = product.id_category");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
       $kq = $stmt->fetchAll();
        return $kq;
    }

    function deletesp($id){
        $conn = connectdb();
        $sql = "DELETE FROM product where id = ".$id;
        // use exec because no results are returned
        $conn->exec($sql);
    }

    function getonesp($id){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT product.id, product.content, product.title, product.price, product.thumbnail, product.id_category, product.created_at, product.updated_at, category.name FROM product left join category on category.id = product.id_category where product.id=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }

    function updatesp($id, $title, $thumbnail, $price, $id_category, $content,$updated_at){
        $conn = connectdb();
        $sql = 'update product set title ="'.$title.'", updated_at = "'.$updated_at.'", thumbnail = "'.$thumbnail.'", price = "'.$price.'", content = "'.$content.'", id_category = "'.$id_category.'" where id = '.$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
    }

    function themsp($title, $thumbnail, $price, $id_category,$content,$created_at,$updated_at){
        $conn = connectdb(); 
        $sql = "INSERT INTO product (title, price, thumbnail, id_category, content, created_at, updated_at) values ('".$title."','".$price."','".$thumbnail."','".$id_category."','".$content."','".$created_at."','".$updated_at."')";
        // use exec because no results are returned
        $conn->exec($sql);
    }
   
   
?>