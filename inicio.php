<!DOCTYPE html>
<html>

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
                <a class="navbar-brand" href="#">
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
                        <a class="nav-link active" aria-current="page" href="#">Pacientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Perfil</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-12" align=center>
            <!-- botón de añadir paciente -->
            <a href='anadir.php' >
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Añadir Paciente
            </button>
            </a>
        </div>
        <?php
            $conn = mysqli_connect("79.146.193.17","admin","admin","RemindMe");

            // Consulta SQL para obtener los datos de la tabla pacientes
            $sql = "SELECT * FROM Pacientes";
            $result = mysqli_query($conn, $sql);

            // Generamos el HTML
            while($row = mysqli_fetch_array($result)) {
            echo '<div class="col-sm-6 col-md-4">';
            echo '<div class="thumbnail row">';
            echo '<div class="col-6 alinearCentro">';
            echo '<img src="/media/unknown1.png" height="120" width="120" alt="imagen paciente">';
            echo '</div>';
            echo '<div class="infoPaciente col-6">';
            echo '<h4>'.$row['nombre'].'</h4>';
            echo '<p>Habitacion '.$row['habitacion'].'<br>'.$row['edad'].' Años<br>'.$row['medicamentos'].'</p>';
            echo '<p>';
            echo '<a href="#" class="btn btn-primary" role="button">Perfil</a>';
            echo '<a href="#" class="btn btn-primary" role="button" id="Eliminar" data-id="'.$row['idPacientes'].'">Eliminar</a>';            
            echo '</div>';
            echo '</div>';
            echo '</div>';
            }// Cerramos la conexión a la base de datos
            mysqli_close($conn);
        ?>
    </div>
</body>

</html>