<?php
// Recibimos el parámetro id por medio de $_GET
$id = $_GET['idPacientes'];

// Establecemos la conexión a la base de datos
$conn = mysqli_connect("79.146.193.17","admin","admin","RemindMe");

// Ejecutamos la consulta para eliminar el registro con el id especificado
$result = mysqli_query($conn, "DELETE FROM Pacientes WHERE idPacientes = $id");

// Cerramos la conexión a la base de datos
mysqli_close($conn);

// Redirigimos al usuario a la página principal
header('Location: inicio.php');

?>