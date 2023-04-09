

<!DOCTYPE html>
<html>
<head>
	<title>Bakery Shop</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/trangchustyle.css">
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
						<li class="nav-item"><a class=" fa fa-shopping-bag nav-link rounded-sm bg-white font-weight-bolder" style="font-size:20px;color:#660000;" href="cart.php"></a></li>
					</ul>
						</div>
				
			</div>
		</div>
		

		<div class="navigation-container container">
			<nav class="navbar navbar-expand-sm font-weight-bolder">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link text-white" href="index.php">TRANG CHỦ</a></li>
					<li class="nav-item"><a class="nav-link text-white" href="product.php">SẢN PHẨM</a></li>
					<li class="nav-item"><a class="nav-link text-white" href="about_us.php">VỀ CHÚNG TÔI</a></li>
					<li class="nav-item"><a class="nav-link text-white" href="contact.php">LIÊN HỆ</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<section class="banner ">
		<br>
		<div class="main_title">
				<h1 class="nav justify-content-center font-weight-bold text-warning">Welcome to Bakery Shop</h1>
		</div>
	<br>
		<!-- <a href="add.php" class="button-primary btn btn-outline-secondary ">Shop Now</a> -->
	</section>
	
	<div id="demo" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
			</ul>

			<!-- The slideshow -->
			<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="https://theme.hstatic.net/1000313040/1000406925/14/ms_banner_img2.jpg?v=1952" width="100%" height="100%">
			</div>
			<div class="carousel-item">
				<img src="https://theme.hstatic.net/1000313040/1000406925/14/ms_banner_img3.jpg?v=1952"  width="100%" height="100%">
			</div>
			<div class="carousel-item">
				<img src="https://theme.hstatic.net/1000313040/1000406925/14/ms_banner_img5.jpg?v=1952" width="100%" height="100%">
			</div>
			</div>

			<!-- Left and right controls -->
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
			</a>
	</div>
	<br>
	<section class="services" id="services">
		<div class="main_title">
			<h1 class="nav justify-content-center font-weight-bold text-warning ">Dịch vụ của chúng tôi</h1><br>
		</div>
		<hr>
		<div class="services-container promotion_bakery_area">
			<div class="service container row">
				<div class=" col-lg-6 picsize" >
					<img src="https://cdn.shopify.com/s/files/1/1158/7736/articles/thanh-thao-nghe-thuat-lam-banh-mon-banh-gato-thom-ngon-tron-vi_600x.png?v=1676510159" alt="Service 1" width="400px">
				</div>
				<div class="col-lg-6 p_w_title">
					<h3 class="main_title font-weight-bolder font-italic text-warning">Bánh ngọt &amp;  bánh nướng nhỏ tùy chỉnh</h3>
					<p>Đặt một chiếc bánh hoặc bánh nướng nhỏ tùy chỉnh cho sự kiện đặc biệt tiếp theo của bạn.</p>
				</div>
				</div>
		<hr>
