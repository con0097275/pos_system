<?php
require_once('../../db/dbhelper.php');
require_once('../../funlib/funs.php');
$MaDanhMuc=$TenDanhMuc=$HinhAnh=$flag='';
if(!empty($_POST)){   
    if(isset($_POST['TenDanhMuc'])){
        $TenDanhMuc=$_POST['TenDanhMuc'];
        $TenDanhMuc =str_replace('"','\\"',$TenDanhMuc);
    }
    if(isset($_POST['MaDanhMuc'])){
        $MaDanhMuc=$_POST['MaDanhMuc'];
    }
    if(isset($_POST['flag'])){
        $flag=$_POST['flag'];
    }


    $HinhAnh= moveFile('HinhAnh','../../');

    if(!empty($TenDanhMuc)){
        if($flag ==''){           
            $sql ='insert into danhmuc(TenDanhMuc, MaDanhMuc, HinhAnh )
        value("'.$TenDanhMuc.'","'.$MaDanhMuc.'","'.$HinhAnh.'")';
        }else{
            $sql='update danhmuc set TenDanhMuc="'.$TenDanhMuc.'",
            HinhAnh="'.$HinhAnh.'" where 
            MaDanhMuc = '.$flag;
        }
     
        execute($sql);

        header('Location: index.php');
        die();
    }
}


$MaDanhMuc=$TenDanhMuc=$HinhAnh=$flag='';
if(isset($_GET['flag'])){
   $flag =$MaDanhMuc=$_GET['flag'];
    $sql = 'select * from danhmuc where MaDanhMuc = '.$MaDanhMuc;
    $danhmuc = executeSingleResult($sql);
    if($danhmuc!=null){
        $TenDanhMuc=$danhmuc['TenDanhMuc'];
        $HinhAnh=$danhmuc['HinhAnh'];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thêm/sửa Danh mục</title>
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
    <ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="index.php">Quản lý Danh mục</a>
    </li>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm/sửa Danh mục</h2>
			</div>
			<div class="panel-body">
                <form method="post" enctype="multipart/form-data">
                <div class="form-group">
				  <label for="TenDanhMuc">Tên Danh mục:</label>
                  <input type="text" name="flag" value="<?=$flag?>" hidden="true">
                <input required="true" type="text" class="form-control"
                   id="TenDanhMuc" name="TenDanhMuc" value="<?=$TenDanhMuc?>">
				</div>
                <?php
                if($flag==''){
                    echo'<div class="form-group">
                    <label for="MaDanhMuc">Mã Danh mục:</label>
                  <input required="true" type="text" class="form-control"
                     id="MaDanhMuc" name="MaDanhMuc" value="'.$MaDanhMuc.'">
                  </div> ';
                }
                else{
                    echo '<label for="MaDanhMuc">Mã Danh mục: '.$flag.'</label>';
                }

                ?>
                
                <div class="form-group">
				 <label for="HinhAnh">Hình ảnh:</label>
                <input required="true" type="file" accept=".png, .jpg, 
                .jpeg, .gif, .bmp, .tif, .jfif, .tiff|image/*"
                class="form-control" id="HinhAnh" name="HinhAnh"  > 
                   <img src="<?=fixUrl($HinhAnh,'../../')?>" alt="Ảnh minh họa" 
                   style="max-width:200px; margin-top:5px" id="img_thumbnail">
				</div>   
				<button class="btn btn-success">Lưu</button>
                </form>
			</div>

			</div>
		</div>
	</div>
</body>
</html>

