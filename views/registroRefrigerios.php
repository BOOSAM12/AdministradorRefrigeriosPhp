<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de inventario</title>
    <link rel="stylesheet" href="../source/css/nav.css">
    <link rel="stylesheet" href="../source/css/registroRefrigerios.css">
    <link rel="shortcut icon" href="../source/img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
<?php include_once '../fragments/nav.php';?>

    <main>
        <section class="cont-formulario">
            <section class="formulario">
                <div class="cont-filtro">
                    <img src="../source/img/lupa.png" alt="Icono de buscar">
                    <label for="filtrar">
                        <input type="text" name="filtrar" placeholder="Buscar registro">
                    </label>
                </div>
                <div class="cont-btns">
                    <button class="button" id="abrirFormulario">
                        <p>Registrar entrega</p>
                    </button>
                </div>

            </section>

            <table>
                <thead>
                    <th>Hora llegada</th>
                    <th>Hora distribución</th>
                    <th>Cantidad</th>
                    <th>Grado</th>
                    <th>Codigo</th>
                </thead>
                <tbody>
                    <tr>
                        <td>12:00</td>
                        <td>12:30</td>
                        <td>10</td>
                        <td>A</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>12:00</td>
                        <td>12:30</td>
                        <td>10</td>
                        <td>A</td>
                        <td>12</td>

                    </tr>
                    <tr>
                        <td>12:00</td>
                        <td>12:30</td>
                        <td>10</td>
                        <td>A</td>
                        <td>12</td>

                    </tr>
                    <tr>
                        <td>12:00</td>
                        <td>12:30</td>
                        <td>10</td>
                        <td>A</td>
                        <td>12</td>

                    </tr>
                    <tr>
                        <td>12:00</td>
                        <td>12:30</td>
                        <td>10</td>
                        <td>A</td>
                        <td>12</td>

                    </tr>

                </tbody>
            </table>
        </section>
        <section class="cont-form" id="contForm">
            <form action="" class="">
                <h2>Registra una nueva entrega</h2>
                <div class="cont-horas">
                    <div class="cont-hora">
                        <label for="horaLlegada">Hora de llegada</label>
                        <input type="time" name="" id="horaLlegada">
                    </div>
                    <div class="cont-hora">
                        <label for="horaLlegada">Hora de llegada</label>
                        <input type="time" name="" id="horaLlegada">
                    </div>
                </div>
                <div class="cont-info">
                    <div class="cont-cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="text" id="cantidad">
                    </div>
                  
                    <div class="cont-producto">
                        <label for="producto">Tipo de producto</label>
                        <select name="" id="producto">
                            <option value="">Lacteo</option>
                            <option value="">Grano</option>
                            <option value="">Culinarios</option>
                            <option value="">Verduras</option>
                            <option value="">Frutas</option>
                        </select>
                    </div>
                </div>
                <div class="cont-btn">
                    <input type="submit" value="Guardar" class="btn-guardar">
                    <input type="submit" value="Salir" class="btn-salir" id="btnSalir">
                </div>
            </form>
        </section>
    </main>
</body>
<script src="../source/js/nav.js"></script>
<script src="../source/js/formulario.js"></script>
</html>