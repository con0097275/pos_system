<?php
require_once('../../db/dbhelper.php');
require_once('../../funlib/funs.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản lí menu</title>
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
        <a class="nav-link active" href="../danhmuc">Quản lý category</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../../menupage" >Trang khách</a>
    </li>
    </ul>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Quản lý menu</h2>
			</div>
			<div class="panel-body">
	<a href="add.php">
	<button class="btn btn-success" 
		style="margin-bottom:15px;">Thêm món</button>
	</a>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th width="50px">STT</th>
                <th width="50px">MÃ MÓN ĂN</th>
				<th width="250px">ẢNH</th>
				<th>Tên món</th>
				<th>Danh mục</th>
				<th>Giá bán</th>
				<th width="50px"></th>
				<th width="50px"></th>
			</tr>
		</thead>
		<tbody>
		<?php
$sql = 'select monan.MaMonAn, monan.TenMonAn, monan.giaTien, monan.HinhAnh, 
		danhmuc.TenDanhMuc danhmuc_ten from monan left join danhmuc
		on monan.Iddanhmuc = danhmuc.MaDanhMuc';
$monanlist = executeResult($sql);
$index =1;
foreach($monanlist as $item){
		echo'<tr>
		<td>'.($index++).'</td>
        <td>'.$item['MaMonAn'].'</td>
		<td><img src="'.fixUrl($item['HinhAnh'],'../../').'" style="max-width:200px" /></td>
		<td>'.$item['TenMonAn'].'</td>
		<td>'.$item['danhmuc_ten'].'</td>
		<td>'.number_format($item['giaTien']).' VNĐ</td>
		<td>
		<a href="add.php?MaMonAn='.$item['MaMonAn'].'">
		<button class="btn btn-warning">Sửa</button>
		</a>	
		</td>
		<td>
			<button class="btn btn-danger"
			onclick="deletemon('.$item['MaMonAn'].')">Xóa</button>
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
		function deletemon(id){
			var option = confirm('Bạn có chắc chắn muốn xóa món ăn này không ?')
			if(!option){
				return;
			}
			console.log(id)
			$.post('ajax.php',{
				'id': id,
				'action':'delete'
			},function(data){
				location.reload()
			})
		}
	</script>
</body>
</html>