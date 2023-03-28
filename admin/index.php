<?php
    session_start();
    ob_start();
    include("./model/connectdb.php");
    include("./model/danhmuc.php");
    include("./model/sanpham.php");
    include("./model/nguoidung.php");
    include("./model/donhang.php");
    include("./common/header.php");
    include("./common/utility.php");

    if(isset($_GET['act'])){
        switch ($_GET['act']){
    // category
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
            header('Location: index.php?act=danhmuc'); 
            die(); 
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
                header('Location: index.php?act=danhmuc'); 
                die(); 
            }
        break;
        
        case 'addCategory':    
            
            if(isset($_POST['name'])&&($_POST['name'])){
                $name =$_POST['name'];
                themdm($name);   
                $kq=getall_dm();
                header('Location: index.php?act=danhmuc'); 
                die(); 
            } else{
                include "./view/danhmuc/adddm.php";
            }

        break;
        
    // product
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
                header('Location: index.php?act=sanpham'); 
                die();     
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
                header('Location: index.php?act=sanpham'); 
                die();  
            }
        break;

        case 'deleteProduct':
            if(isset($_GET['id'])){
                $id =$_GET['id'];
                deletesp($id);
            }
            $kq=getall_sp();
            header('Location: index.php?act=sanpham'); 
            die();  
        break;

    // user
        case 'user':
            // nhan yeu cau va xu ly
            // lay ds danh muc sp
            $kq=getall_user();
            include "./view/nguoidung/user.php";
        break;

        case 'adduser':   
            $kq=getall_user();
            if(isset($_POST['id'])&&($_POST['id'])){
                $name =$_POST['name'];
                $username =$_POST['username'];
                $address =$_POST['address'];
                $email =$_POST['email'];
                $SDT =$_POST['SDT'];
                $role =$_POST['role'];
                $password =$_POST['password'];
                $created_at = date('Y-m-d H:s:i');
                $updated_at = date('Y-m-d H:s:i');
                themuser($name, $username, $password, $SDT, $address, $email, $role,$created_at,$updated_at);   
                header('Location: index.php?act=user'); 
                die(); 
            } 
            if(!isset($_POST['id'])){     
                include "./view/nguoidung/adduser.php";
            }

        break;
           
        case 'updateuser':   
            if(isset($_GET['id'])){
                $id =$_GET['id'];
                $kqone=getoneuser($id);
                $kq=getall_user();
                include "./view/nguoidung/updateuser.php";
            }
            if(isset($_POST['id'])){
                $id =$_POST['id'];
                $name =$_POST['name'];
                $username =$_POST['username'];
                $address =$_POST['address'];
                $email =$_POST['email'];
                $SDT =$_POST['SDT'];
                $role =$_POST['role'];
                $password =$_POST['password'];
                $updated_at = date('Y-m-d H:s:i');
                updateuser($id, $name, $username, $password, $SDT, $address, $email, $role ,$updated_at);
                $kq=getall_user();
                header('Location: index.php?act=user'); 
                die(); 
            }
        break;

        case 'deleteuser':
            if(isset($_GET['id'])){
                $id =$_GET['id'];
                deleteuser($id);
            }
            $kq=getall_user();
            header('Location: index.php?act=user'); 
            die(); 
        break;

        //orders
        case 'donhang':
            // nhan yeu cau va xu ly
            // lay ds danh muc sp
            $kq=getall_orders();
            include "./view/donhang/donhang.php";
        break;
        
        case 'updateOrders':   
            if(isset($_GET['id'])){
                $id =$_GET['id'];
                $kqone = getoneOrders($id);
                $kq=getall_orders();
                include "./view/donhang/updatedonhang.php";
            }
            if(isset($_POST['id'])){
                $id_product = $_POST['id_product'];
                $id_user = $_POST['id_user'];
                $id = $_POST['id'];
                $noigiao = $_POST['noigiao'];
                $hinhthucthanhtoan = $_POST['hinhthucthanhtoan'];
                $trangthaithanhtoan = $_POST['trangthaithanhtoan'];
                $trangthai = $_POST['trangthai'];
                $price = $_POST['price'];
                $updated_at = date('Y-m-d H:s:i');
                updateorders($id, $id_user, $id_product, $noigiao, $hinhthucthanhtoan, $trangthaithanhtoan, $trangthai ,$updated_at);
                $kq=getall_orders();
                header('Location: index.php?act=donhang'); 
                die(); 
            }
        break;

        case 'addOrders':   
            $kq=getall_orders();
            if(isset($_POST['id'])&&($_POST['id'])){
                $id_product = $_POST['id_product'];
                $id_user = $_POST['id_user'];
                $id = $_POST['id'];
                $noigiao = $_POST['noigiao'];
                $hinhthucthanhtoan = $_POST['hinhthucthanhtoan'];
                $trangthaithanhtoan = $_POST['trangthaithanhtoan'];
                $trangthai = $_POST['trangthai'];
                $price = $_POST['price'];
                $updated_at = date('Y-m-d H:s:i');
                $created_at = date('Y-m-d H:s:i');
                addorders($id, $id_user, $id_product, $noigiao, $hinhthucthanhtoan, $trangthaithanhtoan, $trangthai ,$created_at, $updated_at); 
                header('Location: index.php?act=donhang'); 
                die(); 
            } 
            if(!isset($_POST['id'])){     
                include "./view/donhang/adddonhang.php";
            }

        break;
    }
}
?>