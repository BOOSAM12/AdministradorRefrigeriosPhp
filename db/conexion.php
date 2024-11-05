<?php 
class Conexion{
    private $Host = 'localhost';
    private $User = 'root';
    private $Password = '';
    private $Database = 'administrador_refrigerios';
    private $Puerto = '3306';
    private $Conexion;

    public function __construct(){
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        try {
            $this->Conexion = new mysqli($this->Host, $this->User, $this->Password, $this->Database, $this->Puerto);
            if ($this->Conexion->connect_error) {
                throw new Exception('Error de conexión: '. $this->Conexion->connect_error);
            }
        } catch (Exception $e) {
            echo "Error de conexión: ". $e->getMessage();
        }
    }
    public function getConexion(){
        return $this->Conexion;
    }

    public function closeConexion(){
        mysqli_close($this->Conexion);
    }
}
?>