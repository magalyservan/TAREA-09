
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Personas</h1>

    <?php  
    if($_GET["succes"]=="true"){
        echo "<p><b> Se registró exitosamente a la persona </b></p>";
    }

    ?>
    <a href="formulario.php"></a>
    <table border ="1" >
       <thead>
        <tr>
            <th> Apellidos </th>
            <th> Nombres </th>
            <th> Correo </th>
            
        </tr>
       </thead> 
       <tbody>
       <?php
require_once "Conexion.php";

$sql = "SELECT * FROM persona WHERE estado=1";
$con = new Conexion();

$objConexion = new Conexion();
$con = $objConexion->getConexion();
$resultado = $con->query($sql);

if($resultado->num_rows>0){
    while($fila =$resultado->fetch_assoc()){
        echo "<tr>";
        echo "<th>". $fila['id']."</th>" ;
        echo "<th>". $fila['nombres']."</th>" ;
        echo "<th>" .$fila['correo']."</th>" ;
        echo "<hr>";
        echo "</tr>";
    }

}else{
    echo "<tr> <td> colspan='3' > 0 resultados<td> </tr>" ;
}
?>

       </tbody>
    </table>

</body>
</html>