<br>
			<div class="service container row">
				<div class="col-lg-6 ">
					<img  src="https://abby.vn/wp-content/uploads/2016/09/banh_mi_hoa_cuc_01.jpg" alt="Service 2" width="400px">
				</div>
				<div class="col-lg-6 p_w_title">
					<h3 class="main_title font-weight-bolder font-italic text-warning">Bánh mì &amp; Bánh mì ngọt</h3>
					<p>Chọn từ nhiều loại bánh mì và bánh ngọt, được làm mới hàng ngày.</p>
				</div>
					</div>
					<hr>
					<br>

			<div class="service container row">
				<div class="col-lg-6">
					<img  src="https://media.istockphoto.com/id/1213165121/vi/anh/n%E1%BB%AF-th%E1%BB%A3-l%C3%A0m-b%C3%A1nh-ng%C6%B0%E1%BB%9Di-m%E1%BB%B9-g%E1%BB%91c-t%C3%A2y-ban-nha-trang-tr%C3%AD-b%C3%A1nh-cupcakes-thu%E1%BA%A7n-chay.jpg?s=612x612&w=0&k=20&c=3bxEci8XcFHZP5SXi9tKg9BJSDPrQcdUcSTSvnoqrmo=" alt="Service 3" width="400px">
				</div>
				<div class="col-lg-6 p_w_title">
					<h3 class="main_title font-weight-bolder font-italic text-warning">Dịch vụ ăn uống &amp; Sự kiện</h3>
					<p>Hãy để chúng tôi phục vụ sự kiện tiếp theo của bạn, dù lớn hay nhỏ.</p>
				</div>
			</div>
		</div>
	</section>
	<br><hr>
	<section class="products promotion_bakery_area" id="products">
	<div class="container">
		<div class="cake_feature_inner">
		<div class="main_title">
			<h1 class="nav justify-content-center font-weight-bold text-warning ">Sản phẩm của chúng tôi</h1>
		</div>
			<br>
		<div class="products-container cake_feature_slider owl-carousel">
			<div class=" row filtering">
			<?php
			// Thực hiện kết nối tới cơ sở dữ liệu
			$conn = mysqli_connect("localhost", "root", "", "ct275_baocao");

			// Truy vấn để lấy tất cả sản phẩm từ bảng products
			$sql = "SELECT * FROM products";
			$result = mysqli_query($conn," SELECT * FROM products");

			// Hiển thị sản phẩm lên trang web
			if ( mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {

					echo '<div class="item col-12">';
       				echo 	'<div class="cake_feature_item ">';
       				echo 		'<div class="cake_img ">';
       				echo 			'<img src="'. $row['thumbnail'] .'" alt="'. $row['title'] .'" width="500px">';
       				echo 		'</div>';
       				echo 		'<div class="cake_text">';
       				echo 			'<h4>'. $row['price'] .'</h4>';
       				echo 			'<h3>'. $row['title'] .'</h3>';
					echo 			'<a href="product.php?id=' . $row['id'] . '">Xem Sản Phẩm</a>';
       				echo 		'</div>';
       				echo 	'</div>';
       				echo '</div>';
				}
			}

			// Đóng kết nối
			mysqli_close($conn);
			?>
		</div></div>
		</div></div>
	</section>
<hr>
	<section class="about-us container-fluid" id="about-us">
		<div class="main_title">
			<h1 class="nav justify-content-center font-weight-bold text-warning ">About Us</h1><br>
		</div>
			<div class="row">
			<img class="col" src="https://theme.hstatic.net/1000313040/1000406925/14/intro.png?v=1952" alt="">
			<div class="col">
				<p>Chúng tôi là một tiệm bánh gia đình đã phục vụ cộng đồng hơn 30 năm. Đội ngũ thợ làm bánh chuyên nghiệp của chúng tôi chỉ sử dụng những nguyên liệu tốt nhất để tạo ra những món ăn ngon mà mọi người đều có thể thưởng thức. Cho dù bạn đang tìm kiếm bánh ngọt tùy chỉnh hay bánh mì mới nướng, chúng tôi đều có thứ dành cho tất cả mọi người.</p>
				<a href="#contact" class="button-secondary">Get in Touch</a>
			</div>
			
		</div>
		
		
	</section><br>

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


	<script type="text/javascript" src="frontend/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
		$('.filtering').slick({
			slidesToShow: 4,
			slidesToScroll: 3,
			arrows:true,
			speed:400
		});

		var filtered = false;

		$('.js-filter').on('click', function(){
		if (filtered === false) {
			$('.filtering').slick('slickFilter',':even');
			$(this).text('Unfilter Slides');
			filtered = true;
		} else {
			$('.filtering').slick('slickUnfilter');
			$(this).text('Filter Slides');
			filtered = false;
		}
		});
	</script>
</body>

</html>