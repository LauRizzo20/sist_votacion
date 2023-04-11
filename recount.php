<?php
include("conn.php");
// $dnius = 45896296;
// $select_product = mysqli_query($conn, "SELECT * FROM `tbl_alumnos` WHERE `dni_almn`= $dnius");
// $fetch_produc = mysqli_fetch_assoc($select_product);
// $nombre = $fetch_produc['nombre_almn'];
// $apellido = $fetch_produc['apellido_almn'];
// $alumno =  $nombre. " " .$apellido;
// $grupo = $fetch_produc['grupo_almn'];
// $voto = $fetch_produc['voto_almn'];
// $cu = $fetch_produc['id_curso'];
// $select_curso = mysqli_query($conn, "SELECT * FROM `tbl_curso` WHERE `id_curso`= $cu");
// $fetch_curso = mysqli_fetch_assoc($select_curso);
// $ano = $fetch_curso['ano_curso'];
// $division = $fetch_curso['division_curso'];
// $curso = $ano. "°" .$division;
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
   <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<div aria-label="Basic example">
            <h2>Recuento de votos:</h2>
        </div>
        <br>
        <table class="table" id="tab">

            <?php 
            $sql= "SELECT * FROM `tbl_curso`";
            $query = mysqli_query($conn,$sql);
            
            while($tabquery = mysqli_fetch_array($query)) {
                $ano = $tabquery['ano_curso'];
                $division = $tabquery['division_curso'];
                $curso = $tabquery['id_curso'];
                ?>
                <tr>
                    <td><button  type="button" id="<?php echo $curso ?>"class="btn btn-outline-primary btn-lg mr-md-3 mb-2 mb-md-0"><?php echo $ano. "°" .$division ;?></button></td>
                
                </tr>
                <?php
                };
            ?>
            <script src="js/jquery.min.js"></script>
            <script>
      $(document).on('click','.btn-outline-primary', function(){
      let elemento = $(this)[0].parentElement.parentElement;
      let id =$(this).attr('id');
     console.log(id);

        let id1 = '';
         id1=$(this).attr('id'); 
       console.log(id1);
  
  
      $.ajax({
        type: "POST",
        url: "votos.php",
        data: {id1},
        cache: false,
        success: function (e) { 
        alert(e)
        //$("#tabla2").load("votos.php");
       // window.location = 'login.html';
        },
        error: function (xhr, status, error) {
        console.error(xhr);
        }
    });
  
  
   })
   // function votos() {
   //          $("#tabla2").load("votos.php");
   //      }
        
                </script>
        </table> 
        
        <div id="tabla2">
        </div>