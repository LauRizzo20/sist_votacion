<?php
include("conn.php");
?>

    <center>
        <h2>Lista de postulantes</h2>
    </center>
    <br>
    <table class="table" id="tab">
        <thead>
        <tr>
            <th scope="col">dni</th>
            <th scope="col">nombre</th>
            <th scope="col">apellido</th>
            <th scope="col">nro curso</th>
            <th scope="col">votos</th>
        </tr>
        </thead>
        <?php 
        $sql= "SELECT * FROM `tbl_alumnos` INNER JOIN `tbl_postulantes` ON tbl_alumnos.dni_almn = tbl_postulantes.dni_almn WHERE `postulante_almn` = 1";
        $query = mysqli_query($conn,$sql);

        while($tabquery = mysqli_fetch_array($query)) {
            $dni = $tabquery['dni_almn'];
            $nombre = $tabquery['nombre_almn'];
            $apellido = $tabquery['apellido_almn'];
            $curso = $tabquery['id_curso'];
            $votos = $tabquery['contadorVotos_postul'];
            ?>
            <tr>
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='id' value= <?php echo $dni; ?> disabled=""><?php echo $dni; ?></td>
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='nombre' value=<?php echo  $nombre; ?> disabled=""><?php echo $nombre; ?></td>
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='apellido' value=<?php echo $apellido; ?> disabled=""><?php echo $apellido; ?></td>
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='curso' value=<?php echo $curso; ?> disabled=""><?php echo $curso; ?></td>
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='curso' value=<?php echo $votos; ?> disabled=""><?php echo $votos; ?></td>
            </tr>
            <?php
            };
        ?>
      </table>

      
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.tabledit.js"></script>
    <script>
     /* $('#tab').Tabledit({
    url: 'cursos.php',
    columns: {
        identifier: [0, 'dni'],
        editable: [[1, 'nombre'], [2, 'apellido'], [3, 'curso']]
    },
    onDraw: function() {
        console.log('onDraw()');
    },
    onSuccess: function(data, textStatus, jqXHR) {
        console.log('onSuccess(data, textStatus, jqXHR)');
        console.log(data);
        console.log(textStatus);
        console.log(jqXHR);
        //window.location.reload();
    },
    onFail: function(jqXHR, textStatus, errorThrown) {
        console.log('onFail(jqXHR, textStatus, errorThrown)');
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    },
    onAlways: function() {
        console.log('onAlways()');
      
    },
    onAjax: function(action, serialize) {
        console.log('onAjax(action, serialize)');
        console.log(action);
        console.log(serialize);
        window.location.reload()
    }
});*/
    </script>