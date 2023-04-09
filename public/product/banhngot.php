<head>
	<title>Bakery Shop</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="../css/trangchustyle.css">
	<link rel="stylesheet" href="css/trangchu.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<style type="text/css">
		body{background-image: url('https://cdn11.bigcommerce.com/s-5gk3908h6p/images/stencil/270x360/products/7986/11526/57939__65814.1637540476.jpg?c=1'); }
  		header{background-color: #660000; }
        .slick-prev:before, .slick-next:before{
            font-family: fontawesome;
            font-size: 30px;
            color: #110000;
        }
		.slick-prev:before{
            content:'\f053';
        }
        .slick-next:before{
            content:'\f054';
        }
    </style>
</head>
<body style="">
	<header class="">
		<div class="d-flex justify-content-between row">
			
			<div class="logo-container col-lg-1 ">
				<a href="index.php"><img src="https://theme.hstatic.net/1000313040/1000406925/14/logo.png?v=1952" alt="Bakery Shop Logo"></a>

			</div>
			<br>
			<div class="p_search col container">
				<div class="mx-auto col p_search "><br>
                    <ul class=" navbar nav">
						<li class="nav-item"><input  placeholder="Tìm kiếm" type="text">&nbsp<a class="fas fa-search text-white" href="index.php"></a> </li>
						<li class="nav-item"><a class=" fa fa-building nav-link rounded-sm bg-white font-weight-bolder" style="font-size:20px;color:#660000;"> Hệ Thống</a></li>
						<li class="nav-item"><a class=" fa fa-user nav-link rounded-sm bg-white font-weight-bolder" style="font-size:20px;color:#660000;"> Tài Khoản</a></li>
						<li class="nav-item"><a class=" fa fa-phone nav-link rounded-sm bg-white font-weight-bolder" style="font-size:20px;color:#660000;"> 000-000-0000</a></li>
						<li class="nav-item"><a class=" fa fa-shopping-bag nav-link rounded-sm bg-white font-weight-bolder" style="font-size:20px;color:#660000;" href="../cart.php"></a></li>
					</ul>
						</div>
				
			</div>
		</div>
		

		<div class="navigation-container container">
			<nav class="navbar navbar-expand-sm font-weight-bolder">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link text-white" href="../index.php">TRANG CHỦ</a></li>
					<li class="nav-item"><a class="nav-link text-white" href="../product.php">SẢN PHẨM</a></li>
					<li class="nav-item"><a class="nav-link text-white" href="../about_us.php">VỀ CHÚNG TÔI</a></li>
					<li class="nav-item"><a class="nav-link text-white" href="../contact.php">LIÊN HỆ</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<br>
	<div class="promotion_bakery_area main_title">
		<div>
			<h1 class="d-flex justify-content-center font-weight-bold text-warning ">MENU</h1>
            <h3 class="container d-flex justify-content-center font-weight-bold main_title">Bánh sinh nhật</h3>
		</div>
			
	</div>
	<section class="main_title">
	<div class="container bg-white">
	<br>
	<div class="row product_inner_row">
		
		<div class="col-lg-9">
			<div class="products-container  row ">
					<?php
						// Thực hiện kết nối tới cơ sở dữ liệu
						$conn = mysqli_connect("localhost", "root", "", "ct275_baocao");

						// Truy vấn để lấy tất cả sản phẩm từ bảng products
						$sql = "SELECT * FROM products";
						$result = mysqli_query($conn, $sql);

						// Hiển thị sản phẩm lên trang web
						if (mysqli_num_rows($result) > 0 ) {
							while($row = mysqli_fetch_assoc($result) ) {
                                if($row['id_category'] =='1'){
                                    echo '<div class="item col-lg-4"><br>';
                                    echo 	'<div class="cake_feature_item ">';
                                    echo 		'<div class="cake_img ">';
                                    echo 			'<img src="'. $row['thumbnail'] .'" alt="'. $row['title'] .'" width="250px">';
                                    echo 		'</div>';
                                    echo 		'<div class="cake_text">';
                                    echo 			'<h4>'. $row['price'] .'</h4>';
                                    echo 			'<h3>'. $row['title'] .'</h3><br>';
                                    echo 			'<a href="cart.php?id=' . $row['id'] . '">Thêm vào giỏ hàng</a>';
                                    echo 		'</div>';
                                    echo 	'</div>';
                                    echo '</div>';
                                }
                                else continue;
							}
						} else {
							echo "<p>No products found.</p>";
						}

						// Đóng kết nối
						mysqli_close($conn);
					?>
					
				</div>
		</div>
		<div class="col-lg-3">
		<aside class="left_sidebar p_catgories_widget">
            <div class="p_w_title ">
				<h3 class="font-weight-bolder font-italic">Danh Mục Menu</h3>
			</div>
			<div>
				<ul class="navbar-nav list_style">
					<li><a href="banhngot.php">Bánh Sinh Nhật</a></li>
					<li><a href="banhmi.php">Bánh Mì</a></li>
					<li><a href="banhman.php">Bánh Mặn</a></li>
					<li><a href="cookie.php">Cookie</a></li>
					<li><a href="minicake.php">Mincake</a></li>
				</ul>
			</div>
		</aside>
		</div>
	</div>
</div>
	</section>
    <div class="container">
        <a href="../index.php" class="btn btn-warning text-white btn-lg-3 ">Về Trang Chủ</a>
    </div><br>
	
	<footer id="contact" class="bg-img-90 " style="background-image:url('https://content.api.news/v3/images/bin/859ab640b31befd5ade828ca40497b4c');box-shadow: inset 0px 0px 400px 210px rgba(0, 0, 0, .7);height: 400px">
		<div class="navbar-brand  font-weight-bold text-white">
			<h2 class="font-weight-bolder" >Contact Us</h2>
		</div>
			<br>

		<div class="container">
		<div class="row  d-flex">
			<div class="address text-white col-lg-3 ">
				<p>3/2 Street</p>
				<p>CANTHO, VN 2002</p>
				<p>Phone: 000-000-BIẾT</p>
				<img src="https://www.pngkit.com/png/detail/19-198275_twitter-png-free-download-on-mbtskoudsalg-fb-twitter.png" alt="facebook" width="150px">
			</div>
			<div class="col-lg-3">
				<form>
					<div class="form-group">
						<label class="text-white" for="name">Name:</label>
						<input class="container" placeholder="Nhập tên người dùng" type="text" id="name" name="name" required>
					</div>
					<div class="form-group">
						<label class="text-white" for="email">Email:</label>
						<input class="container" placeholder="Nhập email người dùng" type="email" id="email" name="email" required>
					</div>
					<div class="form-group">
						<label class="text-white" for="message">Message:</label>
						<textarea class="container" id="message" name="message" rows="4" required></textarea>
						<br>
						<button class="" type="submit">Send Message</button>
					</div>
							
								
							

							
					</form>
			</div>
			<div class="col-lg-3 text-white ">
				<h4 class="text-white font-weight-bolder">
				CHÍNH SÁCH
				</h4>
				<br>
				<ul class="navbar-nav">
					<li class="nav-item font-italic">
					Chính sách và quy định chung
					</li>
					<li class="nav-item font-italic">
					Chính sách giao dịch, thanh toán
					</li>
					<li class="nav-item font-italic">
					Chính sách đổi trả
					</li>
					<li class="nav-item font-italic">
					Chính sách đổi trả
					</li>
					<li class="nav-item font-italic">
					Chính sách vận chuyển
					</li>
				</ul>
			</div>
			<div class="col-lg-3">
				<p class="main_title text-white">MỖI THÁNG CHÚNG TÔI ĐỀU CÓ NHỮNG ĐỢT GIẢM GIÁ DỊCH VỤ VÀ SẢN PHẨM NHẰM TRI ÂN KHÁCH HÀNG. ĐỂ CÓ THỂ CẬP NHẬT KỊP THỜI NHỮNG ĐỢT GIẢM GIÁ NÀY, VUI LÒNG NHẬP ĐỊA CHỈ EMAIL CỦA BẠN VÀO Ô DƯỚI ĐÂY</p>
				<img src="https://cdn.dangkywebsitevoibocongthuong.com/wp-content/uploads/2018/06/logo.png" alt="" width="200px">
			</div>
		</div>
		</div>
	</footer>
</body>
</html>