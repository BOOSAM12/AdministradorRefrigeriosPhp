
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Modal</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* styles.css */

body {
    font-family: Arial, sans-serif;
}

.modal {
    display: none; /* Escondemos el modal por defecto */
    position: fixed; /* Posición fija para cubrir toda la pantalla */
    z-index: 1; /* Asegura que el modal esté en el frente */
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto; /* Habilita scroll si el contenido es demasiado grande */
    background-color: rgb(0,0,0); /* Color de fondo negro */
    background-color: rgba(0,0,0,0.4); /* Fondo con opacidad */
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* Centra el modal */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Ancho del modal */
    max-width: 500px;
    border-radius: 10px;
}

.closeBtn {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.closeBtn:hover,
.closeBtn:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

button {
    padding: 10px 20px;
    font-size: 16px;
    margin-top: 10px;
}

    </style>
</head>
<body>
    <button id="openFormBtn">Abrir Formulario</button>

    <div id="formModal" class="modal">
        <div class="modal-content">
            <span class="closeBtn">&times;</span>
            <form>
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <button type="button" id="closeFormBtn">Salir</button>
            </form>
        </div>
    </div>

    <script>
        // script.js

document.addEventListener('DOMContentLoaded', (event) => {
    const openFormBtn = document.getElementById('openFormBtn');
    const formModal = document.getElementById('formModal');
    const closeFormBtn = document.getElementById('closeFormBtn');
    const closeBtn = document.querySelector('.closeBtn');

    openFormBtn.addEventListener('click', () => {
        formModal.style.display = 'block';
    });

    closeFormBtn.addEventListener('click', () => {
        formModal.style.display = 'none';
    });

    closeBtn.addEventListener('click', () => {
        formModal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target == formModal) {
            formModal.style.display = 'none';
        }
    });
});

    </script>
</body>
</html>
