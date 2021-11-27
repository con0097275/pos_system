<?php
    $error_dn=NULL;
    $error_dk=NULL;    
    $nameErr_dk=$phoneErr_dk=$emailErr_dk=$passErr_dk=$cpassErr_dk="";
    $emailErr_dn=$passErr_dn="";
    $email=$phone=$cpassword=$password=$name="";
    $login=1;
?>
<?php 
//<!--escape special string-->
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
//<!--check dang ki tai khoan::-->
if (isset($_POST['submit_dki'])) {
    $login=0;
    // if the user fill full the form:
    if (!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['cpassword']) ) {
        // Get form data
        $name= test_input($_POST['name']);
        $phone= test_input($_POST['phone']);
        $email= test_input($_POST['email']);
        $password= test_input($_POST['password']);
        $cpassword= test_input($_POST['cpassword']);
        
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr_dk = "Họ tên chỉ bao gồm kí tự chữ cái và dấu khoảng trắng";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Vui lòng nhập đúng thông tin địa chỉ email";
        } else if ( (!preg_match("/^[0-9-+]*$/",$phone)) || (strlen($phone)<9)) {
            $phoneErr_dk="Vui lòng nhập đúng thông tin số điện thoại";
        } else if (strlen($password)<8) {
            $passErr_dk="<p>Mật khẩu của bạn phải có ít nhất 8 kí tự. Vui lòng thử lại. </p>";
        } else if ($password != $cpassword){
            $cpassErr_dk ="<p>Mật khẩu nhập lại không trùng khớp. Vui lòng thử lại. </p>";
        } else {
            //form is valid
            //connect to the database
            require '../requirefile/connect.php';

            //sanitize form data
            $name=$conn->real_escape_string($name);
            $phone=$conn->real_escape_string($phone);
            $email=$conn->real_escape_string($email);
            $password=$conn->real_escape_string($password);
            $cpassword=$conn->real_escape_string($cpassword);

            //check if account exist??
            $checkTKexist=$conn->query("SELECT * FROM taikhoan WHERE email='$email'");
            if ($checkTKexist->num_rows) {
                $emailErr_dk="Tài Khoản đã tồn tại";
            } else {
                //Generate Vkey:
                $vkey=md5(time().$email);
                //echo $vkey;

                //insert account into the database:
                //$password= password_hash($password,PASSWORD_DEFAULT);

                //$password=md5($password);
                $password = password_hash($password, PASSWORD_DEFAULT);

                //INSERT INTO thanhviencotaikhoan (idtk,idtv) VALUES ((SELECT MAX(ID_TV) FROM thanhvien),(SELECT MAX(id) FROM account))
                $insertTV=$conn->query("INSERT INTO thanhvien(Hoten,sdt) VALUES ('$name','$phone')");
                $insertTK= $conn->query("INSERT INTO taikhoan(email,matkhau,vkey) "
                        . "VALUES('$email','$password','$vkey')");
                $insertTVcoTK=$conn->query("INSERT INTO tvcotk (idTK,idTV) VALUES ((SELECT MAX(id_taikhoan) FROM taikhoan)"
                        . ",(SELECT MAX(idTV) FROM thanhvien))");
                
                if ($insertTK && $insertTV && $insertTVcoTK) {
                    //send email:
                    $to=$email;
                    $subject = "Email Verification APP POS";

                    //note to update:
                    $message = "<h1>click vào đây để kích hoạt tài khoản tại RYAN POS SYSTEM: <h1><br>"
                      . "<a href='http://ryanrestaurant.com/login/verify_account.php?vkey=$vkey'> LINK KÍCH HOẠT </a>";
                    $headers = "From: noreply.ryanstore@gmail.com";
                    $headers .= "MIME-Version: RYAN RESTAURANT\r\n";             //MỚI
                    $headers .= "Content-type: text/html\r\n";
                    //$headers .= "Content-type:text/html;charset=UTF-8"."\r\n";

                    mail($to, $subject, $message,$headers);
                    
                    header("Location:tks_signup.php?email=$email");
                    
                    //alert sign up sucessfully:
                    // $message = "ĐĂNG KÍ THÀNH CÔNG.VUI LÒNG KIỂM TRA GMAIL $email ĐỂ KÍCH HOẠT TÀI KHOẢN...";
                    // echo "<script type='text/javascript'>alert('$message');window.location.href='login.php';</script>";
                } else {
                    echo $conn->error;
                }

            }
            $conn->close();
        }
    } else {  //user have not fill all the form
        if (empty($_POST['name'])) {
            $nameErr_dk="Vui lòng điền họ tên";
        }
        if (empty($_POST['phone'])) {
            $phoneErr_dk="Vui lòng điền số điện thoại";
        } 
        if (empty($_POST['email'])) {
            $emailErr_dk="Vui lòng nhập địa chỉ email";
        }
        if (empty($_POST['password'])) {
            $passErr_dk="Vui lòng nhập mật khẩu";
        }
        if (empty($_POST['cpassword'])) {
            $cpassErr_dk="Vui lòng nhập lại mật khẩu";
        }
    }
}

