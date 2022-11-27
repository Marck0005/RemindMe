<?php
$db_connection=mysqli_connect("79.146.203.50","admin","admin","RemindMe");

if(isset($_REQUEST['register'])){

        $correo=$_POST['correo-in'];
        $contraseña=password_hash($_POST['contraseña-in'], PASSWORD_DEFAULT);
        $nombre=$_POST['nombre-in'];
        $apellido=$_POST['apellidos-in'];
        $rol=$_POST['rol-in'];
        $query = "SELECT * FROM Usuarios WHERE Correo='$correo'";
        $result = mysqli_query($db_connection,$query);
        $num = mysqli_num_rows($result);
        if($num == 1 || $num >= 1){
            echo "Correo ya registrado";
        }else{
            $consulta="INSERT INTO Usuarios (Correo, Contraseña, Nombre, Apellidos, Rol) VALUES ('$correo', '$contraseña', '$nombre', '$apellido', '$rol')";
            header("Location: login.php");
        }

        $resultado=mysqli_query($db_connection,$consulta);

    }

mysqli_free_result($resultado);

mysqli_close($db_connection);
?>

<!DOCTYPE html>
<html class="fondoForms">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <script src='js/main.js'></script>
</head>

<body>
    <div class="center">
        <div class="formulario d-flex align-items-center justify-content-center">
            <div class="col-6">
                <h1>Regístrese en RemindMe</h1>
                <h1>RM (Logo)</h1>
            </div>
            <div class="col-6">
                <form class="row g-3 needs-validation" action="index.php" method="POST" novalidate>
                    <div class="row g-3">
                        <h3>Nombre y Apellidos</h3>
                        <div class="col-5">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="Nombre" placeholder="Nombre" name="nombre-in" required>
                                <label for="Nombre">Nombre</label>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Introduzca su Nombre</div>
                            </div>
                        </div>

                        <div class="col-7">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="Apellidos" placeholder="Apellidos" name="apellidos-in" required>
                                <label for="Apellidos">Apellidos</label>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Introduzca sus Apellidos</div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <h3>Correo Electrónico</h3>
                        <div class="col-12">

                            <div class="form-floating">
                                <input type="email" class="form-control" id="Correo" placeholder="Correo" name="correo-in" required>
                                <label for="Correo">Correo</label>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Introduzca su Correo</div>
                            </div>

                        </div>
                    </div>

                    <div class="row g-3">
                        <h3>Contraseña</h3>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="Contraseña" placeholder="Constraseña" name="contraseña-in" required>
                                <label for="Contraseña">Contraseña</label>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Introduzca una contraseña valida</div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="row g-3">
                        <h3>Rol</h3>
                        <div class="col">

                            <select class="form-select" id="rol" name="rol-in" required>
                            <option selected disabled value="">Seleccione un Rol...</option>
                            <option value="Cuidador">Cuidador</option>
                            <option value="Familiar">Familiar</option>
                            </select>

                            <div class="invalid-feedback">
                            Seleccione un rol para continuar.
                            </div>
                        </div>

                    </div>
                    
                    <div class="row g-3">
                        <div class="col-8 form-check aceptar">
                            <input class="form-check-input" type="checkbox" value="" id="Condiciones" required>
                            <label class="form-check-label" for="Condiciones">
                            Acepto los términos y condiciones.
                            </label>
                            <div id="invalidCheck3Feedback" class="invalid-feedback">
                                Debes aceptar para continuar.
                            </div>
                        </div>
                        <div class="col-4 botonRegistro">
                            <button class="btn btn-primary btn-lg" type="submit" name="register" onclick="validateForm()">Regístrate</button>
                        </div>
                    </div>
                    <p class="alt-option">¿Ya está registrado? <a href="login.php">Inicie sesión aquí</a></p>

                </form>
            </div>


        </div>
    </div>


</body>

</html>