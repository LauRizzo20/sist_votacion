<?php

include("conn.php");
$dni = mysqli_real_escape_string($conn, $_POST['dni']);
$nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
$apellido = mysqli_real_escape_string($conn, $_POST['apellido']);
$curso = mysqli_real_escape_string($conn, $_POST['curso']);
$grupo = mysqli_real_escape_string($conn, $_POST['grupo']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$password_confirm = mysqli_real_escape_string($conn, $_POST['password_confirm']);

if (isset($postulante)) {
    $postulante = mysqli_real_escape_string($conn, $_POST['postulante']);
} else {
    $postulante = null;
}


$sql = "INSERT INTO tbl_alumnos (dni_almn, nombre_almn, apellido_almn, id_curso, grupo_almn, password_almn, postulante) VALUES ('$dni', '$nombre', '$apellido', '$curso', '$grupo', '$password', '$postulante')";

if ($password == $password_confirm) {
    if (mysqli_query($conn, $sql)) {
        echo "Usted se ha registrado correctamente. Espere a que el administrador de la página verifique su usario para acceder al sistema.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "La confirmación de contraseña es distinta.";
}

$conn->close();
?>