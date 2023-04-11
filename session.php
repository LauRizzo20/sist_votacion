<?php
session_start();
if (!isset($_SESSION['id'])){
header('location:lobby.php');
}

$id=$_SESSION['id'];
$query = mysqli_query($con,"SELECT * FROM `tbl_alumnos` WHERE `dni_almn` = '$id'");
$row = mysqli_fetch_array($query);

?>