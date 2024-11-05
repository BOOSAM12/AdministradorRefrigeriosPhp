<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de inventario</title>
    <link rel="stylesheet" href="../source/css/inicioSesion.css">
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
                        Registrarse
                    </a>
                </li>
                <li>
                    <a class="animate__animated animate__fadeInDown btn-nav" href="./inicioSesion.html">
                        Login
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="login-container animate__animated animate__fadeInDown">
            <form class="login-form" action="../controllers/UserController.php" method="post">
                <p class="heading">Inicia Sesión</p>
                <p class="paragraph">Ingrese los datos de su cuenta</p>
                <div class="input-group">
                    <input required="" placeholder="Correo" id="username" type="text" name="email"/>
                </div>
                <div class="input-group">
                    <input required="" placeholder="Contraseña"  id="password" type="password" name="contrasena"/>
                </div>
                <input class="btn-iniciar" type="submit" value="Iniciar Sesión" name="enviarSesion">
                <div class="bottom-text">
                    <p>No tienes cuenta? <a href="registro.php">Crea una</a></p>
                    <p><a href="#">Haz olvidado tu contraseña?</a></p>
                </div>
            </form>
        </div>

    </main>
</body>
<script src="../source/js/nav.js"></script>
</html>