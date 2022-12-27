
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
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
        <script src='js/main.js'></script>



</head>

<body>
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
  <input type="submit" value="Enviar">
</form> 

</body>

</html>