<?php
include("conn.php");
//include ("session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/w3.css">
    <title>Administracion</title>
</head>

<body onload="cursos();">


    <div class="w3-sidebar w3-bar-block containerA" style="width: 15%;" id="mySidebar">

        <div role="group" aria-label="Basic example" style="margin-top: 25%;">
            <div onclick="agregar()" class="w3-bar-item w3-button">Agregar curso</div>
            <div onclick="cursos()" class="w3-bar-item w3-button">Lista de cursos</div>
            <div onclick="alumnos()" class="w3-bar-item w3-button">Lista de alumnos</div>
            <div onclick="postulados()" class="w3-bar-item w3-button">Lista de postulados</div>
            <div onclick="datos()" class="w3-bar-item w3-button">Recuento de votos</div>
            <br>
            <br>
            <div onclick="fases()" class="w3-bar-item w3-button">Cambio de fases</div>


        </div>
    </div>

    <nav class="navbar navbar-expand-sm navbar-light navbarA">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul style="margin-left: 90%;" class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <button type="button" class="btn btn-outline-light mr-md-3 mb-2 mb-md-0">Cerrar sesion</button>
                </li>
            </ul>
        </div>
    </nav>

    <br>
    <div style="margin-left:20%">
        <div id="tabla1">

        </div>
    </div>

    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="" style="
        position: fixed;
        bottom: 0; 
        margin-left:15%;
        width:100%;">
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                <h6>Sistema creado por los alumnos de 7mo C de la E.E.S.T N°1</h6>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
    <!-- End of .container -->

    <script>
        function cursos() {
            $("#tabla1").load("lista_cursos.php");
        }

        function alumnos() {
            $("#tabla1").load("lista_alumnos.php");
        }

        function postulados() {
            $("#tabla1").load("lista_postul.php");
        }

        function datos() {
            $("#tabla1").load("datos.php");
        }

        function fases() {
            $("#tabla1").load("fases.php");
        }

        function agregar() {
            $("#tabla1").load("carga_curso.php");
        }
    </script>

</body>
<script src="js/jquery.min.js"></script>
<script src="jquery.tabledit.js"></script>



<script>
    $('#tab').Tabledit({
        url: 'example.php',
        columns: {
            identifier: [0, 'id'],
            editable: [
                [1, 'nombre'],
                [2, 'email'],
                [3, 'contrasena'],
                [4, 'asignacion'],
                [5, 'roll']
            ]
        },
        onDraw: function() {
            console.log('onDraw()');

        },
        onSuccess: function(data, textStatus, jqXHR) {
            console.log('onSuccess(data, textStatus, jqXHR)');
            console.log(data);
            console.log(textStatus);
            console.log(jqXHR);

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