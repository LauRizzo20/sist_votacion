<?php
include ('conn.php');
include ('votar.php');
$dni = $_POST['id1'];
$dnius;
//echo $dnius;
    if ($dni == "VB"){
        $SQL = mysqli_query($conn,"UPDATE tbl_alumnos SET voto_almn = true WHERE dni_almn = $dnius");
    }else {
        $sql = mysqli_query($conn,"UPDATE tbl_postulantes SET contadorVotos_postul=contadorVotos_postul+1 WHERE dni_almn = $dni");
        $SQL1 = mysqli_query($conn,"UPDATE tbl_alumnos SET voto_almn = true WHERE dni_almn = $dnius");
    }



?>