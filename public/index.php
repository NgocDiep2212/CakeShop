<?php
include("./common/header.php");
include("../admin/model/connectdb.php");
include("../admin/model/danhmuc.php");
include("../admin/model/sanpham.php");
include("../admin/model/sanphamdanhmuc.php");

if(isset($_GET['act'])){
        switch ($_GET['act']){
            case 'trangchu':
            // nhan yeu cau va xu ly
            // lay ds danh muc
            $kq=getall_sp();
            $kq1 = getall_spdm_tc('1');
            $kq2 = getall_spdm_tc('2');
            $kq3 = getall_spdm_tc('3');
            $kq4 = getall_spdm_tc('4');
            include "./view/index.php";
        break;
           
            case 'category':
            // nhan yeu cau va xu ly
            $kqdm=getall_dm();
            if($_GET['id']){
                $id = $_GET['id'];
            }
            $kqonedm=getonedm($id);
            $kq = getall_spdm($id);
            include "./view/category.php";
        break;
            case 'services':
            // nhan yeu cau va xu ly
            // lay ds danh muc
            $kq=getall_dm();
            include "./view/services.php";
        break;
            case 'contact':
            // nhan yeu cau va xu ly
            // lay ds danh muc
            $kq=getall_dm();
            include "./view/contact.php";
        break;
            case 'cart':
            // nhan yeu cau va xu ly
            // lay ds danh muc
            $kq=getall_dm();
            include "./view/cart.php";
        break;
            case 'about_us':
            // nhan yeu cau va xu ly
            // lay ds danh muc
            $kq=getall_dm();
            include "./view/about_us.php";
        break;
            

    }   
}

include "./common/footer.php";
?>