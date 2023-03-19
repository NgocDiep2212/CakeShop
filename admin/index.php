<?php
    session_start();
    ob_start();
    include("./model/connectdb.php");
    include("./model/danhmuc.php");
    include("../common/header.php");

    if(isset($_GET['act'])){
        switch ($_GET['act']){
            case 'danhmuc':
            // nhan yeu cau va xu ly
            // lay ds danh muc
            $kq=getall_dm();
            include "./view/danhmuc/danhmuc.php";
        break;

        case 'deleteCategory':
            if(isset($_GET['id'])){
                $id =$_GET['id'];
                deleteCategory($id);
            }
            $kq=getall_dm();
            include "./view/danhmuc/danhmuc.php";
        break;

        case 'updateCategory':
            if(isset($_GET['id'])){
                $id =$_GET['id'];
                $kqone=getonedm($id);
                $kq=getall_dm();
                include "./view/danhmuc/updatedm.php";
            }
            if(isset($_POST['id'])){
                $id =$_POST['id'];
                $name =$_POST['name'];
                updatedm($id,$name);
                $kq=getall_dm();
                include "./view/danhmuc/danhmuc.php";
            }
        break;
        
        case 'addCategory':    
            
            if(isset($_POST['name'])&&($_POST['name'])){
                $name =$_POST['name'];
                themdm($name);   
                $kq=getall_dm();
                include "./view/danhmuc/danhmuc.php";       
            } else{
                include "./view/danhmuc/adddm.php";
            }

        break;
        }
        
    }
?>