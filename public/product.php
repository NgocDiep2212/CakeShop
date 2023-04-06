<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Sản Phẩm Của Chúng Tôi</h1>

	<div class="products-container">
		<?php
			// Thực hiện kết nối tới cơ sở dữ liệu
			$conn = mysqli_connect("localhost", "root", "", "ct275_baocao");

			// Truy vấn để lấy tất cả sản phẩm từ bảng products
			$sql = "SELECT * FROM product";
			$result = mysqli_query($conn, $sql);

			// Hiển thị sản phẩm lên trang web
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo '<div class="product">';
					echo '<img src="' . $row['thumbnail'] . '" alt="' . $row['title'] . '">';
					echo '<h2>' . $row['title'] . '</h2>';
					echo '<p>' . $row['content'] . '</p>';
					echo '<h3>$' . $row['price'] . '</h3>';
					echo '<a href="cart.php?id=' . $row['id'] . '">Add to Cart</a>';
					echo '</div>';
				}
			} else {
				echo "<p>No products found.</p>";
			}

			// Đóng kết nối
			mysqli_close($conn);
		?>
        <a href="index.php">Vê Trang Chủ</a>
	</div>
</body>
</html>