<?php


if(isset($_POST['hoten'])&& isset($_POST['idtv']) && isset($_POST['sdt']) &&isset($_POST['diachi']) && !empty($_POST['hoten'])&& !empty($_POST['idtv'])&& !empty($_POST['sdt']) ) {
    $hoten=test_input($_POST['hoten']);
    $idtv=(int)test_input($_POST['idtv']);
    $sdt=test_input($_POST['sdt']);
    $diachi=test_input($_POST['diachi']);
    require_once("../../../requirefile/connect.php");
    require_once("../../php/functionAdmin.php");
    updatethanhvien($idtv,$hoten,$sdt,$diachi);
    $objs=getthanhvien();
    global $conn;
    $conn->close();
    $dataout='';
    $stt = 1;

    foreach ($objs as $obj) { 
        $dataout.='
        <tr>
            <td>'.$stt.'</td>
            <td>'. $obj['idTV'].'</td>
            <td>'.$obj['Hoten'].'</td>
            <td>'.$obj['sdt'].'</td>
            <td>'.$obj['diachi'].'</td>
            <td>
                <button onclick="xoathanhvien('. $obj['idTV'] .')" class="btn btn-outline-danger">Xóa</button>
                <button onclick="suathanhvien('. $obj['idTV'] .',\''.$obj['Hoten'] .'\',\''.$obj['sdt'] .'\',\''. $obj['diachi'] .'\')" class="btn btn-outline-info" data-toggle="modal" data-target="#editModalthanhvien">Sửa</button>
            </td>
        </tr>';
        $stt += 1;
    }
    echo $dataout;
}
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