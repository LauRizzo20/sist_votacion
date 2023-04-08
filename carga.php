<?php
include ('conn.php');

    $ano = $_POST['ano'];
    $curso = $_POST['curso'];
    $grupo1 = $_POST['grupo1'];
    $grupo2 = $_POST['grupo2'];

    if (mysqli_query($conn, "INSERT INTO `tbl_curso` (`ano_curso`, `division_curso`,`grupo1_curso`,`grupo2_curso`) VALUES ('".$ano."','".$curso."','".$grupo1."','".$grupo2."')")) {
          echo 'ok';
    } else {
        echo "Error";
    };

mysqli_close($conn);


/*if (mysqli_query($conn, "INSERT INTO `tbl_curso` (`ano_curso`, `division_curso`) VALUES ('".$ano."','".$curso."')")) {
        if (!empty($grupo1) && !empty($grupo2)) {

            $query = mysqli_query($conn, "SELECT * FROM `tbl_curso` WHERE `ano_curso` = $ano AND `division_curso` = '".$curso."'");

            $result = mysqli_fetch_array($query);
            if (mysqli_query($conn, "INSERT INTO `tbl_grupo` (`id_curso`,`grupo_1`, `grupo_2`) VALUES ('".$result['id_curso']."','".$grupo1."','".$grupo2."')")) {
                echo 'ok';
            };
        } else {
            echo 'ok';
        };
    } else {
        echo "Error";
    };*/
?>