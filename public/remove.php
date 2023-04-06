<!DOCTYPE html>
<html>
<head>
	<title>Remove Product</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Xóa Sản Phẩm</h1>

	<div class="remove">
		<?php
			// Thực hiện kết nối tới cơ sở dữ liệu
			$conn = mysqli_connect("localhost", "root", "", "ct275_baocao");

			// Kiểm tra nếu có id sản phẩm cần xoá được truyền vào
			if(isset($_GET['id'])) {
				$id = $_GET['id'];

				// Xoá sản phẩm khỏi bảng products
				$sql = "DELETE FROM product WHERE id = $id";
				if(mysqli_query($conn, $sql)) {
					echo "<p>Sản phẩm" . $row['title'] . "đã bị xóa.</p>";
				} else {
					echo "<p>Lỗi khi xóa sản phẩm $id: " . mysqli_error($conn) . "</p>";
				}
			}

			// Đóng kết nối
			mysqli_close($conn);
		?>

		<a href="index.php">Quay Về Trang Chủ</a>
	</div>
</body>
</html>