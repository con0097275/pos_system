<?php
session_start();
if (!isset($_SESSION['admin'])) {
    die("File doesn't exist");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quản lý đặt bàn</title>
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

    <link href="../css/style.css" rel="stylesheet">
<script src="../js/js.js"></script>
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
                                <a href="../quanlythanhvien/" class="sidebar-link">1. Quản lí thành viên</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../quanlydatban/" class="sidebar-link active">2. Quản lí thông tin đặt bàn</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">3. Quản lí bình luận, đánh giá</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../../food-ordering/admin/monan/" class="sidebar-link">4. Quản lí món ăn</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../../food-ordering/admin/danhmuc/" class="sidebar-link">5. Quản lí danh mục món ăn</a>
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
        <h1>Bảng Thông tin đặt bàn</h1>
    </div>
    <div class="container">
        <!-- search dia chi or ngay -->
        <div class="searchdulieu">
            <label>SEARCH: </label> <input id="inputSearch" type="text">
        </div>
        <!-- button insert -->
        <div>
            <button onclick="" type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#addItemModal" id="insert">Thêm đặt bàn</button>
        </div>


        <div class="data-table">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">STT</th>
                                <th scope="col">ID</th>
                                <th scope="col">Ngày</th>
                                <th scope="col">Giờ</th>
                                <th scope="col">Họ Tên</th>
                                <th scope="col">Email</th>
                                <th scope="col">Số điện thoại</th>
                                <th scope="col">Số người</th>
                                <th scope="col">Chi nhánh</th>
                                <th scope="col">Nội dung</th>
                                <th scope="col">Sửa</th>
                                <th scope="col">Xóa</th>
                              </tr>
                            </thead>
                            <tbody id="contentTable">
                                <?php 
                                    require_once("../../requirefile/connect.php");
                                    global $conn;
                                    $query=$conn->query("SELECT * FROM thongtindatcho;");
                                    $objs=$query->fetch_all(MYSQLI_ASSOC);
                                    $conn->close();
                                    $stt=1;
                                    foreach ($objs as $obj) {
                                ?>
                              <tr>
                                <th scope="row"><?=$stt?></th>
                                <td><?=$obj['idTV']?></td>
                                <td><?=$obj['ngay']?></td>
                                <td><?=$obj['gio']?></td>
                                <td><?=$obj['hoten']?></td>
                                <td><?=$obj['email']?></td>
                                <td><?=$obj['sdt']?></td>
                                <td><?=$obj['songuoi']?></td>
                                <td><?=$obj['chinhanh']?></td>
                                <td><?=$obj['noidung']?></td>
                                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addItemModal" data-whatever="Chỉnh Sửa">Sửa</button></td>
                                <td><button type="button" class="btn btn-danger">Xóa</button></td>
                              </tr>
                              <tr>
                                <?php $stt+=1; } ?>
                            </tbody>
                          </table>
                    </div>
 
    </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="addItemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Nhập thông tin Item</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="id">ID</label>
                  <input type="number" class="form-control" id="id" placeholder="Nhập ID">
                </div>
                <div class="form-group">
                  <label for="date">Ngày</label>
                  <input type="date" class="form-control" id="date" placeholder="Nhập Ngày">
                </div>
                <div class="form-group">
                  <label for="time">Giờ</label>
                  <input type="time" class="form-control" id="time" placeholder="Nhập Giờ">
                </div>
                <div class="form-group">
                  <label for="name">Họ Tên</label>
                  <input type="text" class="form-control" id="name" placeholder="Nhập Họ Tên">
                </div> 
                <div class="form-group">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Nhập Email">
                </div> 
                <div class="form-group">
                  <label for="name">Số điện thoại</label>
                  <input type="tel" class="form-control" id="phone-number" placeholder="Nhập số điện thoại">
                </div> 
                <div class="form-group">
                  <label for="adress">Số người</label>
                  <input type="number" class="form-control" id="person-number" placeholder="Nhập Số người">
                </div> 
                <div class="form-group">
                  <label for="adress">Chi nhánh</label>
                  <input type="text" class="form-control" id="adress" placeholder="Nhập Chi nhánh">
                </div> 
                <div class="form-group">
                  <label for="adress">Nội dung</label>
                  <input type="text" class="form-control" id="content" placeholder="Nhập Nội dung">
                </div> 
                <button type="submit" class="btn btn-primary btn-submit">Thêm</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <script>
        $(document).ready(function() {
            $("#inputSearch").on("keyup", function() {
                let value = $(this).val().toLowerCase();
                $("#contentTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    </script>

</body>

</html>