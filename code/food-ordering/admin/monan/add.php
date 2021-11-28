<?php
require_once('../../db/dbhelper.php');
require_once('../../funlib/funs.php');
$MaMonAn = $TenMonAn = $HinhAnh = $MoTa = $giaTien = $Iddanhmuc = '';
if (!empty($_POST)) {
    if (isset($_POST['TenMonAn'])) {
        $TenMonAn = $_POST['TenMonAn'];
        $TenMonAn = str_replace('"', '\\"', $TenMonAn);
    }
    if (isset($_POST['MaMonAn'])) {
        $MaMonAn = $_POST['MaMonAn'];
    }



    $HinhAnh = moveFile('HinhAnh', '../../');

    if (isset($_POST['MoTa'])) {
        $MoTa = $_POST['MoTa'];
        $MoTa = str_replace('"', '\\"', $MoTa);
    }
    if (isset($_POST['giaTien'])) {
        $giaTien = $_POST['giaTien'];
        $giaTien = str_replace('"', '\\"', $giaTien);
    }
    if (isset($_POST['Iddanhmuc'])) {
        $Iddanhmuc = $_POST['Iddanhmuc'];
        $Iddanhmuc = str_replace('"', '\\"', $Iddanhmuc);
    }

    if (!empty($TenMonAn)) {
        if ($MaMonAn == '') {
            $sql = 'insert into monan(TenMonAn, giaTien, HinhAnh, MoTa, Iddanhmuc)
        value("' . $TenMonAn . '","' . $giaTien . '","' . $HinhAnh . '","' . $MoTa . '","' . $Iddanhmuc . '")';
        } else {
            $sql = 'update monan set TenMonAn="' . $TenMonAn . '", giaTien="' . $giaTien . '",
            HinhAnh="' . $HinhAnh . '",MoTa="' . $MoTa . '",Iddanhmuc="' . $Iddanhmuc . '" where 
            MaMonAn = ' . $MaMonAn;
        }
        execute($sql);

        header('Location: index.php');
        die();
    }
}


$MaMonAn = $TenMonAn = '';
if (isset($_GET['MaMonAn'])) {
    $MaMonAn = $_GET['MaMonAn'];
    $sql = 'select * from monan where MaMonAn = ' . $MaMonAn;
    $monan = executeSingleResult($sql);
    if ($monan != null) {
        $TenMonAn = $monan['TenMonAn'];
        $giaTien = $monan['giaTien'];
        $HinhAnh = $monan['HinhAnh'];
        $MoTa = $monan['MoTa'];
        $Iddanhmuc = $monan['Iddanhmuc'];
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Thêm/sửa món ăn</title>
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
    <link href="http://ryanrestaurant.com/admin/css/style.css" rel="stylesheet">
    <script src="http://ryanrestaurant.com/admin/js/js.js"></script>
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
                            <a class="nav-link active" href="index.php">Quản lý menu</a>
                        </li>
                    </ul>
                    <div class="container">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h2 class="text-center">Thêm/sửa món ăn</h2>
                            </div>
                            <div class="panel-body">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="TenMonAn">Tên món:</label>
                                        <input type="text" name="MaMonAn" value="<?= $MaMonAn ?>" hidden="true">
                                        <input required="true" type="text" class="form-control" id="TenMonAn" name="TenMonAn" value="<?= $TenMonAn ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Iddanhmuc">Danh mục:</label>
                                        <select class="form-control" name="Iddanhmuc" id="Iddanhmuc">
                                            <option>-- Lựa chọn danh mục --</option>
                                            <?php
                                            $sql = 'select * from danhmuc';
                                            $danhmucList = executeResult($sql);

                                            foreach ($danhmucList as $item) {
                                                if ($item['MaDanhMuc'] == $Iddanhmuc) {
                                                    echo '<option selected value="' . $item['MaDanhMuc'] . '">' . $item['TenDanhMuc'] . '</option>';
                                                } else {
                                                    echo '<option value="' . $item['MaDanhMuc'] . '">' . $item['TenDanhMuc'] . '</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="giaTien">Giá bán:</label>
                                        <input required="true" type="number" class="form-control" id="giaTien" name="giaTien" value="<?= $giaTien ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="HinhAnh">Hình ảnh:</label>
                                        <input required="true" type="file" accept=".png, .jpg, 
                .jpeg, .gif, .bmp, .tif, .jfif, .tiff|image/*" class="form-control" id="HinhAnh" name="HinhAnh">
                                        <img src="<?= fixUrl($HinhAnh, '../../') ?>" alt="Ảnh minh họa" style="max-width:200px; margin-top:5px" id="img_thumbnail">
                                    </div>
                                    <div class="form-group">
                                        <label for="MoTa">Nội dung:</label>
                                        <textarea class="form-control" name="MoTa" id="MoTa" rows="5"><?= $MoTa ?></textarea>
                                    </div>
                                    <button class="btn btn-success">Lưu</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#content').summernote({
                height: 350, //set editable area's height
                codemirror: { // codemirror options
                    theme: 'monokai'
                }
            });
        })
    </script>
</body>

</html>