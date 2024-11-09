<?php
include_once 'conexion.php';
class Querys{
    private $Conexion;
    public function __construct(){
        $mysql = new Conexion();
        $this->Conexion = $mysql->getConexion();
    }

    public function registrarUsuario($nombre, $apellidos, $email, $contrasena){
        try{
            $sql = "INSERT INTO usuario (nombre, apellido, correo, contrasena) VALUES (?, ?, ?, ?)";
            $stmt = $this->Conexion->prepare($sql);
            $stmt->bind_param('ssss', $nombre, $apellidos, $email, $contrasena);
            $stmt->execute();
            return $stmt->execute();                                    
        }catch(Exception $e){
            echo "Error al registrar al usuario: ". $e->getMessage();   
        }
    }

    public function login($email, $contrasena){
        try{
            $sql = "SELECT * FROM usuario WHERE correo = ? AND contrasena =?";
            $stmt = $this->Conexion->prepare($sql);
            $stmt->bind_param("ss", $email, $contrasena);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                return true;
            }else{
                return false;
            }
        } catch (Exception $e){
            echo "Error al realizar la consulta";
        }

    }

    public function emailExists($email) {
        $query = "SELECT COUNT(*) FROM usuario WHERE correo = ?";
        $stmt = $this->Conexion->prepare($query);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        return $count > 0; 
    }   


}
?>