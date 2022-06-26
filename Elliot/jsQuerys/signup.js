function verificarPassword(password) {
    let p = password;
    if (!/^[a-zA-Z0-9]+$/.test(p)) { //Solo valores alfanuméricos
        return false;
    } else if (p.length < 8 || p.length > 20) { //De entre 8 a 20 caracteres
        return false;
    } else if (/\s/.test(p)) { //No debe tener espacios en blanco
        return false;
    } else {
        return true;
    }
}

function equalPassword() {
    if (password.value === confirmPassword.value) {
        return true;
    } else {
        return false;
    }
}

function crearUsuario() {
    if (nombres.value == "" || apellidos.value == "" || email.value == "" || username.vale == "" || password.vale == "") {
        swal("Upps...", "Llena el formulario antes de enviar la información!", "warning");
        return false;
    }
    if (!verificarPassword(password.value)) {
        swal("Upps...", "La contraseña no cumple con nuestros requerimientos! \nIntenta de Nuevo :c", "error");
        return false;
    }
    if (!equalPassword()) {
        swal("Upps...", "La confimación de contraseña es incorrecta! \nIntenta de Nuevo :c", "error");
        return false;
    }
    let nombre = '#formLogin';
    let datos = $(nombre).serialize();
    $.ajax({
        type: "POST",
        url: "partials/signUp.php",
        data: datos,
        success: function(r) {
            switch (r) {
                case '1':
                    swal("Perfecto", "A tu correo llegó un link confirmando la creación de tu cuenta \n Consulta tu Bandeja de Entrada e inicia sesión :D", "success")
                        .then((value) => {
                            location.href = "index.php";
                        });
                    break;
                case '2':
                    swal("Upps...", "Ha ocurrido un error al conectar con la Base de Datos...\n\n Contacta a Soporte :s (Codigo error S101)", "error");
                    break;
                case '9':
                    swal("Upps...", "El Usuario ya existe...\n\nPrueba ingresando al Sistema o recuperando tu cuenta :s", "warning");
                    break;
                default:
                    swal(r);
                    swal("Upps...", "Ha ocurrido un error al conectar con el servidor! \n\n Contacta a Soporte :s (Codigo error S102)", "error");
                    break;
            }
        }
    });
}

//Función para envío de formulario con tecla enter
document.querySelector('#formLogin').addEventListener('keypress', function(e) {
    validar(e);
})

function validar(e) {
    let tecla = (document.all) ? e.keyCode : e.which;
    if (tecla == 13) {
        crearUsuario();
    }
}