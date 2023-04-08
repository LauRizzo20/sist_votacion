<?php

session_start();

include("conn.php");
$dni = mysqli_real_escape_string($conn, $_POST['dni']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT dni_almn,nombre_almn,apellido_almn FROM `tbl_alumnos` WHERE dni_almn='$dni'";
$row = mysqli_query($conn,$sql)->fetch_assoc();
if ($row && password_verify($password, $row['password'])) {
    $_SESSION['user_id'] = $row['dni'];
    $_SESSION['username'] = $row['nombre'] . " " . $row['apellido'];
    header("Location: lobby.php");
} else {
    echo "DNI o Contraseña inválidos";
}

$conn->close();
?>
