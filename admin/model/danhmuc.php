<?php
    function getall_dm(){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM category");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
       $kq = $stmt->fetchAll();
        return $kq;
    }

    function deleteCategory($id){
        $conn = connectdb();
        $sql = "DELETE FROM category where id = ".$id;
        // use exec because no results are returned
        $conn->exec($sql);
    }

    function getonedm($id){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM category where id=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
       $kq = $stmt->fetchAll();
        return $kq;
    }

    function updatedm($id,$tendm){
        $conn = connectdb();
        $sql = "UPDATE category SET name='".$tendm."' where id=".$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
    }

    function themdm($name){
        $conn = connectdb(); 
        $sql = "INSERT INTO category (name) values ('".$name."')";
        // use exec because no results are returned
        $conn->exec($sql);
    }
   
?>