  <div class="container">

        <div class="form-group p-2">
        <label for="dni">DNI</label>
        <input type="text" class="form-control" id="dni" placeholder="DNI" autocomplete="on" name="dni" required>
        <div class="invalid-feedback">
            Ingrese su DNI.
        </div>
        </div>
        <div class="form-group p-2">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" placeholder="Nombre" autocomplete="on" name="nombre" required>
        <div class="invalid-feedback">
            Ingrese su nombre.
        </div>
        </div>
        <div class="form-group p-2">
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" id="apellido" placeholder="Apellido" autocomplete="on" name="apellido" required>
        <div class="invalid-feedback">
            Ingrese su apellido.
        </div>
        </div>
        <div class="form-group p-2">
        <label for="curso">Curso</label>
        <select class="form-control" id="curso" name="curso">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        </div>
        <div class="form-group p-2">
        <label for="grupo">Grupo</label>
        <select class="form-control" id="grupo" name="grupo">
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
        </div>
        <div class="form-check p-2">
        <input type="checkbox" class="form-check-input" id="postulante" value="1" name="postulante">
        <label class="form-check-label" for="postulante">Deseo postularme como delegado.</label>
        </div>
        <div class="form-group p-2">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" autocomplete="on" name="password" required>
        <div class="invalid-feedback">
            Ingrese su contraseña.
        </div>
        </div>
        <div class="form-group p-2">
        <label for="password_confirm">Confirm Password</label>
        <input type="password" class="form-control" id="password_confirm" placeholder="Confirm Password" autocomplete="on" required>
        <div class="invalid-feedback">
            Confirme su contraseña.
        </div>
        </div>
        <button type="submit" class="btn btn-primary" id="register">Submit</button>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="register.js"></script>