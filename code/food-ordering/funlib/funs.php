<?php

function moveFile($key, $rootPath = "../"){
    if(!isset($_FILES[$key]) || !isset($_FILES[$key]['name'])
    || $_FILES[$key]['name']==''){
        return '';
    }
    $pathTemp = $_FILES[$key]["tmp_name"];

    $filename = $_FILES[$key]['name'];

    $newPath = "photos/".$filename;
    move_uploaded_file($pathTemp, $rootPath.$newPath);
    return $newPath;
}
function fixUrl($thumbnail, $rootPath = "../"){
    if(stripos($thumbnail, 'http://')!== false || 
        stripos($thumbnail,'https://')!== false){
        }
    else{
        $thumbnail=$rootPath.$thumbnail;
    }
    return $thumbnail;
}

