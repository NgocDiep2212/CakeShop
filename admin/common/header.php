<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul class="nav nav-tabs">
<?php 
    if(isset($_GET['act'])){
        $ten = $_GET['act'];
    }
    
?>
            <li class="nav-item">
                <a class="nav-link <?php if($ten == 'danhmuc') echo 'active'?>" href="index.php?act=danhmuc">Quản Lý Danh Mục</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($ten == 'sanpham') echo 'active'?>" href="index.php?act=sanpham">Quản Lý Sản Phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($ten == 'user') echo 'active'?>" href="index.php?act=user">Quản Lý Người Dùng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($ten == 'donhang') echo 'active'?>" href="index.php?act=donhang">Quản Lý Đơn Hàng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($ten == 'ttdonhang') echo 'active'?>" href="../ttdonhang/">Quản Lý Tình Trạng Đơn Hàng</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" onclick="exituser();" href="#">Thoát</a>
            </li>
        </ul>
</body>
</html>