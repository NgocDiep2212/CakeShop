<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="app">
		<div id="demo" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
				</ul>

				<!-- The slideshow -->
				<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="https://theme.hstatic.net/1000313040/1000406925/14/ms_banner_img2.jpg?v=1952" width="100%" height="100%">
				</div>
				<div class="carousel-item">
					<img src="https://theme.hstatic.net/1000313040/1000406925/14/ms_banner_img3.jpg?v=1952"  width="100%" height="100%">
				</div>
				<div class="carousel-item">
					<img src="https://theme.hstatic.net/1000313040/1000406925/14/ms_banner_img5.jpg?v=1952" width="100%" height="100%">
				</div>
				</div>

				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
				</a>
			</div>
		<div class="main">
			<div class="container">
				
				<div class="category-list">
					<h5>BÁNH SINH NHẬT 2023</h5>
					<div class="list-1 row">
						
		<?php 
			foreach($kq1 as $kq1){
				echo'<div class="category-item col-lg-3">
						<div class="item-wrapper">
							<img class="card-img-top" src="'.$kq1['thumbnail'].'" alt="Card image cap">
							<div class="card-body">
								<a class="box-title" href="#">
									<h5 class="card-title">'.$kq1['title'].'</h5>
								</a>
								<p>'.$kq1['price'].'</p>
								<div class="button-box">
									<a href="#" class="item-icon">
										<i class="fa-solid fa-cart-shopping"></i>
									</a>
							
									<a href="#" class="btn-buy">Mua hàng</a>
								</div>
							</div>
						</div>
					</div>';
			}

		?>
						<a href="#" class="btn-buy more m-auto" >Xem thêm</a>
					</div>
					<hr>
					<h5>BÁNH MÌ 2023</h5>
					<div class="list-2 row">
						
		<?php 
			foreach($kq2 as $kq2){
				echo'<div class="category-item col-lg-3">
						<div class="item-wrapper">
							<img class="card-img-top" src="'.$kq2['thumbnail'].'" alt="Card image cap">
							<div class="card-body">
								<a class="box-title" href="#">
									<h5 class="card-title">'.$kq2['title'].'</h5>
								</a>
								<p>'.$kq2['price'].'</p>
								<div class="button-box">
									<a href="#" class="item-icon">
										<i class="fa-solid fa-cart-shopping"></i>
									</a>
							
									<a href="#" class="btn-buy">Mua hàng</a>
								</div>
							</div>
						</div>
					</div>';
			}
			?>
						<a href="#" class="btn-buy more m-auto" >Xem thêm</a>
					</div>
					<hr>
					<h5>BÁNH MẶN 2023</h5>
					<div class="list-3 row">
						
		<?php 
			foreach($kq3 as $kq3){
				echo'<div class="category-item col-lg-3">
						<div class="item-wrapper">
							<img class="card-img-top" src="'.$kq3['thumbnail'].'" alt="Card image cap">
							<div class="card-body">
								<a class="box-title" href="#">
									<h5 class="card-title">'.$kq3['title'].'</h5>
								</a>
								<p>'.$kq3['price'].'</p>
								<div class="button-box">
									<a href="#" class="item-icon">
										<i class="fa-solid fa-cart-shopping"></i>
									</a>
							
									<a href="#" class="btn-buy">Mua hàng</a>
								</div>
							</div>
						</div>
					</div>';
			}

		?>
						<a href="#" class="btn-buy more m-auto" >Xem thêm</a>
					</div>
					<hr>
					<h5>MINI CAKES 2023</h5>
					<div class="list-3 row">
		<?php 
			foreach($kq4 as $kq4){
					echo'<div class="category-item col-lg-3">
						<div class="item-wrapper">
							<img class="card-img-top" src="'.$kq4['thumbnail'].'" alt="Card image cap">
							<div class="card-body">
								<a class="box-title" href="#">
									<h5 class="card-title">'.$kq4['title'].'</h5>
								</a>
								<p>'.$kq4['price'].'</p>
								<div class="button-box">
									<a href="#" class="item-icon">
										<i class="fa-solid fa-cart-shopping"></i>
									</a>
							
									<a href="#" class="btn-buy">Mua hàng</a>
								</div>
							</div>
						</div>
					</div>';
				
			}

		?>
						<a href="#" class="btn-buy m-auto" >Xem thêm</a>
					</div>
					<hr>
				</div>
				<section class="services" id="services">
					<div class="main_title">
						<h1 class="nav justify-content-center font-weight-bold text-warning ">Dịch vụ của chúng tôi</h1><br>
					</div>
					<hr>
					<div class="services-container">
						<div class="service container row">
							<div class="service-img" >
								<img src="https://cdn.shopify.com/s/files/1/1158/7736/articles/thanh-thao-nghe-thuat-lam-banh-mon-banh-gato-thom-ngon-tron-vi_600x.png?v=1676510159" alt="Service 1" width="400px">
							</div>
							<div class="service-title">
								<h5>Bánh ngọt &amp;  bánh nướng nhỏ tùy chỉnh</h5>
								<p>Đặt một chiếc bánh hoặc bánh nướng nhỏ tùy chỉnh cho sự kiện đặc biệt tiếp theo của bạn.</p>
							</div>
						</div>
					<hr>
			<br>
						<div class="service container row">
							<div class="service-img">
								<img  src="https://abby.vn/wp-content/uploads/2016/09/banh_mi_hoa_cuc_01.jpg" alt="Service 2" width="400px">
							</div>
							<div class="service-title">
								<h5>Bánh mì &amp; Bánh mì ngọt</h5>
								<p>Chọn từ nhiều loại bánh mì và bánh ngọt, được làm mới hàng ngày.</p>
							</div>
								</div>
			<hr>
			<br>
		
		
						<div class="service container row">
							<div class="service-img">
								<img  src="https://media.istockphoto.com/id/1213165121/vi/anh/n%E1%BB%AF-th%E1%BB%A3-l%C3%A0m-b%C3%A1nh-ng%C6%B0%E1%BB%9Di-m%E1%BB%B9-g%E1%BB%91c-t%C3%A2y-ban-nha-trang-tr%C3%AD-b%C3%A1nh-cupcakes-thu%E1%BA%A7n-chay.jpg?s=612x612&w=0&k=20&c=3bxEci8XcFHZP5SXi9tKg9BJSDPrQcdUcSTSvnoqrmo=" alt="Service 3" width="400px">
							</div>
							<div class="service-title">
								<h5>Dịch vụ ăn uống &amp; Sự kiện</h5>
								<p>Hãy để chúng tôi phục vụ sự kiện tiếp theo của bạn, dù lớn hay nhỏ.</p>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</div>
</body>
</html>