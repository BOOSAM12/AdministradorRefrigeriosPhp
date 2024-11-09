function validarFormulario(event) {

    const password = document.querySelector('input[name="contrasena"]').value;
    const email = document.querySelector('input[name="email"]').value;


    const validatePass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\@\*\%\?\&\!\¡\-\_])[A-Za-z0-9\@\*\%\?\&\!\¡\-\_]{8,}$/;
    const validateEmail = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;

    if (!validatePass.test(password)) {
        alert('La contraseña es incorrecta. Debe incluir al menos 8 caracteres, incluyendo mayúsculas, minúsculas, números y caracteres especiales.');
        event.preventDefault();  
        return; 
    }

    if (!validateEmail.test(email)) {
        alert('Por favor, ingresa un correo electrónico válido.');
        event.preventDefault();  
    }
}