?>


<?php
//<!--check dang nhap tai khoan::-->
if (isset($_POST['submit_dn'])) {
    $login=1;
    // if the account and password user entered had complete:
    if (!empty($_POST['em']) && !empty($_POST['pw'])) {
        //connect to the database:
        require '../requirefile/connect.php';
        //escape specical string from input data:
        $em=test_input($_POST['em']);
        $pw= test_input($_POST['pw']);

        //Get data:
        $em = $conn->real_escape_string($em);
        $pw = $conn->real_escape_string($pw);

        //$pw=md5($pw);
        // Query the database tai khoan khach hang:
        $resultSet1 = $conn->query("SELECT * FROM tvcotk,taikhoan"
                . " WHERE tvcotk.idTK=taikhoan.id_taikhoan AND taikhoan.email='$em' LIMIT 1");
        //Query the database tai khoan admin:
        $resultadmin = $conn->query("SELECT * FROM qtvcotk,taikhoan WHERE qtvcotk.idTK=taikhoan.id_taikhoan AND taikhoan.email='$em' LIMIT 1;");
        if ($resultadmin->num_rows) {
            $admin = $resultadmin->fetch_assoc();
            if (password_verify($pw, $admin['matkhau'])) {
                // session_start();
                $_SESSION['admin']=$admin;
                // quay ve trang admin:
                header("Location:../admin");
            }
        }


        if ($resultSet1->num_rows) {
            //process login
            $row = $resultSet1->fetch_assoc();
            if (password_verify($pw, $row['matkhau'])) {
                $verified = $row['verified'];
                $email = $row['email'];
                $date = $row['createdate'];
                $date = strtotime($date);
                $date = date('M d Y', $date);
                if ($verified == 1) {
                    //continue processing
                    //header("Location:");
                    $temp=$row['idTV'];
                    $resultSet2=$conn->query("SELECT * FROM thanhvien WHERE thanhvien.idTV=$temp");
                    $tv=$resultSet2->fetch_assoc();
                    // var_dump($tv);exit;
                    //start a new session to save the user account info
                    session_start();
                    $_SESSION["idkh"]=$tv['idTV'];
                    $_SESSION["tenthanhvien"]=$tv['Hoten'];
                    $_SESSION["sdt"]=$tv['sdt'];
                    $_SESSION["idtv"]=$tv['idTV'];
                    $_SESSION['emailtv']=$email;
                    // echo $tv['Hoten'] ."\n".$tv['sdt'] ."\n".$tv['idTV'];

                    // quay ve trang chu
                    header("Location:../HomePage");

                } else {
                    $emailErr_dn = "Tài khoản này chưa được kích hoạt. Xác thực đã gửi đến $email vào ngày $date";
                }
            } else {
                $passErr_dn = "Mật khẩu không hợp lệ. Vui lòng thử lại";
            }
        } else {
            //invalid credentials:
            $emailErr_dn = "Tài khoản email không hợp lệ";
        }
        $conn->close();
    } else {   //if user have not fill all the form, display error message:
        if (empty($_POST['em'])){
            $emailErr_dn="Vui lòng nhập địa chỉ email";
        }
        if (empty($_POST['pw'])) {
            $passErr_dn="Vui lòng nhập mật khẩu";
        }
    }      
}
?>
