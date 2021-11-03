<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_GET['vkey'])) {
    //process verification
    $vkey=$_GET['vkey'];
    
    //connect to the database
    require '../requirefile/connect.php';
    
    $resultSet= $conn->query("SELECT verified,vkey FROM taikhoan WHERE verified=0 AND "
            . "vkey='$vkey' LIMIT 1");
    if ($resultSet->num_rows ==1) {
        //validate the email:
        $update= $conn->query("UPDATE taikhoan SET verified=1 WHERE vkey='$vkey' LIMIT 1");
        if ($update) {
            echo "<h3>Your account has been verified. You may now login..</h3>";
        } else{
            echo $conn->error;
        }     
    } else {
        echo "This account invalid or already verified";
    }
    $conn->close();
} else {
    die("Something went wrong");
}


?>