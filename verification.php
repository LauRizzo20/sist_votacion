<?php
include ('conn.php');

    $dni = $_GET['dni'];
    
    $query = mysqli_query($conn,"SELECT * FROM `tbl_alumnos` WHERE `dni_almn` = $dni");
    $row = mysqli_fetch_array($query);
    $state = $row['verif_almn'];

    if ($state == 0) {
        mysqli_query($conn, "UPDATE `tbl_alumnos` SET `verif_almn` = 1 WHERE `dni_almn` = $dni");
    } else if ($state == 1) {
        mysqli_query($conn, "UPDATE `tbl_alumnos` SET `verif_almn` = 0 WHERE `dni_almn` = $dni");
    };

    echo '<script>window.location = "dashboard.php"</script>';
?>