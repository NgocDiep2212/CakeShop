<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./common/header.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- slick slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="./assets/js/index.js"></script>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <title>Document</title>


</head>
<body>
    <header class="" style="background-color: #660000;">
        <div class="container">
            <div class="d-flex justify-content-between row">
                <div class="logo-container col-lg-1 ">
                    <a href="index.php"><img src="https://theme.hstatic.net/1000313040/1000406925/14/logo.png?v=1952" alt="Bakery Shop Logo"></a>
                </div>
                <ul class="nav-group d-flex">
                    <li class="nav-item"><a class="nav-link text-white" href="/cake/public/index.php?act=trangchu">TRANG CHỦ</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/cake/public/index.php?act=category&id=1">SẢN PHẨM</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/cake/public/index.php?act=about_us">VỀ CHÚNG TÔI</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/cake/public/index.php?act=contact">LIÊN HỆ</a></li>
                </ul>
                    
                <div class="box-right">
                    <div class="search">
                            <form action="" method="get" class="form-search">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </span>
                                    <input type="text" class="form-control" id="search" name="search" placeholder="Tìm kiếm sản phẩm...">
                                </div>
                            </form>
                        </div>
                    <div class="user">
                            <i class="fa-regular fa-user"></i>
                            <ul class="header__navbar-user-menu">
                                        <li class="header__navbar-user-item">
                                            <a href="#">Tài khoản của tôi</a>
                                        </li>
                                        <li class="header__navbar-user-item">
                                            <a href="#">Địa chỉ của tôi</a>
                                        </li>
                                        <li class="header__navbar-user-item">
                                            <a href="#">Đơn mua</a>
                                        </li>
                                        <li class="header__navbar-user-item header__navbar-user-item--separate">
                                            <a href="#" onclick="exituser()">Đăng xuất</a>
                                        </li>
                            </ul>
                        </div>
                        <div class="cart"> 
                            <a href="/cake/public/index.php?act=cart"><i class="fa-solid fa-cart-shopping"></i></a>
                        </div>
                    </div>
        
                        
                        
                </div>
            </div>
        </div>
	</header>
</body>
</html>