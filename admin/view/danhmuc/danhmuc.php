
<!DOCTYPE html>
<html>
<head>
	<title>Quản Lý Danh Mục</title>
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
				<h2 class="text-center">Quản Lý Danh Mục</h2>
			</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="index.php?act=addCategory">
                         <button class="btn btn-success mb-4">Thêm Danh Mục</button>
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
                            <th>Tên Danh Mục</th>
                            <th width="50px"></th>
                            <th width="50px"></th>
                        </tr>
                    </thead>
                    <tbody>
<?php 

if(isset($kq) && (count($kq) >0)){
    foreach($kq as $dm){
        $firstIndex = 1;
        echo '
        <tr>
            <td>'.$firstIndex.'</td>
            <td>'.$dm['name'].'</td>
            <td>
                <a href="index.php?act=updateCategory&id='.$dm['id'].'"><button class="btn btn-warning">Sửa</button></a>
            </td>
            <td>
                <a href="index.php?act=deleteCategory&id='.$dm['id'].'"><button class="btn btn-danger">Xóa</button></a>
            </td>
        </tr>';
        $firstIndex++;
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