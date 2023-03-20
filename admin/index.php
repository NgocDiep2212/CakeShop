<?php
    session_start();
    ob_start();
    include("./model/connectdb.php");
    include("./model/danhmuc.php");
    include("./model/sanpham.php");
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
        

        case 'sanpham':
            // nhan yeu cau va xu ly
            // lay ds danh muc sp
            $kq=getall_sp();
            include "./view/sanpham/sanpham.php";
        break;
        
        
        case 'addProduct':
            $kq1=getall_dm();    
            $kq=getall_sp();
            if(isset($_POST['title'])&&($_POST['title'])){
                $title =$_POST['title'];
                $thumbnail =$_POST['thumbnail'];
                $price =$_POST['price'];
                $id_category =$_POST['id_category'];
                if(isset($_POST['content'])){
                    $content = $_POST['content'];
                    $content = str_replace('"', '\\"',$content);
                }
                $created_at = date('Y-m-d H:s:i');
                $updated_at = date('Y-m-d H:s:i');
                themsp($title, $thumbnail, $price, $id_category, $content,$created_at,$updated_at);   
                include "./view/sanpham/sanpham.php";       
            } 
            if(!isset($_POST['title'])){
                include "./view/sanpham/addsp.php";
            }

        break;
           
        case 'updateProduct':
            $kq1=getall_dm();    
            if(isset($_GET['id'])){
                $id =$_GET['id'];
                $kqone=getonesp($id);
                $kq=getall_sp();
                include "./view/sanpham/updatesp.php";
            }
            if(isset($_POST['id'])){
                $id =$_POST['id'];
                $id_category =$_POST['id_category'];
                $title =$_POST['title'];
                $price =$_POST['price'];
                $thumbnail =$_POST['thumbnail'];
                if(isset($_POST['content'])){
                    $content = $_POST['content'];
                    $content = str_replace('"', '\\"',$content);
                }
                $updated_at = date('Y-m-d H:s:i');
                updatesp($id, $title, $thumbnail, $price, $id_category, $content,$updated_at);
                $kq=getall_sp();
                include "./view/sanpham/sanpham.php";
            }
        break;

        case 'deleteProduct':
            if(isset($_GET['id'])){
                $id =$_GET['id'];
                deletesp($id);
            }
            $kq=getall_sp();
            include "./view/sanpham/sanpham.php";
        break;
        
    }
}
?>