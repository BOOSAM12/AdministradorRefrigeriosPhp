<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de inventario</title>
    <link rel="stylesheet" href="../source/css/nav.css">
    <link rel="stylesheet" href="../source/css/administracion.css">
    <link rel="shortcut icon" href="../source/img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
<?php include_once '../fragments/nav.php';?>
    <main>
        <section class="cont-acordeon">
            <div class="acordeon animate__animated animate__zoomIn">
                <input type="radio" class="icono" value="" name="acordeon" id="acordeon1">
                <label for="acordeon1">Gestión de usuarios</label>
                <div class="cont-parrafo">
                    <button class="btn-usuario" id="abrirFormulario">Agregar usuario</button>
                    <table>
                        <thead>
                            <th>Nombre de usuario</th>
                            <th>Identificación</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sergio</td>
                                <td>12578906</td>
                                <td>
                                    <img src="../source/img/ver.png" alt="Ver informacion de usuario">
                                    <img src="../source/img/borrar.png" alt="Eliminar usuario">
                                    <img src="../source/img/editar.png" alt="Editar usuario">
                                </td>
                            </tr>
                            <tr>
                                <td>Jhojan</td>
                                <td>12578906</td>
                                <td>
                                    <img src="../source/img/ver.png" alt="Ver informacion de usuario">
                                    <img src="../source/img/borrar.png" alt="Eliminar usuario">
                                    <img src="../source/img/editar.png" alt="Editar usuario">
                                </td>
                            </tr>
                            <tr>
                                <td>Jorman</td>
                                <td>12578906</td>
                                <td>
                                    <img src="../source/img/ver.png" alt="Ver informacion de usuario">
                                    <img src="../source/img/borrar.png" alt="Eliminar usuario">
                                    <img src="../source/img/editar.png" alt="Editar usuario">
                                </td>
                            </tr>
                            <tr>
                                <td>Angie</td>
                                <td>12578906</td>
                                <td>
                                    <img src="../source/img/ver.png" alt="Ver informacion de usuario">
                                    <img src="../source/img/borrar.png" alt="Eliminar usuario">
                                    <img src="../source/img/editar.png" alt="Editar usuario">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="acordeon animate__animated animate__zoomIn">
                <input type="radio" class="icono" value="" name="acordeon" id="acordeon2">
                <label for="acordeon2">Gestión de productos</label>
                <div class="cont-parrafo">
                    <button class="btn-usuario" id="abrirFormularioProducto">Agregar producto</button>
                    <table>
                        <thead>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Arroz</td>
                                <td>Cereal</td>
                                <td>
                                    <img src="../source/img/ver.png" alt="Ver informacion de usuario">
                                    <img src="../source/img/borrar.png" alt="Eliminar usuario">
                                    <img src="../source/img/editar.png" alt="Editar usuario">
                                </td>
                            </tr>
                            <tr>
                                <td>Queso</td>
                                <td>Lacteo</td>
                                <td>
                                    <img src="../source/img/ver.png" alt="Ver informacion de usuario">
                                    <img src="../source/img/borrar.png" alt="Eliminar usuario">
                                    <img src="../source/img/editar.png" alt="Editar usuario">
                                </td>
                            </tr>
                            <tr>
                                <td>Tomate</td>
                                <td>Verdura</td>
                                <td>
                                    <img src="../source/img/ver.png" alt="Ver informacion de usuario">
                                    <img src="../source/img/borrar.png" alt="Eliminar usuario">
                                    <img src="../source/img/editar.png" alt="Editar usuario">
                                </td>
                            </tr>
                            <tr>
                                <td>Manzana</td>
                                <td>Fruta</td>
                                <td>
                                    <img src="../source/img/ver.png" alt="Ver informacion de usuario">
                                    <img src="../source/img/borrar.png" alt="Eliminar usuario">
                                    <img src="../source/img/editar.png" alt="Editar usuario">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>



            <div class="acordeon animate__animated animate__zoomIn">
                <input type="radio" class="icono" value="" name="acordeon" id="acordeon3">
                <label for="acordeon3">Gestión de grados</label>
                <div class="cont-parrafo">
                    <button class="btn-usuario" id="abrirFormularioGrado">Agregar grado</button>
                    <table>
                        <thead>
                            <th>Nombre de la institución</th>
                            <th>Grupo</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fe y Alegría La Cima</td>
                                <td>11-4</td>
                                <td>
                                    <img src="../source/img/ver.png" alt="Ver informacion de usuario">
                                    <img src="../source/img/borrar.png" alt="Eliminar usuario">
                                    <img src="../source/img/editar.png" alt="Editar usuario">
                                </td>
                            </tr>
                            <tr>
                                <td>La Pequeña Maria</td>
                                <td>10-A</td>
                                <td>
                                    <img src="../source/img/ver.png" alt="Ver informacion de usuario">
                                    <img src="../source/img/borrar.png" alt="Eliminar usuario">
                                    <img src="../source/img/editar.png" alt="Editar usuario">
                                </td>
                            </tr>
                            <tr>
                                <td>U. San Buenaventura</td>
                                <td>3243242</td>
                                <td>
                                    <img src="../source/img/ver.png" alt="Ver informacion de usuario">
                                    <img src="../source/img/borrar.png" alt="Eliminar usuario">
                                    <img src="../source/img/editar.png" alt="Editar usuario">
                                </td>
                            </tr>
                            <tr>
                                <td>Maria Cano</td>
                                <td>9-2</td>
                                <td>
                                    <img src="../source/img/ver.png" alt="Ver informacion de usuario">
                                    <img src="../source/img/borrar.png" alt="Eliminar usuario">
                                    <img src="../source/img/editar.png" alt="Editar usuario">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- formulario de usuario -->
            <section class="cont-form-usuario" id="contForm">
                <form action="" class="">
                    <h2>Registra un usuario</h2>
                    <div class="cont-horas">
                        <div class="cont-hora">
                            <label for="horaLlegada">Nombres</label>
                            <input type="text" name="" id="horaLlegada">
                        </div>
                        <div class="cont-hora">
                            <label for="horaLlegada">Apellidos</label>
                            <input type="text" name="" id="horaLlegada">
                        </div>
                    </div>
                    <div class="cont-info">
                        <div class="cont-cantidad">
                            <label for="cantidad">Documento</label>
                            <input type="text" id="cantidad">
                        </div>

                        <div class="cont-producto">
                            <label for="producto">Cargo</label>
                            <select name="" id="producto">
                                <option value=""></option>
                                <option value="">Administrador</option>
                                <option value="">Empleado</option>
                                <option value="">Nutricionista</option>
                                <option value="">Logística</option>
                            </select>
                        </div>
                    </div>
                    <div class="cont-btn">
                        <input type="submit" value="Guardar" class="btn-guardar">
                        <input type="submit" value="Salir" class="btn-salir" id="btnSalir">
                    </div>
                </form>
            </section>

            <!-- formulario de productos -->
            <section class="cont-form-producto" id="contForm-producto">
                <form action="" class="">
                    <h2>Registra un producto</h2>
                    <div class="cont-horas">
                        <div class="cont-hora">
                            <label for="horaLlegada">Nombre</label>
                            <input type="text" name="" id="horaLlegada">
                        </div>
                        <div class="cont-hora">
                            <label for="horaLlegada">Fecha vencimiento</label>
                            <input type="date" name="" id="horaLlegada">
                        </div>
                    </div>
                    <div class="cont-info">
                        <div class="cont-cantidad">
                            <label for="cantidad">Descripción</label>
                            <textarea type="text" id="cantidad"></textarea>
                        </div>
                        <div class="cont-producto">
                            <label for="producto">Categoria</label>
                            <select name="" id="producto">
                                <option value=""></option>
                                <option value="">Lacteo</option>
                                <option value="">Verdura</option>
                                <option value="">Cereal</option>
                                <option value="">Fruta</option>
                                <option value="">Culinario</option>
                            </select>
                        </div>
                    </div>
                    <div class="cont-btn">
                        <input type="submit" value="Guardar" class="btn-guardar">
                        <input type="submit" value="Salir" class="btn-salir" id="btnSalir">
                    </div>
                </form>
            </section>

            <!-- formulario de grados -->
            <section class="cont-form-producto" id="contForm-grado">
                <form action="" class="">
                    <h2>Registra un grado</h2>
                    <div class="cont-horas">
                        <div class="cont-hora">
                            <label for="horaLlegada">Institución</label>
                            <input type="text" name="" id="institucion">
                        </div>
                        <div class="cont-hora">
                            <label for="horaLlegada">Grado</label>
                            <input type="text" name="" id="grado">
                        </div>
                    </div>
                    <div class="cont-info">
                        <div class="cont-cantidad">
                            <label for="cantidad">Dirección</label>
                            <input type="text" id="direccion">
                        </div>
                    </div>
                    <div class="cont-btn">
                        <input type="submit" value="Guardar" class="btn-guardar">
                        <input type="submit" value="Salir" class="btn-salir" id="btnSalir">
                    </div>
                </form>
            </section>
        </section>







































    </main>
</body>
<script src="../source/js/acordeon.js"></script>
<script src="../source/js/nav.js"></script>
<script src="../source/js/formulario.js"></script>

</html>