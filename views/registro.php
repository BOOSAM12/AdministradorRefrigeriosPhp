<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de inventario</title>
    <link rel="stylesheet" href="../source/css/registro.css">
    <link rel="shortcut icon" href="../source/img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>
    <header>
        <h1 class="nombreEmpresa "><a href="../index.php">EduSnacks</a></h1>
        <div class="barra">
            <div class="linea"></div>
            <div class="linea"></div>
            <div class="linea"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li>
                    <a class="animate__animated animate__fadeInDown btn-nav" href="registro.php">
                        Registrate
                    </a>
                </li>
                <li>
                    <a class="animate__animated animate__fadeInDown btn-nav" href="inicioSesion.php">
                        Inicia Sesión
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <form class="form animate__animated animate__fadeInDown" action="../controllers/UserController.php" method="post" onsubmit="validarFormulario(event)">
            <p class="title">Crea tú cuenta</p>
                <div class="flex">
                <label>
                    <input class="input" type="text" placeholder="" required name="nombre" id="nombre">
                    <span>Nombre</span>
                </label>
        
                <label>
                    <input class="input" type="text" placeholder="" required name="apellidos" id="apellidos">
                    <span>Apellidos</span>
                </label>
            </div>  
                    
            <label>
                <input class="input" type="email" placeholder="" required name="email" id="email">
                <span>Email</span>
            </label> 
                
            <label>
                <input class="input" type="password" placeholder="" required name="contrasena" id="contrasena">
                <span>Contraseña</span>
            </label>
            <input type="submit" class="submit" value="Registrar cuenta" name="enviarRegistro"></input>
            <p class="signin">Ya tienes una cuenta? <a href="inicioSesion.php">Inicia sesión</a> </p>
        </form>
    
    </main>
</body>
<script src="../source/js/nav.js"></script>
<script src="../source/js/validacionRegistro.js"></script>
</html>