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
				<h2 class="text-center">Cập Nhật Đơn Hàng</h2>
			</div>
			<div class="panel-body">
           
                <form action="index.php?act=updateOrders" method="post">
                    <div class="form-group">
                        <label for="id"></label>
                        <input type="text" name="id" id="id" value="<?=$kqone[0]['id']?>" hidden="true">
                    </div>
                    <div class="form-group">
                        <label for="id_product">ID sản phẩm</label>
                        <input required="true" type="text" class="form-control" id="id_product" name="id_product" value="<?=$kqone[0]['id_product']?>">
                    </div>
                    <div class="form-group">
                        <label for="soluong">Số lượng</label>
                        <input required="true" type="text" class="form-control" id="soluong" name="soluong" value="<?=$kqone[0]['soluong']?>">
                    </div>
                    <div class="form-group">
                        <label for="total">Thành tiền</label>
                        <input required="true" type="text" class="form-control" id="total" name="total" value="<?=$kqone[0]['total']?>">
                    </div>
                    
                        
                    <button class="btn btn-success" type="submit">Lưu</button>
                        
                </form>
            </div>
		</div>
	</div>


</body>
</html>