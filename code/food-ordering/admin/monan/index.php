<?php
require_once('../../db/dbhelper.php');
require_once('../../funlib/funs.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Quản lí menu</title>
	<!-- Favicons -->
	<link href="../../../HomePage/assets/img/favicon.png" rel="icon">
	<link href="../../../HomePage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<link href="http://ryanrestaurant.com/admin/css/style.css" rel="stylesheet">
	<script src="http://ryanrestaurant.com/admin/js/js.js"></script>
	<style>
		.searchdulieu {
			margin-bottom: 40px;
			float: right;
		}

		.searchdulieu::after {
			content: "";
			display: table;
			clear: both;
		}

		#ngay {
			margin-right: 20px;
		}
	</style>
</head>


<body>
	<!-- check co phai admin khong -->
    <?php session_start();
	 require_once("../../../admin/php/checkAdmin.php");?>
	<!-- navbar -->
	<div class="fluid-container">
		<div class="row main">
			<div class="col-3">
				<div class="sidebar" style="position: fixed;">
					<div class="sidebar-header">Ryan's System</div>
					<div class="sidebar-wrapper">
					<ul class="sidebar-list">
                            <li class="sidebar-item">
                                <a href="../../../admin/quanlythanhvien/" class="sidebar-link">1. Quản lí thành viên</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../../../admin/quanlydatban/" class="sidebar-link">2. Quản lí thông tin đặt bàn</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">3. Quản lí bình luận, đánh giá</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../monan/" class="sidebar-link active">4. Quản lí món ăn</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../danhmuc/" class="sidebar-link">5. Quản lí danh mục món ăn</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">6. Quản lí hóa đơn</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">7. Quản lí mã giảm giá</a>
                            </li>
                        </ul>
					</div>
				</div>
			</div>
			<div class="col-9">
				<div class="data">

					<!-- content -->
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link active" href="../danhmuc">Quản lý category</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../../menupage">Trang khách</a>
						</li>
					</ul>
					<div class="container">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h2 class="text-center">Quản lý menu</h2>
							</div>
							<div class="panel-body">
								<!-- search dia chi or ngay -->
								<div class="searchdulieu">
									<label>SEARCH: </label> <input id="inputSearch" type="text">
								</div>
								<a href="add.php">
									<button class="btn btn-success" style="margin-bottom:15px;">Thêm món</button>
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
									<tbody id="content">
										<?php
										$item_per_page= !empty($_GET['per_page']) ? $_GET['per_page']:4;
										$current_page=!empty($_GET['page']) ? $_GET['page'] :1;
										$offset=($current_page - 1) * $item_per_page;

										$sql = 'select monan.MaMonAn, monan.TenMonAn, monan.giaTien, monan.HinhAnh, 
		danhmuc.TenDanhMuc danhmuc_ten from monan left join danhmuc
		on monan.Iddanhmuc = danhmuc.MaDanhMuc ORDER BY monan.MaMonAn ASC LIMIT '. $item_per_page . " OFFSET ".$offset;
		$monanlist = executeResult($sql);								
		$totalRecords= executeResult("SELECT * FROM monan,danhmuc WHERE monan.Iddanhmuc = danhmuc.MaDanhMuc;");
		$totalRecords= count($totalRecords);
		$totalPages=ceil($totalRecords/$item_per_page);

										
										$index = 1;
										foreach ($monanlist as $item) {
											echo '<tr>
		<td>' . ($index++) . '</td>
        <td>' . $item['MaMonAn'] . '</td>
		<td><img src="' . fixUrl($item['HinhAnh'], '../../') . '" style="max-width:200px" /></td>
		<td>' . $item['TenMonAn'] . '</td>
		<td>' . $item['danhmuc_ten'] . '</td>
		<td>' . number_format($item['giaTien']) . ' VNĐ</td>
		<td>
		<a href="add.php?MaMonAn=' . $item['MaMonAn'] . '">
		<button class="btn btn-warning">Sửa</button>
		</a>	
		</td>
		<td>
			<button class="btn btn-danger"
			onclick="deletemon(' . $item['MaMonAn'] . ')">Xóa</button>
		</td>
		</tr>';
										}
										?>
									</tbody>
								</table>
								<?php include "../../../requirefile/pagination.php"; ?>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
	<script type="text/javascript">
		function deletemon(id) {
			var option = confirm('Bạn có chắc chắn muốn xóa món ăn này không ?')
			if (!option) {
				return;
			}
			console.log(id)
			$.post('ajax.php', {
				'id': id,
				'action': 'delete'
			}, function(data) {
				location.reload()
			})
		}
	</script>
	<script>
		$(document).ready(function() {
			$("#inputSearch").on("keyup", function() {
				let value = $(this).val().toLowerCase();
				$("#content tr").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
				});
			});
		});
	</script>
</body>

</html>