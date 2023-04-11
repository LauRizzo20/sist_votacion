<?php
include("conn.php");
$select_dni = mysqli_query($conn, "SELECT dni_almn FROM `tbl_alumnos` WHERE postulante_almn = 1");
$fetch_dni = mysqli_fetch_assoc($select_dni);
$dni = $fetch_dni['dni_almn'];

$select_dni1 = mysqli_query($conn, "SELECT * FROM `tbl_postulantes`");
$fetch_dni1 = mysqli_fetch_assoc($select_dni1);
$dni1 = $fetch_dni1['dni_almn'];
$numeroV = $fetch_dni1['contadorVotos_postul'];
//echo $numeroV;
//$id = /*$_POST['id1']*/48;
//include ("session.php");
// secuencia que se encarga de traer de la base de datos los alumnos del curso
$sql = mysqli_query($conn,"SELECT COUNT(*) AS `count` FROM `tbl_alumnos` WHERE id_curso = 48");
$data = mysqli_fetch_assoc($sql);
$alumn = $data['count'];

//secuencia que se encarga de traer de la abse de datos los alumnos del curso que votaron
$sql1 = mysqli_query($conn,"SELECT COUNT(*) AS `count1` FROM `tbl_alumnos` WHERE id_curso = 48 AND voto_almn = 1");
$data1 = mysqli_fetch_assoc($sql1);
$votos = $data1['count1'];

$resta = $alumn - $votos;

$porcentaje = $votos*100;
$porcentaje1 = $porcentaje/$alumn;

$sql3 = mysqli_query($conn,"SELECT * FROM `tbl_alumnos` WHERE id_curso = 48 AND postulante_almn = 1");

?>
    <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Votar</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/bootstrap.css">  
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<section class="productst">
        <div aria-label="Basic example">
            <h3>Votos hasta el momento:<?php echo $votos;?> </h3>
        </div>
        <div aria-label="Basic example">
            <h3>Votos Faltantes: <?php echo $resta;?></h3>
        </div>
        <div aria-label="Basic example">
            <h3>Ganador hasta el momento: </h3>
        </div>
        <br>
        <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `tbl_alumnos`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
            $val = $fetch_product['dni_almn'];
          if ($fetch_product['postulante_almn'] == 1 && $fetch_product['id_curso'] == 48){
           
      ?>

    <div class="box-containert">
         <div class="box">
         <h3><?php echo $fetch_product['nombre_almn']; ?> <?php echo $fetch_product['apellido_almn']; ?></h3>

        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="<?php echo $numeroV ?>" aria-valuemin="0" aria-valuemax="100" style="height: 20px">
        <div class="progress-bar" style='width: <?php echo $porcentaje1 ?>%'><h4><?php echo $porcentaje1 ?>%</h4></div>
        </div>
          </div>
   
        <?php
     
           };
          };
        }; 
    
        ?>   
       </section>