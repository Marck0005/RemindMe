<?php
	include('db.php');

    
	$correo=$_POST['Correo-in'];
	$contraseña=password_hash($_POST['Contraseña-in'], PASSWORD_DEFAULT);
	session_start();
    
    if(isset($_SESSION['Correo'])){
        header("Location: prueba.php");
    }
	$conexion=mysqli_connect("79.146.203.50","admin","admin","RemindMe");
    
    
    $consulta="SELECT * FROM Usuarios WHERE Correo='$correo'";
    
    $resultado=mysqli_query($conexion,$consulta);
    
    if($resultado->num_rows > 0){
        if($row = $resultado->fetch_assoc()){
            if(password_verify($_POST['Contraseña-in'], $row['Contraseña'])){
                $_SESSION['Correo'] = $row['Correo'];
                $_SESSION['Rol'] = $row['Rol'];
                $_SESSION['Nombre'] = $row['Nombre'];
                $_SESSION['Apellidos'] = $row['Apellidos'];
                $_SESSION['ID'] = $row['ID'];
                header("Location: prueba.php");
            }else{
                echo "Contraseña incorrecta";
            }
        }
	}
    
	mysqli_free_result($resultado);
	mysqli_close($conexion);
 
?>

<!DOCTYPE html>
<html class="fondoForms">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Remind Me</title>
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
                <h1>Inicie Sesión en RemindMe</h1>
                <h1>RM (Logo)</h1>

            </div>
            <div class="col-1"></div>
            <div class="col-4">
                <form class="row g-3 needs-validation" action="login.php" method="POST" novalidate >

 
                    <div class="row g-3">
                        <h3>Correo Electrónico</h3>
                        <div class="col-12">

                            <div class="form-floating">
                                <input type="email" class="form-control" id="Correo" placeholder="Correo" name="Correo-in">
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
                                <input name="Contraseña-in" type="password" class="form-control" id="Contraseña" placeholder="Constraseña" >
                                <label for="Contraseña">Contraseña</label>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Introduzca una contraseña valida</div>
                            </div>
                        </div>
                    </div>




                    <div class="row g-3">
                        <div class="col botonLogin">
                            <button class="btn btn-primary btn-lg" type="submit">Iniciar Sesión</button>
                        </div>
                    </div>
                    <p class="alt-option">¿No está registrado? <a href="index.php">Regístrese aquí</a></p>

                </form>
            </div>
            <div class="col-1"></div>

        </div>
    </div>


</body>

</html>