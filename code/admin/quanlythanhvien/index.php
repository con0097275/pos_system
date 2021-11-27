<?php
session_start();
if (!isset($_SESSION['admin'])) {
    die("File doesn't exist");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Favicons -->
    <link href="../../HomePage/assets/img/favicon.png" rel="icon">
    <link href="../../HomePage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
    <?php require_once("../php/checkAdmin.php");?>
    <!-- navbar -->
    <div class="fluid-container">
        <div class="row main">
<div class="col-3">
                <div class="sidebar" style="position: fixed;">
                    <div class="sidebar-header">Ryan's System</div>
                    <div class="sidebar-wrapper">
                        <ul class="sidebar-list">
                            <li class="sidebar-item">
                                <a href="http://ryanrestaurant.com/admin/quanlythanhvien/" class="sidebar-link active">1. Quản lí thành viên</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">2. Quản lí thông tin đặt bàn</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">3. Quản lí bình luận, đánh giá</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="http://ryanrestaurant.com/food-ordering/admin/monan/" class="sidebar-link">4. Quản lí món ăn</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="http://ryanrestaurant.com/food-ordering/admin/danhmuc/" class="sidebar-link">5. Quản lí danh mục món ăn</a>
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
    <div class="jumbotron text-center" style="margin-bottom:20px;">
        <h1>Bảng Thành viên</h1>
    </div>
    <div class="container">
        <!-- search dia chi or ngay -->
        <div class="searchdulieu">
            <label>SEARCH: </label> <input id="inputSearch" type="text">
        </div>

        <!-- button insert -->
        <div>
            <button onclick="themthanhvien()" type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#indertModalthanhvien" id="insert">Thêm thành viên</button>
        </div>

        

        <!-- display data -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>ID</th>
                    <th>Họ tên</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody id="content">
                <?php 
                require_once("../../requirefile/connect.php");
                require_once("../php/functionAdmin.php");
                $stt = 1;
                $objs = getthanhvien();
                foreach ($objs as $obj) { ?>
                    <tr>
                        <td><?php echo $stt; ?></td>
                        <td><?php echo $obj['idTV']; ?></td>
                        <td><?php echo $obj['Hoten']; ?></td>
                        <td><?php echo $obj['sdt']; ?></td>
                        <td><?php echo $obj['diachi']; ?></td>
                        <td>
                            <button onclick="xoathanhvien(<?= $obj['idTV'] ?>)" class="btn btn-outline-danger">Xóa</button>
                            <button onclick="suathanhvien(<?= $obj['idTV'] ?>,'<?= $obj['Hoten'] ?>','<?= $obj['sdt'] ?>','<?= $obj['diachi'] ?>')" class="btn btn-outline-info" data-toggle="modal" data-target="#editModalthanhvien">Sửa</button>
                        </td>
                    </tr>
                    <?php $stt += 1; ?>
                <?php    } global $conn; $conn->close();?>

            </tbody>
        </table>
    </div>
        </div>
    </div>




    <!-- Insert popup modal -->
        <!-- Modal -->
        <div class="modal fade" id="indertModalthanhvien" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm Thành viên</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="php/themthanhvien.php" id="formthemthanhvien" class="was-validated" method="POST">
                            <div class="form-group">
                                <label>Họ tên:</label>
                                <input id="inserthoten" type="text" class="form-control" placeholder="Enter Name" name="hoten" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Unvalid</div>
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại:</label>
                                <input id="insertsdt" type="text" class="form-control" placeholder="Enter Phone" name="sdt" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Unvalid</div>
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ:</label>
                                <input id="insertdiachi" type="text" class="form-control" placeholder="Enter Address" name="diachi">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Unvalid</div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button id="closeModalInsert" type="button" class="btn btn-secondary" data-dismiss="modal">Hủy bỏ</button>
                        <button onclick="saveInsertthanhvien()" type="button" class="btn btn-primary">Lưu thay đổi</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
</div>

        <!-- Edit popup modal -->
        <!-- Modal -->
        <div class="modal fade" id="editModalthanhvien" tabindex="-1" role="dialog" aria-labelledby="editCarModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa Thành viên</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="php/suathanhvien.php" id="formeditthanhvien" class="was-validated" method="POST">
                            <div class="form-group">
                                <label>ID:</label>
                                <input id="editid" type="number" class="form-control" name="hoten" readonly>
                            </div>
                            <div class="form-group">
                                <label>Họ tên:</label>
                                <input id="edithoten" type="text" class="form-control" placeholder="Enter Name" name="hoten" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Unvalid</div>
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại:</label>
                                <input id="editsdt" type="text" class="form-control" placeholder="Enter phone" name="sdt" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Unvalid</div>
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ:</label>
                                <input id="editdiachi" type="text" class="form-control" placeholder="Enter address" name="diachi">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Unvalid</div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button id="closeModalEdit" type="button" class="btn btn-secondary" data-dismiss="modal">Hủy bỏ</button>
                        <button onclick="saveEditthanhvien()" type="button" class="btn btn-primary">Lưu thay đổi</button>
                    </div>
                </div>
            </div>
        </div>
    <script>
        $(document).ready(function() {
            $("#inputSearch").on("keyup", function() {
                let value = $(this).val().toLowerCase();
                $("#sensorData tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });

            function xoathanhvien(deletedid) {
                $.post("php/xoathanhvien.php", {
                    idtv: deletedid
                }).done(function(data) {
                    if (data) {
                        alert("Xóa thành công");
                        $('#content').html(data);
                    }
                });
            }

            function suathanhvien(id, name, sdt, diachi) {
                $("#editid").val(id);
                $("#edithoten").val(name);
                $("#editsdt").val(sdt);
                $("#editdiachi").val(diachi);
            }

            function saveInsertthanhvien(){
                let hoten=$("#inserthoten").val();
                let sdt=$("#insertsdt").val();
                let diachi=$("#insertdiachi").val();
                $.post("php/themthanhvien.php", {
                    hoten: hoten,
                    sdt: sdt,
                    diachi: diachi
                }).done(function(data) {
                    if (data) {
                        $('#content').html(data);
                        alert("Thêm thành công.");
                    }
                    $("#closeModalInsert").click();
                });
            }
            function saveEditthanhvien(){
                let id=$("#editid").val();
                let hoten=$("#edithoten").val();
                let sdt=$("#editsdt").val();
                let diachi=$("#editdiachi").val();
                $.post("php/suathanhvien.php", {
                    idtv: id,
                    hoten: hoten,
                    sdt: sdt,
                    diachi: diachi
                }).done(function(data) {
                    if (data) {
                        $('#content').html(data);
                        alert("Sửa thành công.");
                    }
                    $("#closeModalEdit").click();
                });
            }
        
    </script>

</body>

</html>