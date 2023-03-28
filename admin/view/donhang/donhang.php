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
                        <a href="index.php?act=addOrders">
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
                            <th>Khách Hàng</th>
                            <th>Ngày Lập</th>
                            <th>Ngày Giao</th>
                            <th>Nơi Giao</th>
                            <th>Hình Thức Thanh Toán</th>
                            <th>Tổng Thành Tiền</th>
                            <th>Trạng Thái Thanh Toán</th>
                            <th>Trạng Thái</th>
                            <th colspan="2">Hành động</th>>
                        </tr>
                    </thead>
                    <tbody>
<?php 

$act = 'donhang';
$limit = 5;
$page = 1;
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
if($page <= 0){
    $page = 1;
}
$firstIndex = ($page-1)*$limit;

$search = '';
if(isset($_GET['search'])){
    $search = $_GET['search'];
}
//trang can lay san pham. so phan tu tren 1 trang: $limit
$additional = '';

if(!empty($search)){
    $additional = 'and id like "%'.$search.'%"';
}

$conn = connectdb();
$sql = 'select orders.id, orders.id_user, orders.id_product, orders.ngaydat, orders.ngaygiao,orders.noigiao, orders.trangthaithanhtoan, orders.hinhthucthanhtoan, orders.trangthai, user.name, user.address, product.price from orders left join user on user.id = orders.id_user join product on orders.id_product = product.id '.$additional.' limit '.$firstIndex.', '.$limit;
$stmt = $conn->prepare($sql);
$stmt->execute();
$ordersList = $stmt->fetchAll();


$sql = 'select count(id) as total from orders where 1 '.$additional;
$stmt = $conn->query($sql);
$countResult = $stmt->fetchColumn();

$number = 0;
if($countResult != null){
    $number = ceil($countResult/$limit);
}
foreach ($ordersList as $item){
    echo '
    <tr>
        <td>'.(++$firstIndex).'</td>
        <td>'.$item['id_product'].'</td>
        <td>'.$item['name'].'</td>
        <td>'.$item['ngaydat'].'</td>
        <td>'.$item['ngaygiao'].'</td>
        <td>'.$item['noigiao'].'</td>';

    if($item['hinhthucthanhtoan'] == '0') echo '<td>Thanh toán khi nhận hàng</td>';
    else if($item['hinhthucthanhtoan'] == '1') echo '<td>Thanh toán qua tài khoản ngân hàng</td>';
    else if($item['hinhthucthanhtoan'] == '2') echo '<td>Thanh toán bằng ví điện tử<td>';

    echo '<td>'.$item['price'].'</td>';
        
    if($item['trangthaithanhtoan'] == '0') echo '<td>Chưa thanh toán</td>';
    else if($item['trangthaithanhtoan'] == '1') echo '<td>Đang xử lý</td>';
    else if($item['trangthaithanhtoan'] == '2') echo '<td>Đã thanh toán<td>';

    
    if($item['trangthai'] == '0') echo '<td>Đã xác nhận đơn hàng</td>';
    else if($item['trangthai'] == '1') echo '<td>Đang giao</td>';
    else if($item['trangthai'] == '2') echo '<td>Đã giao thành công</td>';


    echo '
        <td>
            <a href="index.php?act=updateOrders&id='.$item['id'].'"><button class="btn btn-warning">Sửa</button></a>
        </td>
        <td>
            <a href="index.php?act=deleteOrders&id='.$item['id'].'"><button class="btn btn-danger">Xóa</button></a>
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