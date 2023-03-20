
<!DOCTYPE html>
<html>
<head>
	<title>Quản Lý Sản Phẩm</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Quản Lý Sản Phẩm</h2>
			</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="index.php?act=addProduct">
                         <button class="btn btn-success mb-4">Thêm Sản Phẩm</button>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="get">
                            <div class="form-group" style="width: 200px; float:right;">
                                <input type="text" class="form-control" id="search" name="search" placeholder="Searching...">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
			<div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="50px">STT</th>
                            <th>Hình Ảnh</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Giá Bán</th>
                            <th>Danh Mục</th>
                            <th>Ngày Cập Nhật</th>
                            <th width="50px"></th>
                            <th width="50px"></th>
                        </tr>
                    </thead>
                    <tbody>
<?php 

$firstIndex = 0;
if(isset($kq) && (count($kq) >0)){
    foreach($kq as $sp){
        echo '
        <tr>
            <td>'.++$firstIndex.'</td>
            <td><img src='.$sp['thumbnail'].' style="max-width: 100px;"/></td>
            <td>'.$sp['title'].'</td>
            <td>'.$sp['price'].'</td>
            <td>'.$sp['name'].'</td>
            <td>'.$sp['updated_at'].'</td>
            <td>
                <a href="index.php?act=updateProduct&id='.$sp['id'].'"><button class="btn btn-warning">Sửa</button></a>
            </td>
            <td>
                <a href="index.php?act=deleteProduct&id='.$sp['id'].'"><button class="btn btn-danger">Xóa</button></a>
            </td>
        </tr>';
    }
}

?>
                    </tbody>
                </table>
            </div>
		</div>
	</div>

</body>
</html>