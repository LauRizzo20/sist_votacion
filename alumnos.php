<?php
header('Content-Type: application/json');
 if ($_SERVER['REQUEST_METHOD']=='POST') {
   $input =filter_input_array(INPUT_POST);
 } else {
   $input =filter_input_array(INPUT_GET);
 }

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "sist_votacion";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

if ($input['action'] == 'edit') {
    var_dump($input);

    $sql = "UPDATE tbl_alumnos SET nombre_almn='{$input['nombre']}', apellido_almn='{$input['apellido']}', id_curso='{$input['id_curso']}', grupo_almn='{$input['grupo']}' WHERE dni_almn={$input['dni']}";
    print_r($sql);
    $mysqli->query($sql);
} else if ($input['action'] == 'delete') {
    var_dump($input);
    $sql = "UPDATE `tbl_alumnos` SET `baja_almn` = 1 WHERE `dni_almn`='{$input['dni']}'";
    print_r($sql);
    $mysqli->query($sql);
} 
mysqli_close($mysqli);
?>