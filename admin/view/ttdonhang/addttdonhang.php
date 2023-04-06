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
				<h2 class="text-center">Thêm Đơn Hàng</h2>
			</div>
			<div class="panel-body">
           
                <form action="index.php?act=addOrders" method="post">
                    <div class="form-group">
                        <label for="id"></label>
                        <input type="text" name="id" id="id" value="" hidden="true">
                    </div>
                    <div class="form-group">
                        <label for="id_product">ID sản phẩm</label>
                        <input required="true" type="text" class="form-control" id="id_product" name="id_product" value="">
                    </div>
                    <div class="form-group">
                        <label for="id_product">Số Lượng</label>
                        <input required="true" type="text" class="form-control" id="id_product" name="id_product" value="">
                    </div>
                    <div class="form-group">
                        <label for="id_user">ID khách hàng</label>
                        <input required="true" type="text" class="form-control" id="id_user" name="id_user" value="">
                    </div>
                    <div class="form-group">
                        <label for="noigiao">Nơi giao đơn hàng</label>
                        <input required="true" type="text" class="form-control" id="noigiao" name="noigiao" value="">
                    </div>
                    <div class="form-group">
                        <label for="price">Tổng thành tiền</label>
                        <input required="true" type="text" class="form-control" id="price" name="price" value="">
                    </div>
                    <div class="form-group">
                        <label for="hinhthucthanhtoan">Chọn hình thức thanh toán</label>
                        <select class="form-control" name="hinhthucthanhtoan" id="hinhthucthanhtoan">
                            <option value="">--Lựa chọn hình thức thanh toán --</option>        
 <?php
    
        echo '<option value ="0">Thanh toán khi nhận hàng</option>
        <option value ="1">Thanh toán qua tài khoản ngân hàng</option>
        <option value ="2">Thanh toán qua ví điện tử</option>
        ';
    
?>
    
                        </select>
                       
                    </div>    
                    <div class="form-group">
                        <label for="trangthaithanhtoan">Chọn trạng thái thanh toán</label>
                        <select class="form-control" name="trangthaithanhtoan" id="trangthaithanhtoan">
                            <option value="">--Lựa chọn trạng thái thanh toán --</option>        
 <?php
    
        echo '<option  value ="0">Chưa thanh toán</option>
        <option value ="1">Đang xử lý</option>
        <option value ="2">Đã thanh toán</option>
        ';

?>
    
                        </select>
                       
                    </div>    
                    <div class="form-group">
                        <label for="trangthai">Chọn trạng thái đơn hàng</label>
                        <select class="form-control" name="trangthai" id="trangthai">
                            <option value="">--Lựa chọn trạng thái đơn hàng --</option>        
 <?php
    
        echo '<option value ="0">Đang xử lý</option>
        <option value ="1">Đang giao</option>
        <option value ="2">Đã giao thành công</option>
        ';
    
?>
    
                        </select>
                    </div>    
                        
                    <button class="btn btn-success" type="submit">Lưu</button>
                        
                </form>
            </div>
		</div>
	</div>


</body>
</html>