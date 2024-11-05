

document.addEventListener('DOMContentLoaded', (event) => {
    const openFormBtn = document.getElementById('abrirFormulario');
    const openFormBtnProducto = document.getElementById('abrirFormularioProducto');
    const openFormBtnGrado = document.getElementById('abrirFormularioGrado');
    const formModal = document.getElementById('contForm');
    const formModalProducto = document.getElementById('contForm-producto');
    const formModalGrado = document.getElementById('contForm-grado');
    const closeBtn = document.getElementById('btnSalir');

    openFormBtn.addEventListener('click', () => {
        formModal.style.display = 'block';
    });
    openFormBtnProducto.addEventListener('click', () => {
        formModalProducto.style.display = 'block';
    });
    openFormBtnGrado.addEventListener('click', () => {
        formModalGrado.style.display = 'block';
    });
    closeBtn.addEventListener('click', () => {
        formModal.style.display = 'none';
        formModalGrado.style.display = 'none';
        formModalProducto.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target == formModal) {
            formModal.style.display = 'none';
            formModalProducto.style.display = 'none';
            formModalGrado.style.display = 'none';
        }
    });
});
