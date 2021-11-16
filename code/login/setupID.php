<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
require '../requirefile/connect.php';
session_start();
if (!isset($_SESSION["idkh"])) {    
    $setupKH=$conn->query("INSERT INTO khachhang (requestTime) VALUES (CURRENT_TIMESTAMP());");
    if (!$setupKH) {
        echo $conn->error;
    } else {
        $idkhachhang=$conn->query("SELECT * FROM khachhang WHERE idKH=(SELECT MAX(idKH) FROM khachhang);");
        $row=mysqli_fetch_assoc($idkhachhang);
        $_SESSION["idkh"]= intval($row["idKH"]);
        // echo $_SESSION["idkh"];
    }  
} 
$conn->close();
?>

