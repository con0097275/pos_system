<?php
require_once('config.php');

function execute($sql){
    $con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_query($con, $sql);
    mysqli_close($con);
}

function executeSingleResult($sql){
    $con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    $result =mysqli_query($con, $sql);
    $row=mysqli_fetch_array($result,1);
    mysqli_close($con);
    return $row;
}

function executeResult($sql){
    $con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    $result =mysqli_query($con, $sql);
    $data =[];
    while($row=mysqli_fetch_array($result,1)){
        $data[]=$row;
    }
    mysqli_close($con);
    return $data;
}