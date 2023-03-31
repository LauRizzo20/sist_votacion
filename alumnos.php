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

    $sql = "UPDATE tbl_alumnos SET ano_curso='{$input['ano']}', division_curso='{$input['division']}', grupo1_curso='{$input['grupo1']}', grupo2_curso='{$input['grupo2']}' WHERE dni_almn={$input['dni']}";
    print_r($sql);
    $mysqli->query($sql);
} else if ($input['action'] == 'delete') {
    var_dump($input);
    $sql = "DELETE FROM `tbl_alumnos` WHERE dni_almn={$input['dni']}";
    print_r($sql);
    $mysqli->query($sql);
    header("Location: lista_curso.php");

} 
mysqli_close($mysqli);
?>