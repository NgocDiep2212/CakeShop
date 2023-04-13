
<body style="background-image: url('https://cdn11.bigcommerce.com/s-5gk3908h6p/images/stencil/270x360/products/7986/11526/57939__65814.1637540476.jpg?c=1');">
		
	<br>
	<div class="promotion_bakery_area main_title">
		<div class="menu">
			<img src="/cake/public/assets/img/menu.png" alt="">
		</div>
<?php 
	foreach($kqonedm as $kqonedm){
		echo '<h3 class="container d-flex justify-content-center font-weight-bold main_title">'.$kqonedm['name'].'</h3>';
	}
?>
		
			
	</div>
	<section class="main_title">
	<div class="container">
	<br>
	<div class="row product_inner_row">
		
		<div class="col-lg-9">
			<div class="products-container row ">
					<?php

						foreach($kq as $row){
							echo '
							<div class="category-item col-lg-4">
								<div class="item-wrapper">
									<img class="card-img-top" src="'.$row['thumbnail'].'" alt="Card image cap">
									<div class="card-body">
										<a class="box-title" href="#">
											<h5 class="card-title">'.$row['title'].'</h5>
										</a>
										<p>'.$row['price'].'</p>
										<div class="button-box">
											<a href="#" class="item-icon">
												<i class="fa-solid fa-cart-shopping"></i>
											</a>
									
											<a href="#" class="btn-buy">Mua hàng</a>
										</div>
									</div>
								</div>
							</div>
							 ';
                            //         echo '<div class="item col-lg-4"><br>';
                            //         echo 	'<div class="cake_feature_item ">';
                            //         echo 		'<div class="cake_img ">';
                            //         echo 			'<img src="'. $row['thumbnail'] .'" alt="'. $row['title'] .'" width="250px">';
                            //         echo 		'</div>';
                            //         echo 		'<div class="cake_text">';
                            //         echo 			'<h4>'. $row['price'] .'</h4>';
                            //         echo 			'<h3>'. $row['title'] .'</h3><br>';
                            //         echo 			'<a href="cart.php?id=' . $row['id'] . '">Thêm vào giỏ hàng</a>';
                            //         echo 		'</div>';
                            //         echo 	'</div>';
                            //         echo '</div>';
                                } 

					?>
					
				</div>
		</div>
		<div class="col-lg-3">
		<aside class="left_sidebar p_catgories_widget">
			<div>
				<div class="img-menulist">
					<img src="/cake/public/assets/img/menulist.png" alt="">
				</div>
				<ul class="navbar-nav list_style menulist-category">
<?php
	foreach($kqdm as $kq){
		echo '<li><a href="/cake/public/index.php?act=category&id='.$kq['id'].'">'.$kq['name'].'</a></li>';
	}
?>
			
				</ul>
			</div>
		</aside>
		</div>
	</div>
</div>
	</section>
    <div class="container" style="text-align: center;">
        <a href="../index.php" class="btn btn-warning text-white  btn-lg-3 back-home">Về Trang Chủ</a>
    </div><br>
	
	
</body>
</html>