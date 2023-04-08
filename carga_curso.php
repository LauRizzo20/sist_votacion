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
<script src="js/jquery.min.js"></script>
<script src="js/app.js"></script>