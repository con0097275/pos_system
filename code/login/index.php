<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

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
    <?php require 'setupID.php';?>
    <?php require 'processLogin.php';?>
    <header id="headerLogin">
        <a href="../HomePage"><span style="font-size: 30px;font-weight: 700;color: #fff;margin-left:30px;"><i class="fa fa-chevron-left"></i> Trở về</span></a>
        <h2 class="animate__animated animate__fadeInDown" style="float: right;margin-right:30px;"><span>Nhà hàng</span> Ryan </h2>
    </header>


    <div id="logreg-forms">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id=1" method="POST" class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Đăng nhập</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Đăng Nhập Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Đăng Nhập Google+</span> </button>
            </div>
            <p style="text-align:center"> Hoặc  </p>
            <div>
                <span class="error"><?php echo $emailErr_dn;?></span>
                <span class="error"><?php echo $passErr_dn;?></span>
            </div>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="em" required="" autofocus="">
            <input type="password" id="inputPassword" class="form-control" placeholder="Mật Khẩu" name="pw" required="">
            
            <button class="btn btn-success btn-block" name='submit_dn' type="submit"><i class="fas fa-sign-in-alt"></i> Đăng nhập</button>
            <a href="#" id="forgot_pswd">Quên mật khẩu?</a>
            <hr>
            <!-- <p>Don't have an account!</p>  -->
            <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Đăng kí tài khoản mới</button>
            </form>

            <form action="php/resetPassword.php" class="form-reset" method="GET">
                <input type="email" id="resetEmail" class="form-control" name="email" placeholder="Nhập Email" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Reset mật khẩu</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Trở lại</a>
            </form>
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id=2" method="POST" class="form-signup">
                <div class="social-login">
                    <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Đăng kí bằng Facebook</span> </button>
                </div>
                <div class="social-login">
                    <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Đăng kí bằng Google+</span> </button>
                </div>
                
                <p style="text-align:center">Hoặc</p>

                <input type="text" id="user-name" class="form-control" placeholder="Họ tên" name="name" required="" autofocus="">
                <input type="text" id="user-phone" class="form-control" placeholder="Số điện thoại" name="phone" required="" autofocus="">
                <input type="email" id="user-email" class="form-control" placeholder="Email" name="email" required autofocus="">
                <input type="password" id="user-pass" class="form-control" placeholder="Mật khẩu"name="password"  required autofocus="">
                <input type="password" id="user-repeatpass" class="form-control" placeholder="Nhập lại mật khẩu" name="cpassword" required autofocus="">
                <div>
                    <div class="error"><?php echo $nameErr_dk;?></div>
                    <div class="error"><?php echo $phoneErr_dk;?></div>
                    <div class="error"><?php echo $emailErr_dk;?></div>
                    <div class="error"><?php echo $passErr_dk;?></div>
                    <div class="error"><?php echo $cpassErr_dk;?></div>
                </div>

                <button class="btn btn-primary btn-block" name="submit_dki" type="submit"><i class="fas fa-user-plus"></i> Đăng kí</button>
                <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Trở lại</a>
            </form>
            <br>
            
    </div>

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



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/login.js"></script>

    <?php 
        if (isset($_GET['id'])) {
            if($_GET['id']==2) {
                echo "<script>
                $('#logreg-forms .form-signin').toggle(); // display:block or none
                $('#logreg-forms .form-signup').toggle(); // display:block or none
                </script>";
            }     
        }
    ?>
    
</body>
</html>