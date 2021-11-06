<?php
require_once('../../db/dbhelper.php');
require_once('../../funlib/funs.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản lí Danh mục</title>
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
    <ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="../../menupage" >Trang khách</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="../monan">Quản lý Menu</a>
    </li>
    </ul>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Quản lý Danh mục</h2>
			</div>
			<div class="panel-body">
	<a href="add.php">
	<button class="btn btn-success" 
		style="margin-bottom:15px;">Thêm Danh mục</button>
	</a>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th width="50px">STT</th>
                <th width="150px">MÃ DANH MỤC</th>
				<th width="350px">ẢNH</th>
				<th>Tên Danh mục</th>
				<th width="50px"></th>
				<th width="50px"></th>
			</tr>
		</thead>
		<tbody>
		<?php
$sql = 'select * from danhmuc';
$categorylist = executeResult($sql);
$index =1;
foreach($categorylist as $item){
		echo'<tr>
		<td>'.($index++).'</td>
        <td>'.$item['MaDanhMuc'].'</td>
		<td><img src="'.fixUrl($item['HinhAnh'],'../../').'" style="max-width:300px" /></td>
		<td style="font-size:50px">'.$item['TenDanhMuc'].'</td>
		<td>
		<a href="add.php?flag='.$item['MaDanhMuc'].'">
		<button class="btn btn-warning">Sửa</button>
		</a>	
		</td>
		<td>
			<button class="btn btn-danger"
			onclick="deletecategory('.$item['MaDanhMuc'].')">Xóa</button>
		</td>
		</tr>';
}
?>
		</tbody>
	</table>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function deletecategory(id){
			var option = confirm('Bạn có chắc chắn muốn xóa danh mục này không ?')
			if(!option){
				return;
			}
			console.log(id)
			$.post('ajax.php',{
				'id': id,
				'action':'delete'
			},function(data){
				//location.reload()
			})
		}
	</script>
</body>
</html>
