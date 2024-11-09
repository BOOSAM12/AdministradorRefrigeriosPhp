<?php 
include_once '../db/querys.php';

class User {
    private $Querys;
    public function __construct() {
        $this->Querys = new Querys();
    }

    public function registerUser() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['enviarRegistro'])) {
                try {
                    $Querys = new Querys();
                    $nombre = $_POST['nombre'];
                    $apellido = $_POST['apellidos'];
                    $email = $_POST['email'];
                    $contrasena = $_POST['contrasena'];

                    $validatePass = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\@\*\%\?\&\!\¡\-\_])[A-Za-z0-9\@\*\%\?\&\!\¡\-\_]{8,}$/';
                    $validateEmail = '/^[A-Za-z0-9._+%-]+@[A-Za-z0-9-.]+\.[A-Za-z]{2,}$/';

                    if (preg_match($validateEmail, $email) && preg_match($validatePass, $contrasena)) {
                        if ($Querys->emailExists($email)) {
                            echo "<script>alert('El correo ingresado ya ha sido registrado anteriormente');</script>";
                            header('Location: ../views/registro.php');
                            exit();
                        } else {
                            
                            $Querys->registrarUsuario($nombre, $apellido, $email, $contrasena);
                            header('Location: ../views/inicioSesion.php');
                            exit();
                        }
        
                    } else {
                        include_once '../views/registro.php';
                    }

                } catch (Exception $e) {
                    echo "<script>alert('Error al registrar cuenta: ". $e->getMessage() ."');</script>";
                }
            }
        } else {
            echo "<script>alert('Ocurrió un error con el método de envío del formulario.');</script>";
        }
    }


    public function loginUser() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            session_start(); 
            if (isset($_POST['email']) && isset($_POST['contrasena'])) {
                $email = $_POST['email'];
                $pass = $_POST['contrasena'];
                $queries = new Querys();
                
                if ($queries->login($email, $pass)) {
                    $_SESSION['logged'] = true; 
                    header('location: ../views/principal.php'); 
                    exit();
                } else {
                    echo "<script>alert('Error al iniciar sesión');</script>";
                    include_once '../views/inicioSesion.php';
                }
            } else {
                echo "<script>alert('Por favor completa todos los campos');</script>";
            }
        }else{
            echo "<script>alert('Ocurrió un error con el método de envío del formulario.');</script>";
        }
        
    }

    public function cerrarSesion(){
        if(isset($_POST['cerrarSesion'])){
            session_start();
            session_destroy();
            header('Location: ../index.php');
            exit();
        }
        
        
    }
}


// Llamada al método
$user = new User();
if (isset($_POST['enviarRegistro'])) {
    $user->registerUser();
}elseif (isset($_POST['enviarSesion'])) {
    $user->loginUser();
}elseif (isset($_POST['cerrarSesion'])) {
    $user->cerrarSesion();
}

?>
