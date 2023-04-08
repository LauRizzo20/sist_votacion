<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/w3.css">
    <title>Bienvenido</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-light navbarA">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>

    <div class="w3-sidebar w3-bar-block containerA" style="width: 15%;" id="mySidebar">
    <div role="group" aria-label="Basic example" style="margin-top: 25%;">
                <div onclick="registro()" class="w3-bar-item w3-button">Registro</div>    
                <div onclick="login()" class="w3-bar-item w3-button">Login</div>
                <div onclick="postul()" class="w3-bar-item w3-button">Postularse</div>
                <div onclick="desvinc()" class="w3-bar-item w3-button">Desvincularse</div>
                <div onclick="votar()" class="w3-bar-item w3-button">Votar</div>
            </div>
    </div>


    <br>
    <div style="margin-left:20%">
        <div id="tabla1">
        </div>
    </div>
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