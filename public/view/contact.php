
<body style="background-image: url('https://cdn11.bigcommerce.com/s-5gk3908h6p/images/stencil/270x360/products/7986/11526/57939__65814.1637540476.jpg?c=1');">
	
        
		<section class="contact product_area p_100 mt-4 mb-5">
			<div class="container">
            <div class="main_title">
                <h1 class="nav justify-content-center font-weight-bolder font-italic text-warning mb-4">Liên hệ với chúng tôi</h1>
        	</div>
            <div class="row ">
            
            <div class="col-lg-7  bg-white">
				<br>
                     <?php if (isset($error_message)): ?>
                        <div class="alert-danger"><?php echo $error_message; ?></div>
                    <?php endif; ?>
                    <form class="row contact_us_form" method="post">
						<div class="form-group col-md-6">
							<label for="name">Họ tên:</label>
                        	<input class="form-control border border-dark"type="text" id="name" name="name" placeholder="Tên bạn" value="<?php echo isset($name) ? $name : ''; ?>" required>
						</div>
						<div class="form-group col-md-6">
							<label for="email">Email:</label>
                        	<input class="form-control border border-dark" type="email" id="email" name="email" placeholder="Email của bạn" value="<?php echo isset($email) ? $email : ''; ?>" required>
						</div>
						<div class="form-group col-md-12">
							 <label for="message">Nội dung tin nhắn:</label>
                        	<textarea class="form-control border border-dark" id="message" name="message" placeholder="Nội dung . ." required><?php echo isset($message) ? $message : ''; ?></textarea>
						</div>
						<div class="container" style="text-align: center;">
							<a href="../index.php" class="btn btn-warning text-white btn-lg-3 back-home">Gửi</a>
						</div>
                        	
                    </form>
					
                </div>
            
			<div class="col-lg-4 offset-md-1">
       			    <div class="contact_details ">
       						<div class="contact_d_item">
       							<h3>Địa chỉ :</h3>
       							<p> Đường 3/2 <br /> P.Xuân Khánh, Q.Ninh Kiều ,TP.Cần Thơ</p>
       						</div>
       						<div class="contact_d_item">
       							<h5>Điện thoại : <a href="tel:000000000">000-000-0000</a></h5>
       							<h5>Email : bakery@gmail.com</h5>
       						</div>
       						<div class="contact_d_item">
       							<h3>Giờ hoạt động :</h3>
       							<p>8:00 AM – 9:00 PM</p>
       							<p>Thứ 2 – Thứ 6</p>
								<p>Thứ 7 : 9:00AM - 4:00PM</p>
       						</div>
							<div>
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4409.9910675426745!2d105.76940472586078!3d10.028834546680287!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895a51d60719%3A0x9d76b0035f6d53d0!2zxJDhuqFpIGjhu41jIEPhuqduIFRoxqE!5e0!3m2!1svi!2s!4v1680967622095!5m2!1svi!2s" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
       					</div>
       				</div>
				</div>
			</div>
		</section>
		

	
    </body>

</html>