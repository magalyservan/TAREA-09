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
$sql ="INSERT INTO persona (nombres,apellidos,dni,telefono,correo) VALUES ('juan', 'castillo', '71484888','976543678','jcastillo@gmail.com')";
if($con->query(($sql))===TRUE){
    $ultimo_id=$con->insert_id;
   echo "Registrado exitosamente. ID NUEVO = ".$ultimo_id."<br>" ;
}else{
    echo "No se registró";
}
///////////////////hacer pruebas con update y delete

$id = 1; 
$nuevoNombre = "Maria";

$sql = "UPDATE persona SET nombres = ? WHERE id = ?";
$Actualizado = $con->prepare($sql);
$Actualizado->bind_param("si", $nuevoNombre, $id);

if ($Actualizado->execute()) {
    echo "Actualizado exitosamente.<br>";
} else {
    echo "No se editó: ";
}

$idEliminar = 3;  


$sql = "DELETE FROM persona WHERE id = ?";
$eliminado = $con->prepare($sql);

if (!$eliminado) {
    die("Error al preparar la consulta: " . $con->error);
}

$eliminado->bind_param("i", $idEliminar);

if ($eliminado->execute()) {
    if ($eliminado->affected_rows > 0) {
        echo "Eliminado exitosamente.";
  
} else {
    echo "No se pudo eliminar";
}
}





?>
