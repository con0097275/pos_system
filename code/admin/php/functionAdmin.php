<?php

function getthanhvien() {
    global $conn;
    $query="SELECT * FROM thanhvien;";
    $result=$conn->query($query);
    return $result->fetch_all(MYSQLI_ASSOC);
}
function updatethanhvien($idtv,$hoten,$sdt,$diachi){
    global $conn;
    $query="UPDATE thanhvien SET Hoten= '$hoten', sdt='$sdt',diachi='$diachi' WHERE idTV=$idtv;";
    $result=$conn->query($query);
    return $result;
}
function deletethanhvien($idtv) {
    global $conn;
    $tks=$conn->query("SELECT * FROM tvcotk WHERE idTV=$idtv;");
    $tks=$tks->fetch_all(MYSQLI_ASSOC);
    
    //xoa thanh vien co tai khoan
    $query="DELETE FROM tvcotk WHERE idTV=$idtv;";
    $result=$conn->query($query);
    //xoa thanh vien
    $query1="DELETE FROM thanhvien WHERE idTV=$idtv;";
    $result1=$conn->query($query1);
    //xoa tai khoan cua thanh vien
    foreach ($tks as $tk) {
        $tmp=$tk['idTK'];
        $conn->query("DELETE FROM taikhoan WHERE id_taikhoan=$tmp;");
    }  
    return $result1;
}
function insertthanhvien($hoten,$sdt,$diachi) {
    global $conn;
    $query="INSERT INTO thanhvien(Hoten,sdt,diachi) VALUES('$hoten','$sdt','$diachi');";
    $result=$conn->query($query);
    return $conn->insert_id;
}
?>