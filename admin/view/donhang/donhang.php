<!DOCTYPE html>
<html>
<head>
	<title>Quản Lý Đơn Hàng</title>
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
				<h2 class="text-center">Quản Lý Đơn Hàng</h2>
			</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="index.php?act=addcart">
                         <button class="btn btn-success mb-4">Thêm Đơn Hàng</button>
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
                            <th>Mã Đơn Hàng</th>
                            <th>Hình Ảnh</th>
                            <th>Tên SP</th>
                            <th>Đơn Giá</th>
                            <th>Số Lượng</th>
                            <th>Thành Tiền</th>
                           
                            <th colspan="2">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
<?php 

foreach ($cartList as $item){
    echo '
    <tr>
        <td>'.(++$firstIndex).'</td>
        <td>'.$item['id_bill'].'</td>
        <td style="text-align: center;"><img src="'.$item['thumbnail'].'" style="max-width: 100px;"></td>
        <td>'.$item['title'].'</td>
        <td>'.$item['price'].'</td>
        <td>'.$item['soluong'].'</td>
        <td>'.$item['total'].'</td>';

    echo '
        <td>
            <a href="index.php?act=updatecart&id='.$item['id'].'"><button class="btn btn-warning">Sửa</button></a>
        </td>
        <td>
            <a href="index.php?act=deletecart&id='.$item['id'].'"><button class="btn btn-danger">Xóa</button></a>
        </td>
    </tr>';
}
?>
                    </tbody>
                </table>
                <?=paginarion($number, $page, '&search='.$search, $act)?>
            </div>
		</div>
	</div>


</body>
</html>