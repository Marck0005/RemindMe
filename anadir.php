<!DOCTYPE html>
<html class="fondoForms">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Remind Me</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel='stylesheet' type='text/css' media='screen' href='css/start.css'>
    <script src='js/main.js'></script>



</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary navbar-dark">
        <div class="container-fluid">
            <div class="container-fluid divLogo">
                <a class="navbar-brand" href="inicio.php">
                    <img src="media/rmlogo.png" alt="Logo" class="logo" width="40" height="40" class="d-inline-block">
                    Remind Me
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="inicio.php">Pacientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="perfil.php">Perfil</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <div class=row>
        <div class=col-12 align=center>
            <h3>Introduzca los detalles del nuevo residente:</h3>
            <div class="formularioPaciente">
                <form id="formulario" method="POST" action="procesar.php">
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" id="nombre" name="nombre"><br>
                    <label for="apellidos">Apellidos:</label><br>
                    <input type="text" id="apellidos" name="apellidos"><br>
                    <label for="numero_habitacion">Número de habitación:</label><br>
                    <input type="text" id="numero_habitacion" name="numero_habitacion"><br>
                    <label for="medicamentos">Medicamentos:</label><br>
                    <input type="text" id="medicamentos" name="medicamentos"><br>
                    <label for="edad">Edad:</label><br>
                    <input type="number" id="edad" name="edad"><br><br>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-light">Enviar</button>
                    </div>

                </form>
            </div>


        </div>
    </div>

</body>

</html>