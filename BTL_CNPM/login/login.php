


<!--test login 123456-->
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="login.css">
<style>
    .center{
        padding:auto;
        margin:auto;    
        text-align:centre;
        width:60%;
    }
    @media screen and (max-width: 700px) { 
        .center {
            width:100%;
        }
    }
</style>
</head>
<body>
<?php require 'processLogin.php';?>
<script>
function changelogin(x){
	if (x==1) {
    	document.getElementById("login").style.display='block';
        document.getElementById("signup").style.display='none';
    } else {
    	document.getElementById("login").style.display='none';
        document.getElementById("signup").style.display='block';
    }
}
</script>


<div class="center">
<div class="clearfix">
      <button type="button" onclick="changelogin(1)" class="cancelbtn">Đăng nhập</button>
      <button type="button" onclick="changelogin(0)" class="signupbtn">Đăng kí</button>
</div>

<div id="signup" <?php if($login==1) { echo "style='display:none'";} else {echo "style='display:block'";}?>>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="border:1px solid #ccc" method="POST">
  <div class="container">
    <p>Xin vui lòng nhập đầy đủ thông tin bên dưới để tạo tài khoản</p>
    <hr>
	
    <label><b>Họ và tên   </b><span class="error"><?php echo $nameErr_dk;?></span></label>
    <input type="text" placeholder="Enter name" name="name" required>
    
    <label><b>Số điện thoại   </b><span class="error"><?php echo $phoneErr_dk;?></label>
    <input type="text" placeholder="Enter phone" name="phone" required>
    
    <label><b>Email   </b><span class="error"><?php echo $emailErr_dk;?></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label><b>Mật khẩu   </b><span class="error"><?php echo $passErr_dk;?></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label><b>Nhập lại mật khẩu</b><span class="error"><?php echo $cpassErr_dk;?></label>
    <input type="password" placeholder="Repeat Password" name="cpassword" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Nhớ mật khẩu
    </label>
    
    <p>Để tạo tài khoản, bạn cần tuân thủ đúng với <a href="#" style="color:dodgerblue">Điều lệ & Chính sách </a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Hủy bỏ</button>
      <button type="submit" name="submit_dki" class="signupbtn">Đăng kí</button>
    </div>
  </div>
</form>
</div>


<div id="login" <?php if($login==1) { echo "style='display:block'";} else {echo "style='display:none'";}?> >
<!-- dang nhap -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <div class="container">
    <label><b>Email   </b><span class="error"><?php echo $emailErr_dn;?></span></label>
    <input type="email" placeholder="Enter Username" name="em" required>

    <label><b>Nhập mật khẩu   </b><span class="error"><?php echo $passErr_dn;?></span></label>
    <input type="password" placeholder="Enter Password" name="pw" required>
        
    <button name='submit_dn' type="submit">Đăng nhập</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Nhớ mật khẩu
    </label>
  </div>
</form>
</div>

</div>    
</body>
</html>






