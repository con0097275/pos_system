<?php
session_start();
require_once('../db/dbhelper.php');
require_once('../funlib/funs.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <!-- Reset CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <!-- Fontanswer -->
    <script src="https://kit.fontawesome.com/dcbf3e0fa6.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- External CSS -->
    <link rel="stylesheet" href="./assets/style/main.css">
    <link rel="stylesheet" href="./assets/style/base.css">
    <link rel="stylesheet" href="./assets/style/responsive.css">
    <!-- External JS -->
    <script src="./assets/js/js.js"></script>
    <!-- JS Bootstrap -->
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="row h-100">
        <button class="btn btn-danger menu__cart" onclick="showCart()">
            <i class="fas fa-shopping-cart" aria-hidden="true"></i>  
        </button>
        <button class="btn btn-danger btn__close" id="btnClose" onclick="closeCart()">
            <i class="fas fa-window-close"></i>
        </button>
        <!-- Menu -->
        <div class="menu col-l-9 col-md-8">
            <div class="menu__title">
                <i class="fas fa-home"></i>
                Back to home
            </div>
            <div class="menu__content">
                <ul class="nav nav-tabs menu__nav" id="myTab" role="tablist">
                     <?php
                        $sql ='select * from danhmuc';
                        $danhmuclist = executeResult($sql);
                        foreach($danhmuclist as $item){
                        echo '<li class="nav-item menu__nav-item">
                            <a class="nav-link active" onclick="" id="'.$item['MaDanhMuc'].'" href="?cat='.$item['MaDanhMuc'].'"  >
                                <img src="'.fixUrl($item['HinhAnh'],'../').'" alt="'.$item['TenDanhMuc'].'">
                                <h6>'.$item['TenDanhMuc'].'</h6>
                            </a>
                            </li>';
                        }
                    ?> 
                </ul>
                <div class="tab-content menu__content" id="myTabContent">
                    <div class="tab-pane fade show active" id="cupcake" role="tabpanel" aria-labelledby="cupcake-tab">


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
                    echo '<div class="row">
                            <div class="card col-md-4 menu__content-item" style="width: 18rem;">
                                <button type="button" class="btn" data-toggle="modal" data-target="#'.$monanlist[$i]['MaMonAn'].'">
                                    <img class="card-img-top" src="'.fixUrl($monanlist[$i]['HinhAnh'],'../').'" alt="Card image cap">
                                </button>
                                <div class="card-body">
                                    <h6 class="card-title">'.$monanlist[$i]['TenMonAn'].'</h6>
                                    <div class="menu__content-item-buy">
                                        <h6>'.number_format($monanlist[$i]['giaTien']).' VNĐ</h6>
                                        <button type="button" class="btn btn-primary" onclick="addCart('.$monanlist[$i]['MaMonAn'].',1)">Buy</button>
                                    </div>
                                </div>
                            </div>';
                    if(($i+1)<$leng)
                    echo '
                            <div class="card col-md-4 menu__content-item" style="width: 18rem;">
                                <button type="button" class="btn" data-toggle="modal" data-target="#'.$monanlist[$i+1]['MaMonAn'].'">
                                    <img class="card-img-top" src="'.fixUrl($monanlist[$i+1]['HinhAnh'],'../').'" alt="Card image cap">
                                </button>
                                <div class="card-body">
                                    <h6 class="card-title">'.$monanlist[$i+1]['TenMonAn'].'</h6>
                                    <div class="menu__content-item-buy">
                                        <h6>'.number_format($monanlist[$i+1]['giaTien']).' VNĐ</h6>
                                        <button type="button" class="btn btn-primary" onclick="addCart('.$monanlist[$i+1]['MaMonAn'].',1)">Buy</button>
                                    </div>
                                </div>
                            </div>';
                    if(($i+2)<$leng)
                    echo '
                            <div class="card col-md-4 menu__content-item" style="width: 18rem;">
                                <button type="button" class="btn" data-toggle="modal" data-target="#'.$monanlist[$i+2]['MaMonAn'].'">
                                    <img class="card-img-top" src="'.fixUrl($monanlist[$i+2]['HinhAnh'],'../').'" alt="Card image cap">
                                </button>
                                <div class="card-body">
                                    <h6 class="card-title">'.$monanlist[$i+2]['TenMonAn'].'</h6>
                                    <div class="menu__content-item-buy">
                                        <h6>'.number_format($monanlist[$i+2]['giaTien']).' VNĐ</h6>
                                        <button type="button" class="btn btn-primary" onclick="addCart('.$monanlist[$i+2]['MaMonAn'].',1)">Buy</button>
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
        <!-- Cart -->


             


        <div class="cart col-l-3 col-md-4 h-100" id="cart">
            <div class="cart__title">
                <i class="fas fa-shopping-cart"></i>
                Your Cart
            </div>
            <div class="cart__content" id="vandeptrai">
                <div class="cart__top"> 
                <?php
               if(!isset($_SESSION['cart'])){
                $_SESSION['cart']=[];
            }
                $sum_cost=0;
                foreach($_SESSION["cart"] as $item){
                    $gia=intval($item['num'])*intval($item['giaTien']);
                    $sum_cost=$sum_cost+$gia;
                   echo '
                   <div class="cart__item">
                   <img src="'.fixUrl($item['HinhAnh'],'../').'" alt="cup-cake-logo" class="cart__item-img">
                   <div class="cart__item-quality">
                       <div class="cart__item-quality-title">'.$item['TenMonAn'].'</div>
                       <div class="cart__item-quality-count">
                           <button class="btn-minus" onclick="addCart('.$item['MaMonAn'].',-1)">-</button>
                           <p class="cart__item-quality-number">'.$item['num'].'</p>
                           <button class="btn-add" onclick="addCart('.$item['MaMonAn'].',1)">+</button>
                       </div>
                   </div>
                   <div class="cart__item-cost">'.number_format($gia).' VNĐ</div>
               </div>  
                   ';
                }

                ?>   
       
                </div>
                <div class="cart__bottom">
                    <div class="cart__total">
                        <h4>Total:</h4>
                        <p class="cart__total-cost"><?=number_format($sum_cost)?> VNĐ</p>
                    </div>
                    <div class="cart__payment">
                        <div class="btn btn-danger w-100">PAYMENT</div>
                    </div>
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
  <div class="modal fade" id="'.$item['MaMonAn'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                  <img class="w-100" src="'.fixUrl($item['HinhAnh'],'../').'" alt="img">
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
          <button type="button" class="btn btn-primary" onclick="addCart('.$item['MaMonAn'].',1)">Buy</button>
        </div>
      </div>
    </div>
  </div>';
?>

<script type="text/javascript">
    function addCart(mamonan, num){
//        console.log(mamonan, num);

        $.post('ajax.php',{
            'action':'cart',
            'id':mamonan,
            'num':num
        },function(data){
            location.reload();
        })
        
    }
</script>
</body>
</html>