<?php 
session_start();
//<!--escape special string-->
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if (isset($_POST['doimatkhau']) && !empty($_POST['email']) && !empty($_POST['oldpswd']) && !empty($_POST['newpswd']) ) {
    $email=test_input($_POST['email']);
    $oldpw=test_input($_POST['oldpswd']);
    $newpw=test_input($_POST['newpswd']);
    require_once("../../requirefile/connect.php");
    global $conn;
    $resultSet1 = $conn->query("SELECT * FROM tvcotk,taikhoan"
    . " WHERE tvcotk.idTK=taikhoan.id_taikhoan AND taikhoan.email='$email' LIMIT 1");
    $row = $resultSet1->fetch_assoc();
    if (password_verify($oldpw, $row['matkhau'])) {
      if (strlen($newpw)>=8) {
        $passwordhash = password_hash($newpw, PASSWORD_DEFAULT);
          $conn->query("UPDATE taikhoan SET matkhau='$passwordhash' WHERE email='$email';");
          $conn->close();
          echo "<script>alert('Đổi mật khẩu thành công.');location.href='../../HomePage';</script>";
          // header("Location:../../HomePage");
      } else {
          echo "<script>alert('Mật khẩu mới phải chứa hơn 8 kí tự');location.href='index.php';</script>";
      }   
    }
    
} 

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="../../login/css/login.css">
  <title>ĐỔi mật khẩu</title>

  <!-- Favicons -->
  <link href="../../HomePage/assets/img/favicon.png" rel="icon">
  <link href="../../HomePage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../HomePage/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../../HomePage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../HomePage/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../HomePage/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../HomePage/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../HomePage/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../HomePage/assets/css/style.css" rel="stylesheet">
  <style>
    #content{
      margin: 0 auto;
      padding-left: 300px;
    }
    </style>
</head>

<body>
  <?php if (isset($_SESSION['emailtv'])) {
    ?>

  <header id="headerLogin">
    <a href="../../HomePage"><span style="font-size: 30px;font-weight: 700;color: #fff;margin-left:30px;"><i class="fa fa-chevron-left"></i> Trở về</span></a>
    <h2 class="animate__animated animate__fadeInDown" style="float: right;margin-right:30px;"><span>Nhà hàng</span> Ryan </h2>
  </header>


  
  <div id="content" style="height: 500px;padding-top:100px;">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="form-group">
        <label>Email:</label>
        <input style="width:70%;" readonly="" type="email" class="form-control" id="email" value="<?php echo $_SESSION['emailtv']; ?>" placeholder="Enter email" name="email">
      </div>
      <div class="form-group">
        <label>Mật khẩu cũ:</label>
        <input style="width:70%;" type="password" class="form-control" id="oldpwd" placeholder="Enter old password" name="oldpswd">
      </div>
      <div class="form-group">
        <label>Mật khẩu mới:</label>
        <input style="width:70%;" type="password" class="form-control" id="newpwd" placeholder="Enter new password" name="newpswd">
      </div>
      <button name="doimatkhau" type="submit" class="btn btn-primary">Xác nhận</button>
    </form>
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

  <?php } ?>

</body>

</html>