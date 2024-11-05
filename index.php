<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de inventario</title>
    <link rel="stylesheet" href="source/css/index.css">
    <link rel="shortcut icon" href="source/img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <header>
        <h1 class="nombreEmpresa "><a href="index.php">EduSnacks</a></h1>
        <div class="barra">
            <div class="linea"></div>
            <div class="linea"></div>
            <div class="linea"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li>
                    <a class="animate__animated animate__fadeInDown btn-nav" href="views/registro.php">
                        Registrarse
                    </a>
                </li>

                <li>
                    <a class="animate__animated animate__fadeInDown btn-nav" href="views/inicioSesion.php">
                        Login
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="banner">
            <div class="cont-frase">
                <h2 class="">Gestiona tus refrigerios de manera fácil y eficiente con nuestra herramienta</h2>
                <h3 class="frase-alt">Gestiona tus refrigerios de manera fácil y eficiente</h3>
                <a class="btn-accion animate__animated animate__fadeInUp" href="./inicioSesion.html">
                    <span>Ingresa Ahora</span>
                </a>
            </div>
            <div class="slider">
                <ul>
                    <li><img src="source/img/slider1.svg" alt=""></li>
                    <li><img src="source/img/slider2.svg" alt=""></li>
                    <li><img src="source/img/slider3.svg" alt=""></li>
                    <li><img src="source/img/slider4.svg" alt=""></li>
                </ul>
            </div>
        </section>
        <section class="cont-acordeon">
            <div class="cont-acordeones">
                <div class="acordeon">
                    <input type="radio" class="icono" value="" name="acordeon" id="acordeon1">
                    <label for="acordeon1">Nuestros servicios</label>
                    <div class="cont-parrafo">
                        <p>En <span>EDUSNACKS</span>, ofrecemos un software integral para la gestión de
                            refrigerios en
                            instituciones educativas, Nuestro sistema permite registrar y monitorear la
                            llegada de los
                            refrigerios, gestionar
                            el inventario, distribuir los alimentos eficientemente a los distintos grados,
                            y generar reportes
                            detallados.</p>
                    </div>
                </div>
                <div class="acordeon">
                    <input type="radio" name="acordeon" id="acordeon2" class="icono">
                    <label for="acordeon2">Quienes somos?</label>
                    <div class="cont-parrafo">
                        <p>En <span>EDUSNACKS</span>, somos una empresa dedicada a ofrecer soluciones
                            tecnológicas innovadoras
                            para la administración de refrigerios en instituciones educativas. Nuestro
                            objetivo es facilitar la
                            gestión eficiente y efectiva de la recepción, distribución y consumo de
                            refrigerios, asegurando que
                            cada estudiante reciba su alimento a tiempo y en las mejores condiciones.
                        </p>
                    </div>
                </div>
            </div>

            <div class="con-acordeones">
                <div class="acordeon">
                    <input type="radio" name="acordeon" id="acordeon3" class="icono">
                    <label for="acordeon3">Nuestra Misión</label>

                    <div class="cont-parrafo">
                        <p>Nuestra misión es proporcionar una herramienta tecnológica integral que optimice
                            el proceso de gestión de refrigerios en las instituciones educativas. Nos enfocamos
                            en mejorar la eficiencia administrativa y en garantizar que cada estudiante reciba
                            su refrigerio de manera puntual y adecuada.
                        </p>
                    </div>
                </div>

                <div class="acordeon ">
                    <input type="radio" name="acordeon" id="acordeon4" class="icono">
                    <label for="acordeon4">Nuestra visión</label>
                    <div class="cont-parrafo">
                        <p>Nuestra visión es ser líderes en el desarrollo de soluciones tecnológicas para
                            la gestión de
                            alimentos en el ámbito educativo, reconocidos por nuestra innovación, calidad y
                            compromiso con la
                            mejora continua. Aspiramos a expandir nuestro alcance, ayudando a más
                            instituciones a implementar
                            sistemas eficientes de administración de refrigerios y promoviendo prácticas
                            alimenticias
                            responsables.</p>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <section class="redes">
                <img src="source/img/facebook.png" alt="Logo de facebook"><a href=""></a>
                <img src="source/img/twitter.png" alt="Logo de twitter"><a href=""></a>
                <img src="source/img/instagram.png" alt="Logo de instagram"><a href=""></a>
                <img src="source/img/linkedin.png" alt="Logo de LinkeIn"><a href=""></a>
            </section>
            <section class="contactanos">
                <div class="info-contactanos1">
                    <h3>Contactanos</h3>
                    <p>
                        <span>EduSnacks</span>
                    </p>
                </div>
                <div class="info-contactanos">
                    <p>Telfono: <span>+57 300 300 3000</span></p>
                    <p>Correo: <span>EduSnack@gmail.com</span></p>
                </div>
            </section>
        </footer>
    </main>
</body>
<script src="source/js/acordeon.js"></script>
<script src="source/js/nav.js"></script>

</html>