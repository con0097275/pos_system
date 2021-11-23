<!--test-->
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="login.css">
</head>
<body>
    <!-- <div id='test'>50000</div>
    <form action="" method="GET">
  <label>Ma giam gia:</label><br>
  <input type="text" id="mgg" name="magiamgia" value=""><br>
  <input type="submit" value="Submit">
</form> -->
</body>
</html>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start();
        if (isset($_SESSION["idtv"])) {
            if (isset($_POST["magiamgia"])) {
                require "../requirefile/connect.php";
                $coupon=$_POST["magiamgia"];
                $sql="SELECT * FROM magiamgia WHERE MaGiamGia='$coupon'";
                $resultSet1 = $conn->query($sql);
                if ($resultSet1->num_rows) {
                    $x=$resultSet1->fetch_assoc();
                    $phantramgiamgia=$x['phantramGiamgia'];
                    // echo "<script>document.getElementById('test').innerHTML=(document.getElementById('test').innerHTML)*(1-$phantramgiamgia/100);</script>";
                    session_start();
                    $_SESSION['phantramgiamgia']=intval($phantramgiamgia);
                    $_SESSION['magiamgia']=$_POST["magiamgia"];
                }
                $conn->close(); 
            }
            header("Location:../payment");
        } else {
            // echo "<script>window.open('../payment');window.open('../login', '_blank');</script>";
            header("Location:../login");
        }
    }
?>

