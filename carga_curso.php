<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

    <title>carga de cursos</title>
</head>

<body>
    <a href="dashboard.php"><button type="button" class="btn btn-secondary">Volver</button></a>
    <br>
    <center>
        <h2>Carga de cursos</h2>
    </center>
    <br>

    <form>
        <div class="container">
            <div class="input-group input-group-sm mb-3">
                <input id="ano" placeholder="Año" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
                <input id="curso" placeholder="Curso" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <input type="checkbox" name="chec" type="checkbox" id="chec" onChange="comprobar(this);"/><label>(En caso de que hayan grupos)</label>
            <div class="input-group input-group-sm mb-3">
                <input placeholder="Grupo 1" name="grupo1" id="grupo1" style="display:none" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
                <input placeholder="Grupo 2" name="grupo2" id="grupo2" style="display:none" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
                <button name="conf" id="conf" type="button" class="btn btn-primary">ingresar</button>
            </div>
        </div>
    </form>

    <script>
           function comprobar(obj) {   
                if (obj.checked){    
                document.getElementById('grupo1').style.display = "";
                document.getElementById('grupo2').style.display = "";
                } else {  
                document.getElementById('grupo1').style.display = "none";
                document.getElementById('grupo2').style.display = "none";
                }     
            }
    </script>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/app.js"></script>
</html>