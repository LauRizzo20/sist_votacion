<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Lista de cursos</title>
</head>
<body>
    <a href="dashboard.php"><button type="button" class="btn btn-secondary">Volver</button></a>
    <br>
    <center>
        <h2>Lista de cursos</h2>
    </center>
    <br>
    <table class="table" id="tab">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">año</th>
            <th scope="col">curso</th>
            <th scope="col">grupo 1</th>
            <th scope="col">grupo 2</th>
        </tr>
        </thead>
        <?php 
        $sql= "SELECT * FROM `tbl_curso`";
        $query = mysqli_query($conn,$sql);

        while($tabquery = mysqli_fetch_array($query)) {
            $id = $tabquery['id_curso'];
            $ano = $tabquery['ano_curso'];
            $division = $tabquery['division_curso'];
            $grupo1 = $tabquery['grupo1_curso'];
            $grupo2 = $tabquery['grupo2_curso'];
            ?>
            <tr>
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='id' value= <?php echo $id; ?> disabled=""><?php echo $id; ?></td>
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='ano' value=<?php echo  $ano; ?> disabled=""><?php echo $ano; ?></td>
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='division' value=<?php echo $division; ?> disabled=""><?php echo $division; ?></td>
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='grupo1' value=<?php echo $grupo1; ?> disabled=""><?php echo $grupo1; ?></td>
                <td><input class="tabledit-input tabledit-identifier" type="hidden" name='grupo2' value=<?php echo $grupo2; ?> disabled=""><?php echo $grupo2; ?></td>
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
        editable: [[1, 'ano'], [2, 'division'],[3, 'grupo1'], [4, 'grupo2']]
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
});
    </script>
</html>