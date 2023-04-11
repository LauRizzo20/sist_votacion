<?php
@include 'conn.php';
$dnius = 45896296;
$select_product = mysqli_query($conn, "SELECT * FROM `tbl_alumnos` WHERE `dni_almn`= $dnius");
$fetch_produc = mysqli_fetch_assoc($select_product);
$nombre = $fetch_produc['nombre_almn'];
$apellido = $fetch_produc['apellido_almn'];
$alumno =  $nombre. " " .$apellido;
$grupo = $fetch_produc['grupo_almn'];
$voto = $fetch_produc['voto_almn'];
$cu = $fetch_produc['id_curso'];
$select_curso = mysqli_query($conn, "SELECT * FROM `tbl_curso` WHERE `id_curso`= $cu");
$fetch_curso = mysqli_fetch_assoc($select_curso);
$ano = $fetch_curso['ano_curso'];
$division = $fetch_curso['division_curso'];
$curso = $ano. "°" .$division;
// @include 'conec.php';

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
<div class="container">
<br>
<?php

 if ($voto == 0) {
?>

<section class="products">

   <h1 class="heading">Bienvenido:<?php echo $alumno ?> | Votar curso: <?php echo $curso ?>  grupo: <?php echo $grupo ?> </h1>

   <div class="box-container">
   
      <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `tbl_alumnos`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
            $val = $fetch_product['dni_almn'];
          if ($fetch_product['postulante_almn'] == 1 && $fetch_product['grupo_almn'] == $grupo && $fetch_curso['id_curso'] == $cu){
      ?>

      <form action="" method="post">
         <div class="box">
         <h3><?php echo $fetch_product['nombre_almn']; ?> <?php echo $fetch_product['apellido_almn']; ?></h3>
  
         <input type="checkbox" class="btn-check" id="<?php echo $val; ?>" value= "<?php echo $val; ?>" autocomplete="off">
         <label class="btn btn-info" for="<?php echo $val; ?>">Seleccionar</label>
         </div>
      </form>

      <?php
          };
         };
      };
      ?>
      
      <div class="box">
      <h3>Votar en blanco</h3>
      <input type="checkbox" class="btn-check" id="VB" value= "" autocomplete="off">
      <label class="btn btn-info" for="VB">Seleccionar</label>
      </div>
      
    
      
   </div>
   

   
</section>
<button type="submit" id="botonV"class="btn btn-success">Votar</button>  
 <?php
   }else if(1== $voto){
      
    echo "<section class='products' >
            <h1 class='heading'>$alumno</h1>
            <h1 class='heading'>Ya voto</h1>
            </section>";
   };
   ?>
</div>


<!-- custom js file link  -->
<script src="js/sweetalert.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>