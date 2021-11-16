<?php 
    require "../../requirefile/connect.php";


    //<!--escape special string-->
function escape_special($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

    if (isset($_GET['email'])) {
        $email=escape_special($_GET['email']);
        $matkhau=(string)rand(10000000,999999999);
        $passwordhash = password_hash($matkhau, PASSWORD_DEFAULT);
        $query=$conn->query("UPDATE taikhoan SET matkhau='$passwordhash' WHERE email='$email';");
        // echo $email;
        if($conn->affected_rows ) {
                //send email:
                $to=$email;
                $subject = "Email Password RYAN APP POS";
                //note to update:
                $message = "<h1> Mật Khẩu cho email '$email' của bạn đổi lại là:<h1><br>"
                . "<h2>$matkhau</h2>";
                $headers = "From: noreply.ryanstore@gmail.com";
                $headers .= "MIME-Version: RYAN RESTAURANT\r\n";             //MỚI
                $headers .= "Content-type: text/html\r\n";

                mail($to, $subject, $message,$headers);

                //thong bao doi mat khau thanh cong 
                echo  "<script>alert('Vui lòng kiểm tra email $email để kiểm tra mật khẩu mới.'); window.location= '../index.php';</script>";
        } else {
            echo  "<script>alert('Email không hợp lệ. Vui lòng kiểm tra lại.'); window.location= '../index.php';</script>";
        }
                
    } else {
        header("Location:../index.php");
    }
    $conn->close();
?>