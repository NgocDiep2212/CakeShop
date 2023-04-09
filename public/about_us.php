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

    <section class="main_title product_area p_100">
        <div class="container">
            <div class="main_title">
            <div class="row">
                <div class="col-lg-6">
                    <img src="https://daotaobeptruong.vn/wp-content/uploads/2020/11/banh-tiramisu.jpg" alt="gioithieu" width="450px">
                </div>
                <div class="col-lg-6 main_title">
                    <div class="main_title font-italic font-weight-lighte">
                        <h3 class="main_title">Thành Viên quản trị</h3>
                        <div class="promotion_left_text">
                            <p>Lương Trọng Phú</p><br>
                            <p>Trịnh Thị Ngọc Diệp</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <div>
                <h3 class="main_title">Chính sách Vận Chuyển - Giao Hàng</h3>
                <h4 class="p_w_title font-weight-bolder">Đến với chúng tôi các bạn được đảm bảo 100% bánh đến tay nguyên vẹn, không hư hỏng khi sử dụng dịch vụ giao hàng (ship)</h4>
                <p>Bánh kem không phải là một mặt hàng đơn giản có thể treo/móc nên việc vận chuyển cực kì khó khăn.</p>
                <p>Nếu giao bằng xe máy, người giao hàng phải xách bánh bằng một tay và lái xe 1 tay, đi chậm và cẩn thận nhất có thể.</p>
                <p>Nếu giao bằng ô tô đối với các bánh quá khổ, người giao bánh phải đi chậm và cẩn trọng hơn bình thường, thời gian vận chuyển sẽ lâu hơn.</p>
            </div>
            <br>
            <div class="p_w_title main_title">
                <h4 class="font-weight-bolder">Chúng tôi đảm bảo điều gì?</h4>
                <p>Việc đem con bỏ chợ là chuyện bình thường đối với các tiệm không uy tín.</p>
                <p>Tại tiệm bánh chúng tôi, khi bánh đến tay bạn thì người giao hàng sẽ yêu cầu bạn kiểm tra bánh, nếu xảy ra hư hỏng thì bạn được quyền yêu cầu mang bánh về sửa hoặc đổi bánh khác/ hoàn tiền tùy mức độ hư hỏng. Khách hàng sẽ KHÔNG chịu thêm bất cứ chi phí gì và nhận kèm một câu xin lỗi từ cửa hàng vì để shipper gây hư hỏng bánh.</p>
            </div>
            <br>
            <div class="main_title">
                <h4 class="font-weight-bolder">Tại sao không FREE SHIP?</h4>
                <p>Phí giao hàng xe máy cố định 5000đ/1km (5 ngàn đồng trên một kilometer), phí sàn 15.000đ.</p>
                <p>Đối với các bánh khổ lớn, bánh tầng cao giao bằng ô tô sẽ theo thỏa thuận 2 bên, tất nhiên MiaCake sẽ hỗ trợ thêm phí giao hoặc free với bánh khổ lớn.</p>
            </div>
            <br>
            <div class="">
                <p class="font-italic font-weight-lighte">*phí giao food, drink hiện tại các kênh giao hàng tại Đà Nẵng đa số từ 7.000đ/1km và tăng giá vào giờ cao điểm, lễ tết.</p>
            </div>
        </div>
        <hr>
    </div>
    </section>

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
