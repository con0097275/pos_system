<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$db= array(
    'server'=>'localhost',
    'username'=>'root',
    'password'=>'',
    'dbname'=>'pos_system'
);

$conn=new mysqli($db['server'], $db['username'], $db['password'],$db['dbname']);
mysqli_set_charset($conn, 'utf8');

if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
