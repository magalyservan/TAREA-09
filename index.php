<?php
require_once "Conexion.php";

$sql = "SELECT * FROM persona WHERE estado=1";
$con = new Conexion();

$objConexion = new Conexion();
$con = $objConexion->getConexion();
$resultado = $con->query($sql);

if($resultado->num_rows>0){
    while($fila =$resultado->fetch_assoc()){
        echo "ID:". $fila['id']."<br>" ;
        echo "Nombre compelto:". $fila['nombres']."<br>" ;
        echo "DNI:". $fila['dni']."<br>" ;
        echo "Telefono:". $fila['telefono']. "<br>" ;
        echo "Correo:" .$fila['correo']."<br>" ;
        echo "Estado:". ($fila['estado']==1?'Activo':'Inactivo')."<br>" ;
        echo "Fecha Creacion". $fila['FechaCreacion']."<br>";
        echo "<hr>";
    }

}else{
    echo "0 resultados";
}
////////..................................----------------//////////7///
$sql ="INSERT INTO persona (nombres,apelliods,dni,telefono,correo) VALUES ('juan', 'castillo', '71484888','976543678','jcastillo@gmail.com)";
if($con->query(($sql))===TRUE){
    $ultimo_id=$con->insert_id;
   echo "Registrado exitosamente. ID NUEVO = ".$ultimo_id."<br>" ;
}else{
    echo "No se registró";
}
///////////////////hacer pruebas con update y delete

$id = 1;
$nuevo_nombre = "Maria";

$sql = "UPDATE usuarios SET nombre = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $nuevo_nombre, $id);

if ($stmt->execute()) {
    echo "Registro actualizado correctamente.";
} else {
    echo "Error al actualizar: " . $stmt->error;
}

$stmt->close();
$conn->close();


$sql = "DELETE persona  WHERE estado=1";
$con->query($sql);
?>