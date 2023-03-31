<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Lista de alumnos</title>
</head>
<body>
    <a href="dashboard.php"><button type="button" class="btn btn-secondary">Volver</button></a>
    <br>
    <center>
        <h2>Lista de alumnos</h2>
    </center>
    <br>
    <table class="table" id="tab">
        <thead>
        <tr>
            <th scope="col">DNI</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Año</th>
            <th scope="col">Division</th>
            <th scope="col">Grupo</th>
            <th scope="col">Postulado</th>
            <th scope="col">Voto</th>
            <th scope="col">Verificado</th>
        </tr>
        </thead>
        <?php 
        $sql= "SELECT * FROM `tbl_alumnos` INNER JOIN `tbl_curso` ON  tbl_alumnos.id_curso = tbl_curso.id_curso ORDER BY dni_almn DESC";
        $query = mysqli_query($conn,$sql);

        while($tabquery = mysqli_fetch_array($query)) {
            $dni = $tabquery['dni_almn'];
            $nombre = $tabquery['nombre_almn'];
            $apellido = $tabquery['apellido_almn'];
            $ano = $tabquery['ano_curso'];
            $division = $tabquery['division_curso'];
            $grupo = $tabquery['grupo_almn'];
            $postulado = $tabquery['postulante_almn'];
            $voto = $tabquery['voto_almn'];
            $verif = $tabquery['verif_almn'];
            ?>
            <tr>
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='id' value= <?php echo $dni; ?> disabled=""><?php echo $dni; ?></td>
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='nombre' value=<?php echo  $nombre; ?> disabled=""><?php echo $nombre; ?></td>
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='apellido' value=<?php echo $apellido; ?> disabled=""><?php echo $apellido; ?></td>
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='ano' value=<?php echo $ano; ?> disabled=""><?php echo $ano; ?></td>
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='division' value=<?php echo $division; ?> disabled=""><?php echo $division; ?></td>
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='grupo' value=<?php echo $grupo; ?> disabled=""><?php echo $grupo; ?></td>
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='postulado' value=<?php echo $postulado; ?> disabled=""><?php echo $postulado; ?></td>
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='voto' value=<?php echo $voto; ?> disabled=""><?php echo $voto; ?></td>
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='verif' value=<?php echo $verif; ?> disabled=""><?php echo $verif; ?></td>
            </tr>
            <?php
            };
        ?>
      </table>
    </body>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.tabledit.js"></script>
    <script>
      $('#tab').Tabledit({
    url: 'cursos.php',
    columns: {
        identifier: [0, 'id'],
        editable: [[1, 'nombre'], [2, 'apellido'],[3, 'ano'], [4, 'division'], [5, 'grupo'], [6, 'postulado'], [7, 'voto'], [8, 'verif']]
    },
    onDraw: function() {
        console.log('onDraw()');
    },
    onSuccess: function(data, textStatus, jqXHR) {
        /*console.log('onSuccess(data, textStatus, jqXHR)');
        console.log(data);
        console.log(textStatus);
        console.log(jqXHR);*/
        window.location.reload();
    },
    /*onFail: function(jqXHR, textStatus, errorThrown) {
        console.log('onFail(jqXHR, textStatus, errorThrown)');
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    },
    onAlways: function() {
        console.log('onAlways()');
      
    },*/
    onAjax: function(action, serialize) {
        console.log('onAjax(action, serialize)');
        console.log(action);
        console.log(serialize);
        window.location.reload()
    }
});
    </script>
</html>