<?php
    function getall_user(){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * from user");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
       $kq = $stmt->fetchAll();
        return $kq;
    }

    function deleteuser($id){
        $conn = connectdb();
        $sql = "DELETE FROM user where id = ".$id;
        // use exec because no results are returned
        $conn->exec($sql);
    }

    function getoneuser($id){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * from user where id=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }

    function updateuser($id, $name, $username, $password, $SDT, $address, $email, $role ,$updated_at){
        $conn = connectdb();
        $sql = 'update user set name ="'.$name.'", updated_at = "'.$updated_at.'", email = "'.$email.'", role = "'.$role.'", username = "'.$username.'", password = "'.$password.'", address = "'.$address.'", SDT = "'.$SDT.'" where id = '.$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

    function themuser($name, $username, $password, $SDT, $address, $email, $role,$created_at,$updated_at){
        $conn = connectdb(); 
        $sql = "INSERT INTO user (name, password, username, SDT, address, email, role, created_at, updated_at) values ('".$name."','".$password."','".$username."','".$SDT."','".$address."','".$email."','".$role."','".$created_at."','".$updated_at."')";
        // use exec because no results are returned
        $conn->exec($sql);
    }

    
   
?>