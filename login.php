<div class="container">
        <div class="form-group p-2">
            <label for="dni">DNI</label>
            <input type="text" class="form-control" id="dni" placeholder="DNI" autocomplete="off" name="dni" required>
            <div class="invalid-feedback">
                Ingrese su DNI.
            </div>
        </div>
        <div class="form-group p-2">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" autocomplete="off" name="password" required>
            <div class="invalid-feedback">
                Ingrese su contraseña.
            </div>
        </div>
        <button type="submit" class="btn btn-primary" id="login">Login</button>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="login.js"></script>