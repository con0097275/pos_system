<?php
session_start();
require_once('../db/dbhelper.php');


if(isset($_POST['action'])) {
    $action = $_POST['action'];
}

switch($action){
    case 'cart':
        addToCart();
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
    var_dump($_SESSION);
    $isFind = false;
    for($i=0;$i<count($_SESSION['cart']);$i++){
        if($_SESSION['cart'][$i]['MaMonAn']==$id){
            $_SESSION['cart'][$i]['num']+=$num;
            if($_SESSION['cart'][$i]['num']<=0) {array_splice($_SESSION['cart'], $i, 1);}
            $isFind=true;
            break;
        }
    }

    if(!$isFind){
        $sql = 'select * from monan where MaMonAn = '.$id;
        $monan=executeSingleResult($sql);
        $monan['num'] = $num;
        $_SESSION['cart'][]=$monan;
    }
}

