<?php
if(isset($_POST['idtv']) && !empty($_POST['idtv']) ) {
    $id=(int)test_input($_POST['idtv']);
    require_once("../../../requirefile/connect.php");
    require_once("../../php/functionAdmin.php");
    deletethanhvien($id);
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