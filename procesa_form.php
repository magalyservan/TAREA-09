<?php 

//echo "<pre>";
//print_r($_POST); //clave es apellido valor es servan del atributo name nomb re dl input placeholder. todoo los campos que lo guardamos debe ser name
//echo "</pre>";

// 1.  
$apellidos = $_POST ["apellidos"];
$nombres = $_POST ["nombres"];
$dni = $_POST ["dni"];
$telefono = $_POST ["telefono"];
$correo = $_POST ["correo"];

//2. validacion

//3. insertar en bd
require_once "Conexion.php";

$objConexion = new Conexion();
$con = $objConexion->getConexion();

$sql ="INSERT INTO persona (nombres,apellidos,dni,telefono,correo) VALUES ('$nombres', '$apellidos', '$dni','$telefono','$correo')";
if($con->query(($sql))===TRUE){
    $ultimo_id=$con->insert_id;
    header("Location: index.php?succes=true");
   echo "Registrado exitosamente. ID NUEVO = ".$ultimo_id."<br>" ;
}else{
    echo "Location: index.php?succes=false";
}

//exit(0);