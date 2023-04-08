<?php
include("conn.php");
?>

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
            <th scope="col">Verificacion</th>
        </tr>
        </thead>
        <?php 
        $sql= "SELECT * FROM `tbl_alumnos` INNER JOIN `tbl_curso` ON  tbl_alumnos.id_curso = tbl_curso.id_curso WHERE `baja_almn` = 0";
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
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='postulado' value=<?php echo $postulado; ?> disabled=""><?php if ($postulado == 0) {
                                                                                                                                                    echo 'No';       
                                                                                                                                                } else {
                                                                                                                                                    echo 'Si';
                                                                                                                                                             }; ?></td>
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='voto' value=<?php echo $voto; ?> disabled=""><?php if ($voto == 0) {
                                                                                                                                                    echo 'No';       
                                                                                                                                                } else {
                                                                                                                                                    echo 'Si';
                                                                                                                                                             }; ?></td>
                <td><a href="verification.php<?php echo '?dni='.$dni;?>"><?php
                                                                                if ($verif == 0) {
                                                                                    echo '<button type="button" class="btn btn-primary">Habilitar';
                                                                                } else {
                                                                                    echo '<button type="button" class="btn btn-secondary">Habilitado';
                                                                                };
                                                                                ?></button></a></td>
            </tr>
            <?php
            };
        ?>
      </table>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.tabledit.js"></script>



    <script>
      $('#tab').Tabledit({
    url: 'alumnos.php',
    columns: {
        identifier: [0, 'dni'],
        editable: [[1, 'nombre'], [2, 'apellido'],[5, 'grupo']]
    },
    onDraw: function() {
        console.log('onDraw()');
    },
    onSuccess: function(data, textStatus, jqXHR) {
        /*console.log('onSuccess(data, textStatus, jqXHR)');
        console.log(data);
        console.log(textStatus);
        console.log(jqXHR);*/
        //window.location.reload();
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
        //window.location.reload()
    }
});
    </script>