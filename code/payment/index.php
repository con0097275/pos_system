<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Ryan thanh Toán</title>
     <!-- Favicons -->
  <link href="../HomePage/assets/img/favicon.png" rel="icon">
  <link href="../HomePage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

</head>

<body>
    <!-- setup id khach hang -->
<?php require '../login/setupID.php';?>

    <div class="container">
        <div class="navbar hide-on-mobile mt-4 mb-3">
            <div class="btn navbar-toggler-icon">
                <img src="img/icon_arrow_left.svg" alt="" onclick="callbackPage()">
            </div>
            <div class="navbar-brand col-md-6 col-sm-12" href="#">
                <h2>Thanh toán</h2>
            </div>
        </div>
        <div class="row">


            <div class="cart-background col-md-7 col-sm-12">
                <div class="card" id="payment-method">
                    <div class="d-flex justify-content-between">
                        <span class="card-title">Phương thức thanh toán</span>

                    </div>
                    <div>
                        <form class="justify-content-between">
                            <input checked="checked" name="method" type="radio" value="1" onclick="hiden(this.value)" /> Tiền mặt <br>
                            <input name="method" type="radio" value="2" onclick="hiden(this.value)" /> Online <br>
                        </form>
                    </div>

                </div>
                <div class="card justify-content-between">
                    <form id="voucher" action="../couponCode/index.php" method="POST" name="formgiamgia">
                        <img id="voucher-i1" src="img/icon_voucher.svg" alt="">
                        <input id="voucher-i2" placeholder="Bạn có mã giảm giá?" type="text" name="magiamgia"> 
                        
                        <button id="voucher-i3" type="submit" value="Submit" class="btn-success btn-right">Áp dụng</button>
                    </form>
                    <?php if(isset($_SESSION['phantramgiamgia']) && isset($_SESSION['magiamgia'])) {
                            $magiamgia=$_SESSION['magiamgia'];
                            echo "<script>document.forms['formgiamgia']['magiamgia'].value='$magiamgia';
                            document.forms['formgiamgia']['magiamgia'].disabled = true;
                            </script>";

                        } ?>  
                </div>
                <div class="card">
                    <div>
                        <span class="card-title">Món đã chọn</span>
                    </div>
                    <div id="choose-item">
                    </div>
                </div>
                <div class=" card " id="note-card ">

                    <p><strong>Ghi chú</strong><br><br> <textarea class="textarea " placeholder="Ghi chú cho đơn hàng "></textarea></p>

                </div>
            </div>
            <div class="content col-md-5 col-sm-12 ">
                <div class="mb-2 d-flex justify-content-between ">
                    <div>Tổng cộng
                        <span id="total-quantity"></span> phần</div>
                    <div><span id="subtotal-price"></span> đ</div>
                </div>
                <div class="mb-2 d-flex justify-content-between ">
                    <div>VAT (10%)</div>
                    <div><span id="tax"></span> đ</div>
                </div>
                <div class="mb-2 d-flex justify-content-between ">
                    <div>Phí vận chuyển</div>
                    <div><span id="ship-price"></span> đ</div>
                </div>
                <br>
                <div class="mb-3 d-flex justify-content-between ">
                    <div style="font-weight: bold;font-size: 1.2em;">Tổng cộng</div>
                    <div style="font-weight: bold;font-size: 1.2em;"><span id="total-bill"></span> đ</div>
                </div>
                <div class="mb-3 d-flex justify-content-between ">
                <div style="font-weight: bold;font-size: 1.2em;" id="gg"></div>
                    <div style="font-weight: bold;font-size: 1.2em;"><span id="phantramgiamgia"></span></div>
                </div>
                <div class="mb-3 d-flex justify-content-between ">
                    <div style="font-weight: bold;font-size: 1.2em;" id="gcl"></div>
                    <div style="font-weight: bold;font-size: 1.2em;"><span id="giaconlai"></span></div>
                </div>

                <div id="btn-payment" class="btn-expand" style="visibility:hidden"></div>
                <div  class="btn-primary btn-expand mb-3" onclick="displayModal()">Thanh toán</div>

            </div>
        </div>
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Thanh toán</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Bạn đồng ý thanh toán?
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="test1()">Thanh toán</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"> Hủy bỏ </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- <script src="js/main.js"></script> -->
    <?php require 'main.php'?>
    <script async src="https://pay.google.com/gp/p/js/pay.js" onload="onGooglePayLoaded()"></script>
    <script src="js/paymethod.js"></script>
</body>

</html>