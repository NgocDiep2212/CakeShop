<!DOCTYPE html>
<html>
<head>
	<title>Quản Lý Người Dùng</title>
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
				<h2 class="text-center">Quản Lý Người Dùng</h2>
			</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="index.php?act=adduser">
                         <button class="btn btn-success mb-4">Thêm Người Dùng</button>
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
                            <th>Tên Tài Khoản</th>
                            <th>Tên Người Dùng</th>
                            <th>Địa Chỉ</th>
                            <th>Số Điện Thoại</th>
                            <th>Email</th>
                            <th>Mật Khẩu</th>
                            <th>Vai Trò</th>
                            <th width="50px"></th>
                            <th width="50px"></th>
                        </tr>
                    </thead>
                    <tbody>
<?php 

$act = 'user';
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
    $additional = 'and name like "%'.$search.'%"';
}

$conn = connectdb();
$sql = 'select * from user where 1 '.$additional.' limit '.$firstIndex.', '.$limit;
$stmt = $conn->prepare($sql);
$stmt->execute();
$userList = $stmt->fetchAll();


$sql = 'select count(id) as total from user where 1 '.$additional;
$stmt = $conn->query($sql);
$countResult = $stmt->fetchColumn();

$number = 0;
if($countResult != null){
    $number = ceil($countResult/$limit);
}
foreach ($userList as $item){
    if($item['role'] == '0'){
        echo '
            <tr>
                <td>'.(++$firstIndex).'</td>
                <td>'.$item['username'].'</td>
                <td>'.$item['name'].'</td>
                <td>'.$item['address'].'</td>
                <td>'.$item['SDT'].'</td>
                <td>'.$item['email'].'</td>
                <td>'.$item['password'].'</td>
                <td>User</td>
                <td>
                <a href="index.php?act=updateuser&id='.$item['id'].'"><button class="btn btn-warning">Sửa</button></a>
                </td>
                <td>
                <a href="index.php?act=deleteuser&id='.$item['id'].'"><button class="btn btn-danger">Xóa</button></a>
                </td>
            </tr>';
    } else if($item['role'] == '1'){
        echo '
            <tr>
                <td>'.(++$firstIndex).'</td>
                <td>'.$item['username'].'</td>
                <td>'.$item['name'].'</td>
                <td>'.$item['address'].'</td>
                <td>'.$item['SDT'].'</td>
                <td>'.$item['email'].'</td>
                <td>'.$item['password'].'</td>
                <td>Admin</td>
                <td>
                <a href="index.php?act=updateuser&id='.$item['id'].'"><button class="btn btn-warning">Sửa</button></a>
                </td>
                <td>
                <a href="index.php?act=deleteuser&id='.$item['id'].'"><button class="btn btn-danger">Xóa</button></a>
                </td>
            </tr>';
    }
    
}
?>
                    </tbody>
                </table>
                
                <?=paginarion($number, $page, '&search='.$search, $act)?>
            </div>
		</div>
	</div>


        
    </script>
</body>
</html>