<?php
session_start();
if(isset($_SESSION['admin'])) {
    header('Location: monan');
} else {
  die("File doesn't exist");
}
?>