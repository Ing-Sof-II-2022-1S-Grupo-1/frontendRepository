function loginUser() {
    let nombre = '#formLogin';
    let datos = $(nombre).serialize();
    document.getElementById("loginIngresar").disabled = true;
    $.ajax({
        type: "POST",
        url: "partials/loginUser.php",
        data: datos,
        success: function(r) {
            switch (r) {
                case '0':
                    swal("Upps...", "Usuario no encontrado! \n\n Intenta de Nuevo :c", "error");
                    break;
                case '1':
                    swal("Perfecto", "Sesión iniciada con exito :D", "success")
                        .then((value) => {
                            location.href = "Panel-Administración.php";
                        });
                    break;
                case '2':
                    swal("Upps...", "Ha ocurrido un error al conectar con la Base de Datos... \n\n Contacta a Soporte :s (Codigo error 101)", "error");
                    break;
                case '9':
                    swal("Upps...", "Contraseña Incorrecta... \n\n Intenta de Nuevo :c", "error");
                    break;
                default:
                    swal(r);
                    swal("Upps...", "Ha ocurrido un error al conectar con el servidor! \n\n Contacta a Soporte :s (Codigo error 102)", "error");
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
        loginUser();
    }
}