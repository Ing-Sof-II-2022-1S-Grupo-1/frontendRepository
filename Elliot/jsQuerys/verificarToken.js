function verificarVacio() {
    if (token.value == "") {
        swal("Upps...", "Llena el formulario antes de enviar la información!", "warning");
        return false;
    }
    return true;
}

function verificarToken() {
    if (!verificarVacio()) {
        return null;
    }
    let nombre = '#formLogin';
    let datos = $(nombre).serialize();
    $.ajax({
        type: "POST",
        url: "partials/verificarToken.php",
        data: datos,
        success: function(r) {
            switch (r) {
                case '1':
                    swal("Perfecto", "Ingresa tu nueva Contraseña :D", "success")
                        .then((value) => {
                            location.href = "changePassword.php";
                        });
                    break;
                case '9':
                    swal("Upps...", "El token no coincide... \n\nVerifica e Intenta de Nuevo :c", "error");
                    break;
                default:
                    swal(r);
                    swal("Upps...", "Ha ocurrido un error al conectar con el servidor! \n\n Contacta a Soporte :s (Codigo error T-101)", "error");
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
        verificarToken();
    }
}