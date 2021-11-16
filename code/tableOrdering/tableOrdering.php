<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
require '../requirefile/connect.php';

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$hoten=$sdt=$chinhanh="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    if (isset($_SESSION["idtv"])) {
      if (isset($_POST['date']) && isset($_POST['time']) && isset($_POST['sdt'])&& isset($_POST['email']) && isset($_POST['people']) && isset($_POST['hoten']) && isset($_POST['message']) && isset($_POST['chinhanh']) && isset($_SESSION["idtv"])) {
        $ngay=$_POST['date'];
        $gio=$_POST['time'];
        $songuoi=$_POST['people'];
        $sdt=$_POST['sdt'];
        $email=$_POST['email'];
        $hoten=$_POST['hoten'];
        $noidung=$_POST['message'];
        $chinhanh=$_POST['chinhanh'];
        $idtv=$_SESSION["idtv"];
        //
        $ngay= test_input($ngay);
        $gio= test_input($gio);
        $songuoi= intval(test_input($songuoi));
        $noidung= test_input($noidung);
        $hoten= test_input($hoten);
        $sdt= test_input($sdt);
        $email= test_input($email);
        $chinhanh= test_input($chinhanh);
        
        $query="INSERT INTO thongtindatcho(idTV,ngay,gio,hoten,email,sdt,songuoi,chinhanh,noidung) "
                      .  " VALUES ($idtv,'$ngay','$gio','$hoten','$email','$sdt',$songuoi,'$chinhanh','$noidung');";
        mysqli_query($conn, $query);
        mysqli_close($conn);
        echo "<script>alert('Bạn gửi thông tin đặt bàn thành công.'); window.location= '../HomePage';</script>";
        // header("Location:../HomePage");
      } else {
        echo "<script>alert('Bạn cần nhập đầy dủ thông tin để đặt bàn.');  window.location= '../HomePage/#book-a-table';</script>";
      }
    } else {
      header("Location:../login");
    }
}

?>
