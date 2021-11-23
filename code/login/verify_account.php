

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>RyAn Restaurant</title>

        <!-- Favicons -->
  <link href="../HomePage/assets/img/favicon.png" rel="icon">
  <link href="../HomePage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../HomePage/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../HomePage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../HomePage/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../HomePage/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../HomePage/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../HomePage/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../HomePage/assets/css/style.css" rel="stylesheet">

</head>
<body>
    <header id="headerLogin">
        <a href="../HomePage"><span style="font-size: 30px;font-weight: 700;color: #fff;margin-left:30px;"><i class="fa fa-chevron-left"></i> Trở về</span></a>
        <h2 class="animate__animated animate__fadeInDown" style="float: right;margin-right:30px;"><span>Nhà hàng</span> Ryan </h2>
    </header>

    <div style="height: 500px;padding-top:200px;">
    <?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_GET['vkey'])) {
    //process verification
    $vkey=$_GET['vkey'];
    
    //connect to the database
    require '../requirefile/connect.php';
    
    $resultSet= $conn->query("SELECT verified,vkey FROM taikhoan WHERE verified=0 AND "
            . "vkey='$vkey' LIMIT 1");
    if ($resultSet->num_rows ==1) {
        //validate the email:
        $update= $conn->query("UPDATE taikhoan SET verified=1 WHERE vkey='$vkey' LIMIT 1");
        if ($update) {
            echo "<h3 style='color:#3C589C;text-align:center;font-weight: 700;'>Tài khoản của bạn đã được kích hoạt thành công. Bây giờ bạn có thể đăng nhập vào web..</h3>";
        } else{
            echo $conn->error;
        }     
    } else {
        echo "<h3 style='color:#3C589C;text-align:center;font-weight: 700;'>Tài khoản không hợp lệ hoặc đã được kích hoạt.</h3>";
    }
    $conn->close();
} else {
    die("Something went wrong");
}
?>
    </div>


    <!-- footer -->
    <footer id="footer">
    <div class="container">
      <h3>Ryan</h3>
      <p>Hãy đến với nhà hàng của chúng tôi, bạn sẽ có những phút giây tuyệt vời.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Ryan</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://www.facebook.com/profile.php?id=100011575484229">RyAn</a>
      </div>
    </div>
  </footer><!-- End Footer -->
</body>
</html>



