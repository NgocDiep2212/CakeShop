<!-- cart.php -->

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
						$sql = "SELECT * FROM products WHERE id = $id";
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
			<ul class="navbar  nav">
				<a href="index.php" class="btn btn-warning text-white  btn-lg-3">Quay Về Trang Chủ</a>
				<a href="product.php" class="btn btn-warning text-white  btn-lg-3">Tiếp tục mua</a>
			</ul>
			
		</div>
	</div><br><hr>
	
</body>
</html>