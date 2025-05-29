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






?>
