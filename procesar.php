<?php
  // Recibir los datos del formulario
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $numero_habitacion = $_POST['numero_habitacion'];
  $medicamentos = $_POST['medicamentos'];
  $edad = $_POST['edad'];

  // Establecer conexión con el servidor de MySQL
  $conn = mysqli_connect("79.146.193.17","admin","admin","RemindMe");

  // Verificar conexión
  if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
  }

  // Crear consulta INSERT
  $sql = "INSERT INTO Pacientes (nombre, apellidos, habitacion, medicamentos, edad)
          VALUES ('$nombre', '$apellidos', '$numero_habitacion', '$medicamentos', '$edad')";

  // Ejecutar consulta
  if (mysqli_query($conn, $sql)) {
    // Redirigir a la página inicio.php
    header('Location: inicio.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Cerrar conexión
  mysqli_close($conn);
?>
