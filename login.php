<?php 
ob_start();
session_start();
require_once('./admin/model/connectdb.php');
    $username = $password = '';
    if(!empty($_POST)){
        if(isset($_POST['username'])){
            $username = $_POST['username'];
            $username = str_replace('"', '\\"',$username);
        }
        if(isset($_POST['password'])){
            $password = $_POST['password'];
            $password = str_replace('"', '\\"',$password);
        }

        $conn = connectdb();
        $stmt = $conn->prepare("select * from user where username='".$username."' and password='".$password."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        
        if(isset($kq)){
            $role = $kq['role'];
            $_SESSION['role'] = $role;
            $id_user = $kq['id'];
            if(isset($id_user)) $_SESSION['id_user'] = $id_user;
            $username = $kq['username'];
            if(isset($id_user)) $_SESSION['username'] = $username;
            if($role == '0'){
                header('location: ./public/index.php?act=trangchu');
            }else if($role == '1'){
                header('location: ./admin/index.php?act=category');
            }
        }
        
        
        else{
             $txt_error ="Username hoặc Password không tồn tại";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="./public/assets/css/login.css">
</head>
<body>
<div class="page">
  <div class="container">
    <div class="left">
        <div class="login">Login</div>
        <div class="eula">By logging in you agree to the ridiculously long terms that you didn't bother to read</div>
        </div>
        <div class="right">
        <svg viewBox="0 0 320 300">
            <defs>
            <linearGradient
                            inkscape:collect="always"
                            id="linearGradient"
                            x1="13"
                            y1="193.49992"
                            x2="307"
                            y2="193.49992"
                            gradientUnits="userSpaceOnUse">
                <stop
                    style="stop-color:#ff00ff;"
                    offset="0"
                    id="stop876" />
                <stop
                    style="stop-color:#ff0000;"
                    offset="1"
                    id="stop878" />
            </linearGradient>
            </defs>
            <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
        </svg>
        <div class="form">
            <form method="post">
                <label for="username">Username</label>
                <input type="username" id="username">
                <label for="password">Password</label>
                <input type="password" id="password">
                <p style="color: red; font-size: 13px;">
<?php
    if(isset($txt_error)&&($txt_error != "")){
        echo $txt_error;
    }
?>
                </p>
                <input type="submit" name="submit" id="submit" class="form-submit" value="Log in"/>
            </form>
        </div>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./public/assets/js/login.js"></script>
</body>
</html>