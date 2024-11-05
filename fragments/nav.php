<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../source/css/nav.css">
</head>
<body>
<header>
        <h1 class="nombreEmpresa "><a href="principal.php">EduSnacks</a></h1>
        <div class="barra">
            <div class="linea"></div>
            <div class="linea"></div>
            <div class="linea"></div>
        </div>
        <nav class="nav-bar">

            <ul>
                <li>
                    <a class="animate__animated animate__fadeInDown btn-nav" href="principal.php">
                        Inicio
                    </a>
                </li>

                <li>
                    <a class="animate__animated animate__fadeInDown btn-nav" href="registroRefrigerios.php">
                        Registro
                    </a>
                </li>

                <li>
                    <a class="animate__animated animate__fadeInDown btn-nav" href="consulta.php">
                        Consulta
                    </a>
                </li>

                <li>
                    <a class="animate__animated animate__fadeInDown btn-nav" href="productos.php">
                        Productos
                    </a>
                </li>

                <li>
                    <a class="animate__animated animate__fadeInDown btn-nav" href="administracion.php">
                        Gestión
                    </a>
                </li>
                
            </ul>
            <form action="../controllers/UserController.php" method="post">
                <button type="submit" name="cerrarSesion" style="background: none; border: none; padding: 0;">
                    <img src="../source/img/right-from-bracket-solid.svg" alt="Cerrar sesión" class="animate__animated animate__fadeInDown">
                </button>
            </form>

        </nav>
    </header>

</body>
</html>