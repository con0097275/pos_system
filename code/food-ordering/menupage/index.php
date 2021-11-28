<?php
require_once('../db/dbhelper.php');
require_once('../funlib/funs.php');
?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ryan Menu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../HomePage/assets/img/favicon.png" rel="icon">
  <link href="../../HomePage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;1,200;1,300;1,400&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    <!-- Menu CSs -->
    
    <link rel="stylesheet" href="./assets/style/base.css">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dcbf3e0fa6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/style/main.css">
     <link rel="stylesheet" href="./assets/style/responsive.css">
</head>

<body onload="addCart(10,-1)">

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top ">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+84 354 637 020</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Thứ Hai-Chủ Nhật: 11:00 AM - 23:00 PM</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="../../HomePage">Ryan</a></h1>
      </div>


      <button class="btn btn-warning" id="btn-cart"  >Mở Giỏ hàng</button>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  

  <main id="main">
    <!-- Menu -->
    <div class="container container-menu">
        <div class="row">
            <div class="col-md-8 col-xs-12 menu ">
                <div class="menu__content">
                    <ul class="nav nav-pills menu__nav" id="pills-tab" role="tablist">
                    <?php
                        $sql ='select * from danhmuc';
                        $danhmuclist = executeResult($sql);
                        foreach($danhmuclist as $item){
                            echo'
                        <li class="nav-item menu__nav-item">
                            <a class="nav-link " id="'.$item['MaDanhMuc'].'"  href="?cat='.$item['MaDanhMuc'].'" >
                                <img src="'.fixUrl($item['HinhAnh'],'../').'" alt="'.$item['TenDanhMuc'].'">
                                <h6>'.$item['TenDanhMuc'].'</h6>
                            </a>
                        </li> ';
                        }
                    ?>                    
                    </ul>
                    <div class="tab-content menu__content" id="myTabContent">                      
                        <div >                        
                        <?php
                            $current_cat=-1;
                            if(isset($_GET['cat'])){
                                $current_cat=$_GET['cat'];
                            }
                            if($current_cat!=-1){
                                $sql ='select * from monan where Iddanhmuc = '.$current_cat;
                            }else{
                                $sql ='select * from monan';
                            }
                            $monanlist = executeResult($sql);
                            $leng = count($monanlist);                                  
                            for($i = 0; $i <$leng; $i=$i+3){
                                echo'
                            <div class="row">                           
                                <div class="card col-md-4 col-sm-6 col-xs-12 menu__content-item" style="width: 18rem;">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#'.$monanlist[$i]['MaMonAn'].'">
                                        <img class="card-img-top" src="'.fixUrl($monanlist[$i]['HinhAnh'],'../').'" alt="Card image cap">
                                    </button>
                                    <div class="card-body">
                                        <h6 class="card-title">'.$monanlist[$i]['TenMonAn'].'</h6>
                                        <div class="menu__content-item-buy">
                                            <h6>'.number_format($monanlist[$i]['giaTien']).' VNĐ</h6>
                                            <a  class="btn btn-danger" onclick="addCart('.$monanlist[$i]['MaMonAn'].',1)"><i class="fas fa-shopping-cart icon-buy"></i></a>
                                        </div>
                                    </div>
                                </div>';
                            if(($i+1)<$leng)
                                echo '
                                <div class="card col-md-4 col-sm-6 col-xs-12 menu__content-item" style="width: 18rem;">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#'.$monanlist[$i+1]['MaMonAn'].'">
                                        <img class="card-img-top" src="'.fixUrl($monanlist[$i+1]['HinhAnh'],'../').'" alt="Card image cap">
                                    </button>
                                    <div class="card-body">
                                        <h6 class="card-title">'.$monanlist[$i+1]['TenMonAn'].'</h6>
                                        <div class="menu__content-item-buy">
                                            <h6>'.number_format($monanlist[$i+1]['giaTien']).' VNĐ</h6>
                                            <a  class="btn btn-danger" onclick="addCart('.$monanlist[$i+1]['MaMonAn'].',1)"><i class="fas fa-shopping-cart icon-buy"></i></a>
                                        </div>
                                    </div>
                                </div>';
                            if(($i+2)<$leng)
                                echo '
                                <div class="card col-md-4 col-sm-6 col-xs-12 menu__content-item" style="width: 18rem;">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#'.$monanlist[$i+2]['MaMonAn'].'">
                                        <img class="card-img-top" src="'.fixUrl($monanlist[$i+2]['HinhAnh'],'../').'" alt="Card image cap">
                                    </button>
                                    <div class="card-body">
                                        <h6 class="card-title">'.$monanlist[$i+2]['TenMonAn'].'</h6>
                                        <div class="menu__content-item-buy">
                                            <h6>'.number_format($monanlist[$i+2]['giaTien']).' VNĐ</h6>
                                            <a  class="btn btn-danger" onclick="addCart('.$monanlist[$i+2]['MaMonAn'].',1)"><i class="fas fa-shopping-cart icon-buy"></i></a>  
                                        </div>
                                    </div>
                                </div>';
                            echo'</div>';          
                            }
                           
            
                                ?>                          
                        </div>
                    </div>
                </div>
            </div>
           <div class="col-md-4 col-xs-12 cart" id="cart">
                
                <div class="cart__content" id="cart_content">
                    
                </div>
            </div> 
        </div>
    </div>
     <!-- Modal -->
     <?php
$sql ='select * from monan';
$listmonan = executeResult($sql);
foreach($listmonan as $item)
echo'
 <div class="modal fade modal-food" id="'.$item['MaMonAn'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">ADD TO CART</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row modal-cart">
              <div class="col-4">
                  <img class="w-100 modal-img" src="'.fixUrl($item['HinhAnh'],'../').'" alt="img">
              </div>
              <div class="col-8">
                  <ul class="modal-cart-list">
                      <li class="modal-cart-item">Name: '.$item['TenMonAn'].'</li>
                      <li class="modal-cart-item">Price: '.number_format($item['giaTien']).' VNĐ</li>
                      <li class="modal-cart-item">'.$item['MoTa'].'</li>
                  </ul>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger" onclick="addCart('.$item['MaMonAn'].',1)">Buy</button>
        </div>
      </div>
    </div>
  </div>';
  ?>
    <!-- End Menu -->

   



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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
        Designed by <a href="https://www.facebook.com/charlesdephys">Zuan</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  
  <!-- JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 <!-- External JS -->
 <script src="./assets/js/js.js"></script>
 <script src="assets/js/main.js"></script>
  <!-- MENU JS -->
 <!-- JS Bootstrap -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script> 
 
 function addCart(mamonan, num){     
        $.post('ajax.php',{
            'action':'cart',
            'id':mamonan,
            'num':num
        },function(data){
            $('#cart_content').html(data);
        })
        
    }

        
</script>

</body>

</html>


