<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Thêm Sản Phẩm</h1>

	<div class="add">
		<?php
			// Thực hiện kết nối tới cơ sở dữ liệu
			$conn = mysqli_connect("localhost", "root", "", "ct275_baocao");

			// Kiểm tra nếu có dữ liệu được gửi từ form
			if (isset($_POST['submit'])) {
                $id=$_POST['id'];
				$name = $_POST['name'];
				$description = $_POST['content'];
				$price = $_POST['price'];
				$image = $_POST['image'];

				// Truy vấn để thêm sản phẩm vào bảng products
				$sql = "INSERT INTO product (id ,title, content, price, thumbnail) VALUES ('$id','$name', '$description', '$price', '$image')";

				if (mysqli_query($conn, $sql)) {
					echo "<p>Đã thêm sản phẩm $name .</p>";
				} else {
					echo "<p>Lỗi khi thêm sản phẩm: " . mysqli_error($conn) . "</p>";
				}
			}
		?>
        <section>
                <form method="post">
                <div class="form-group">
                    <label for="id">ID Sản Phẩm:</label>
                <input class="container" type="text" id="id" name="name" required>
                </div>
                <div class="form-group">
                    <label for="name">Tên Sản Phẩm:</label>
                <input class="container" type="text" id="title" name="name" required>
                </div>
                <div class="form-group">
                <label for="description">Mô Tả:</label>
                <textarea class="container" id="thumbnail" name="content" required></textarea>
                </div>
                <div class="form-group">
                <label for="price">Giá:</label>
                <input class="container" type="number" id="price" name="price" min="0" step="0.01" required>
                </div>
                <div class="form-group">
                <label for="image">Hình Ảnh:</label>
                <input class="container" type="text" id="thumbnail" name="image" required>
                </div>
                <input class="container" type="submit" name="submit" value="Thêm Sản Phẩm">
                
            </form>
        </section>
		

		<a href="index.php">Về Trang Chủ</a>
	</div>
</body>
</html>