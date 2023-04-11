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
    <link href="css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/w3.css">
    <title>Bienvenido</title>
</head>

<body onload="login();">

    <div class="w3-sidebar w3-bar-block containerA" style="width: 15%;" id="mySidebar">
        <div role="group" aria-label="Basic example" style="margin-top: 25%;">
            <div onclick="registro()" class="w3-bar-item w3-button">Registro</div>
            <div onclick="login()" class="w3-bar-item w3-button">Login</div>
            <div onclick="postul()" class="w3-bar-item w3-button">Postularse</div>
            <div onclick="desvinc()" class="w3-bar-item w3-button">Desvincularse</div>
            <div onclick="votar()" class="w3-bar-item w3-button">Votar</div>
        </div>
    </div>

    <nav class="navbar navbar-expand-sm navbar-light navbarA">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
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
        function registro() {
            $("#tabla1").load("register.php");
        }

        function login() {
            $("#tabla1").load("login.php");
        }

        function postul() {
            $("#tabla1").load("postul.php");
        }

        function desvinc() {
            $("#tabla1").load("desvinc.php");
        }

        function votar() {
            $("#tabla1").load("votar.php");
        }
    </script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="jquery.tabledit.js"></script>



</html>