<?php
include('conn.php');

$fase = $_GET['fase'];

mysqli_query($conn, "UPDATE `tbl_fases` SET `estado_fases`=0 WHERE 1");

if (mysqli_query($conn, "UPDATE `tbl_fases` SET `estado_fases`=1 WHERE `nombre_fases` = '$fase'")) {
    ?><script>alert('Fase de <?php echo $fase; ?> iniciada'); window.history.back();</script><?php
} else  {
    echo 'error';
};
?>