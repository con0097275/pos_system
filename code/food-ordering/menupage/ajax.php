<?php
session_start();
require_once('../db/dbhelper.php');
require_once('../funlib/funs.php');
$action=$id=$num='';
if(isset($_POST['action'])) {
    $action = $_POST['action'];
}

switch($action){
    case 'cart':
        addToCart();
        break;
    case 'deletecart':       
            unset($_SESSION['cart']);      
        break;
    }

   

function addToCart(){

    if(isset($_POST['id'])) {
		$id = $_POST['id'];
	}
    if(isset($_POST['num'])) {
		$num = $_POST['num'];
	}


    if(!isset($_SESSION['cart'])){
        $_SESSION['cart']=[];
    }
    
    $isFind = false;
    for($i=0;$i<count($_SESSION['cart']);$i++){
        if($_SESSION['cart'][$i]['MaMonAn']==$id){
            $_SESSION['cart'][$i]['num']+=$num;
            if($_SESSION['cart'][$i]['num']<=0) {array_splice($_SESSION['cart'], $i, 1);}
            $isFind=true;
            break;
        }
    }

    if(!$isFind&&$num>0){
        $sql = 'select * from monan where MaMonAn = '.$id;
        $monan=executeSingleResult($sql);
        $monan['num'] = $num;
        $_SESSION['cart'][]=$monan;
    }
}

$output = '';
    $sum_cost=0;
    $output = '';
    $output .= '
    <div class="cart__title">
                    <i class="fas fa-shopping-cart"></i>
                    Your Cart
                </div>
    <div class="cart__top">
    ';

    for($i=0;$i<count($_SESSION['cart']);$i++){
        $gia=intval($_SESSION['cart'][$i]['num'])*intval($_SESSION['cart'][$i]['giaTien']);
        $sum_cost=$sum_cost+$gia;
        $output .= '
        <div class="cart__item">
            <img src="'.fixUrl($_SESSION['cart'][$i]['HinhAnh'],'../').'" alt="cup-cake-logo" class="cart__item-img">
            <div class="cart__item-quality">
                <div class="cart__item-quality-title">'.$_SESSION['cart'][$i]['TenMonAn'].'</div>
                <div class="cart__item-quality-count">
                    <button class="btn-minus" onclick="addCart('.$_SESSION['cart'][$i]['MaMonAn'].',-1)"><i class="fas fa-minus"></i></button>
                    <p class="cart__item-quality-number">'.$_SESSION['cart'][$i]['num'].'</p>
                    <button class="btn-add" onclick="addCart('.$_SESSION['cart'][$i]['MaMonAn'].',1)"><i class="fas fa-plus"></i></button>
                </div>
            </div>
            <div class="cart__item-cost">'.number_format($gia).' VNĐ</div>
        </div>
        ';
    }

    $output .= '
    </div>
    <div class="cart__bottom">
        <div class="cart__total">
            <h4>Total:</h4>
            <p class="cart__total-cost">'.number_format($sum_cost).' VNĐ</p>
        </div>
        <div class="cart__payment">
            <button onclick="window.location.href=\'../../payment\'" class="btn btn-danger w-100">PAYMENT</button>
        </div>
    </div>
    ';

     echo $output;