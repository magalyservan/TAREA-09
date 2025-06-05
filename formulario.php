<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Datos de persona</h1>
    <form action="procesa_form.php" method="post">
     <input type="text" name ="apellidos" placeholder = "Apellidos"><br>
     <input type="text" name ="nombres" placeholder = "Apellidos"><br>
     <input type="text" name ="dni" placeholder = "DNI"><br>
    <input type="text" name ="telefono" placeholder = "Telefono"><br>
     <input type="text" name ="correo" placeholder = "Correo"><br>

     <input type="submit" value ="Guardar">
     <input type="reset" value ="Restablecer">
    </form>
</body>
</html>