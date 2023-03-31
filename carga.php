<?php
include ('conn.php');

    $ano = $_POST['ano'];
    $curso = $_POST['curso'];
    $grupo1 = $_POST['grupo1'];
    $grupo2 = $_POST['grupo2'];

    if (mysqli_query($conn, "INSERT INTO `tbl_curso` (`ano_curso`, `division_curso`, `grupo1_curso`, `grupo2_curso`) VALUES ('".$ano."','".$curso."','".$grupo1."','".$grupo2."')")) {
        echo "ok";
    } else {
        echo "Error";
    };

mysqli_close($conn);
?>