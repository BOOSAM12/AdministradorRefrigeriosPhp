<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de inventario</title>
    <link rel="stylesheet" href="../source/css/nav.css">
    <link rel="stylesheet" href="../source/css/consulta.css">
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
                        <input type="text" name="filtrar" placeholder="Buscar productos">
                    </label>
                </div>
                <div class="cont-btns">
                    <div class="filtro-producto">
                        <label for="producto">Categoria</label>
                        <select name="" id="producto">
                            <option value=""></option>
                            <option value="">Lacteo</option>
                            <option value="">Grano</option>
                            <option value="">Culinarios</option>
                            <option value="">Verduras</option>
                            <option value="">Frutas</option>
                        </select>
                    </div>
                    <div class="filtro-producto">
                        <label for="producto">Grado</label>
                        <select name="" id="producto">
                            <option value=""></option>
                            <option value="">A</option>
                            <option value="">B</option>
                            <option value="">C</option>
                            <option value="">E</option>
                            <option value="">F</option>
                        </select>
                    </div>
                </div>

            </section>

            <table>
                <thead>
                    <th>Hora llegada</th>
                    <th>Hora distribución</th>
                    <th>Categoria</th>
                    <th>Cantidad</th>
                    <th>Grado</th>
                </thead>
                <tbody>
                    <tr>
                        <td>12:00</td>
                        <td>12:30</td>
                        <td>Lacteo</td>
                        <td>10</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>12:00</td>
                        <td>12:30</td>
                        <td>Grano</td>
                        <td>10</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>12:00</td>
                        <td>12:30</td>
                        <td>Culinarios</td>
                        <td>10</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>12:00</td>
                        <td>12:30</td>
                        <td>Verduras</td>
                        <td>10</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>12:00</td>
                        <td>12:30</td>
                        <td>Frutas</td>
                        <td>10</td>
                        <td>A</td>
                    </tr>

                </tbody>
            </table>
        </section>
    </main>
</body>
<script src="../source/js/nav.js"></script>

</html>