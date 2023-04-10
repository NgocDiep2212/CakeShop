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
           
                <form action="index.php?act=addcart" method="post">
                    <div class="form-group">
                        <label for="id_user"></label>
                        <input type="text" name="id" id="id" value="" hidden="true">
                    </div>
                    <div class="form-group">
                        <label for="id_user">ID Khách Hàng</label>
                        <input required="true" type="text" class="form-control" id="id_user" name="id_user" value="">
                    </div>
                    <div class="form-group">
                        <label for="address">Địa Chỉ</label>
                        <input required="true" type="text" class="form-control" id="address" name="address" value="">
                    </div>
                    <div class="form-group">
                        <label for="tel">SĐT:</label>
                        <input required="true" type="text" class="form-control" id="tel" name="tel" value="">
                    </div>
                    <div class="form-group">
                        <label for="hinhthucthanhtoan">Hình Thức Thanh Toán</label>
                        <select class="form-control" name="hinhthucthanhtoan" id="hinhthucthanhtoan">
                            <option value="">-- Lựa chọn hình thức thanh toán --</option>
                            <option value="0">Tiền mặt</option>
                            <option value="1">Chuyển khoản</option>
                            <option value="2">Ví điện tử</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="trangthaithanhtoan">Trạng Thái Thanh Toán</label>
                        <select class="form-control" name="trangthaithanhtoan" id="trangthaithanhtoan">
                            <option value="">-- Lựa chọn trạng thái thanh toán --</option>
                            <option value="0">Chưa thanh toán</option>
                            <option value="1">Đang xử lý</option>
                            <option value="2">Đã thanh toán</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="trangthai">Trạng Thái</label>
                        <select class="form-control" name="trangthai" id="trangthai">
                            <option value="">-- Lựa chọn trạng thái --</option>
                            <option value="0">Chưa giao hàng</option>
                            <option value="1">Đang giao hàng</option>
                            <option value="2">Đã giao</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="note">Ghi Chú</label>
                        <input required="true" type="text" class="form-control" id="note" name="note" value="">
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
                        <label for="total">Tổng tiền</label>
                        <input required="true" type="text" class="form-control" id="total" name="total" value="">
                    </div>
                   
                        
                    <button class="btn btn-success" type="submit">Lưu</button>
                        
                </form>
            </div>
		</div>
	</div>


</body>
</html>