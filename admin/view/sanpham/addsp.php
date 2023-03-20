
<!DOCTYPE html>
<html>
<head>
	<title>ThêmSản Phẩm</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm Sản Phẩm</h2>
			</div>
			<div class="panel-body">
                <form action="index.php?act=addProduct" method="post">
                    <div class="form-group">
                        <label for="title">Tên Sản Phẩm:</label>
                        <input type="text" name="id" value="" hidden="true">
                        <input required="true" type="text" class="form-control" id="title" name="title" value="">
                        </div>
                    <div class="form-group">
                        <label for="id_category">Chọn Danh Mục</label>
                        <select class="form-control" name="id_category" id="id_category">
                            <option value="">--Lựa chọn danh mục --</option>
<?php
if(isset($kq1) && (count($kq1) >0)){
    foreach($kq1 as $dm){
        echo '<option value ="'.$dm['id'].'">'.$dm['name'].'</option>';
    }
}
?>
                        </select>
                       
                    </div>    
                    <div class="form-group">
                        <label for="price">Giá Bán</label>
                        <input required="true" type="number" class="form-control" id="price" name="price" value="">
                    </div>    
                    <div class="form-group">
                        <label for="thumbnail">Thumbnail</label>
                        <input required="true" type="text" class="form-control" id="thumbnail" name="thumbnail" value="" onchange="updateThumbnail()">
                        <img id="img_thumbnail" src="<?php if(isset($thumbnail)) echo '.$thumbnail.'?>" style="max-width: 200px;">
                    </div>    
                    <div class="form-group">
                        <label for="content">Nội dung</label>
                        <textarea class="form-control" rows="5" name="content" id="content"></textarea>
                    </div>    

                    
                        <button class="btn btn-success">Lưu</button>
                </form>
            </div>
		</div>
	</div>

    <script type="text/javascript">
        function updateThumbnail(){
            $('#img_thumbnail').attr('src', $('#thumbnail').val())
        }

        $(function(){
            $('#content').summernote({
                height: 350,
                codemirror: {
                    theme: 'monokai'
                }
            });
        })
    </script>
</body>
</html>