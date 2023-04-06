<!-- cart.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Bakery Shop</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/trangchustyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body >
<header class="bg-warning">
		<div class="d-flex justify-content-between row">
			
			<div class="logo-container col-lg-1 ">
				<a href="index.php"><img src="https://theme.hstatic.net/1000313040/1000406925/14/logo.png?v=1952" alt="Bakery Shop Logo"></a>

			</div>
			<br>
			<div class="p_search col container">
				<div class="mx-auto col p_search "><br>
					<ul class=" navbar nav">
						<li class="nav-item"><input  placeholder="Tìm kiếm" type="text"> <i class="fas fa-search"></i> </li>
						<li class="nav-item"><a class="text-white fa fa-building nav-link" style="font-size:30px;color:lightblue;"> Hệ Thống</a></li>
						<li class="nav-item"><a class="text-white fa fa-user nav-link" style="font-size:30px;color:lightblue;"> Tài Khoản</a></li>
						<li class="nav-item"><a class="text-white fa fa-phone nav-link" style="font-size:30px;color:lightblue;"> 000-000-0000</a></li>
						<li class="nav-item"><a class="text-white fa fa-shopping-bag nav-link" style="font-size:30px;color:lightblue;" href="cart.php"></a></li>
					</ul>
						</div>
				
			</div>
		</div>
		

		<div class="navigation-container container">
			<nav class="navbar navbar-expand-sm">
				<ul class="navbar-nav bold">
					<li class="nav-item"><a class="nav-link text-white" href="index.php">TRANG CHỦ</a></li>
					<li class="nav-item"><a class="nav-link text-white" href="../services">DỊCH VỤ</a></li>
					<li class="nav-item"><a class="nav-link text-white" href="product.php">SẢN PHẨM</a></li>
					<li class="nav-item"><a class="nav-link text-white" href="../about">VỀ CHÚNG TÔI</a></li>
					<li class="nav-item"><a class="nav-link text-white" href="../contact">LIÊN HỆ</a></li>
				</ul>
			</nav>
		</div>
	</header>
<body>
	<br><hr>
	<h1 class="nav justify-content-center font-weight-bold text-warning ">Shopping Cart</h1>
<br>
	<div class="cart container">
		<table class="table table-hover">
			<tr>
				
				<th>Tên Sản Phẩm</th>
				<th>Giá</th>
				<th>Số Lượng</th>
				<th>Tổng Cộng</th>
				<th>Action</th>
			</tr>

			<?php
				// Thực hiện kết nối tới cơ sở dữ liệu
				$conn = mysqli_connect("localhost", "root", "", "ct275_baocao");

				// Kiểm tra nếu có id sản phẩm được truyền vào 
			  if(isset($_GET['id'])) {
			  	// Lấy id sản phẩm và số lượng hiện có trong giỏ hàng
			  	$id = $_GET['id'];
			  	$quantity = 1;

				  // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
				  if(isset($_SESSION['cart'][$id])) {
					  // Nếu có rồi thì tăng số lượng sản phẩm thêm 1
					  $quantity += $_SESSION['cart'][$id];
				  }

				  // Thêm sản phẩm vào giỏ hàng
				  $_SESSION['cart'][$id] = $quantity;
			  }

				// Nếu giỏ hàng khác rỗng thì hiển thị các sản phẩm trong giỏ hàng
				if(!empty($_SESSION['cart'])) {
					$cart_total = 0;

					foreach($_SESSION['cart'] as $id => $quantity) {
						// Truy vấn để lấy thông tin sản phẩm trong bảng products
						$sql = "SELECT * FROM product WHERE id = $id";
						$result = mysqli_query($conn, $sql);

						if(mysqli_num_rows($result) > 0) {
							$row = mysqli_fetch_assoc($result);

							$subtotal = $row['price'] * $quantity;
							$cart_total += $subtotal;
						foreach($result as $result){ 
							
							echo "<tr>";
							echo "<td>" . $row['title'] . "</td>";
							echo "<td>" . $row['price'] . "đ</td>";
							echo "<td>" . $quantity . "</td>";
							echo "<td>" . $subtotal . "đ</td>";
							echo "<td><a href=\"remove.php?id=" . $id . "\">Xóa</a></td>";
							echo "</tr>";
						}
						}
					}

					echo "<tr><td colspan=\"3\">Total:</td><td>$" . $cart_total . "</td><td></td></tr>";
				} else {
					echo "<tr><td colspan=\"5\">Your shopping cart is empty.</td></tr>";
				}

				// Đóng kết nối
				mysqli_close($conn);
			?>
		</table>

		<div class="checkout navbar navbar-expand-sm">
			<ul class="navbar-nav">
				<a class="border rounded-sm" href="index.php">Quay Về Trang Chủ</a>
				<a href="product.php">Continue Shopping</a>
				<?php if(!empty($_SESSION['cart'])) { ?>
					<a href="checkout.php">Checkout</a>
				<?php } ?>
			</ul>
			
		</div>
	</div><br><hr>
	<footer id="contact" class="bg-img-90 " style="background-image:url('https://content.api.news/v3/images/bin/859ab640b31befd5ade828ca40497b4c');box-shadow: inset 0px 0px 400px 110px rgba(0, 0, 0, .7);height: 400px">
		<div class="nav  font-weight-bold text-white">
			<h2>Contact Us</h2>
		</div>
	

		
		<div class="row  d-flex">
			<div class="address text-white col-lg-1 container-fluid">
				<p>3/2 Street</p>
				<p>CANTHO, VN 2002</p>
				<p>Phone: 000-000-BIẾT</p>
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
			<div class="col-lg-2 text-white ">
				<h4 class="text-white">
				CHÍNH SÁCH
				</h4>
				<br>
				<ul class="navbar-nav">
					<li class="nav-item">
					Chính sách và quy định chung
					</li>
					<li class="nav-item">
					Chính sách giao dịch, thanh toán
					</li>
					<li class="nav-item">
					Chính sách đổi trả
					</li>
					<li class="nav-item">
					Chính sách đổi trả
					</li>
					<li class="nav-item">
					Chính sách vận chuyển
					</li>
				</ul>
			</div>
			<div class="col-lg-3">
				<p class="main_title text-white">MỖI THÁNG CHÚNG TÔI ĐỀU CÓ NHỮNG ĐỢT GIẢM GIÁ DỊCH VỤ VÀ SẢN PHẨM NHẰM TRI ÂN KHÁCH HÀNG. ĐỂ CÓ THỂ CẬP NHẬT KỊP THỜI NHỮNG ĐỢT GIẢM GIÁ NÀY, VUI LÒNG NHẬP ĐỊA CHỈ EMAIL CỦA BẠN VÀO Ô DƯỚI ĐÂY</p>
				<img src="https://cdn.dangkywebsitevoibocongthuong.com/wp-content/uploads/2018/06/logo.png" alt="" width="200px">
			</div>
		</div>
		
	</footer>
</body>
</html>