<?php
session_start();
if(isset($_SESSION['admin'])) {
  header("Location:quanlythanhvien");
} else {
  die("File doesn't exist");
}
?>