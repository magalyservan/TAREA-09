<?php
class Conexion{
    private $servename = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "ejemplo-web2";
    private $conexion;

    public function __construct()
    {
        $this->conexion =new mysqli($this->servename,$this->username,$this->password,$this->db_name);
         if($this->conexion->connect_error){
        die("Conexión fallo: " .$this->conexion->connect_error);
    }
    }
   
    public function getConexion(){
        return $this->conexion;
    }
    public function __destruct()
    {
        $this->conexion->close();
        echo "Se destruyo la conexion";
    }


}
?>

<?php
