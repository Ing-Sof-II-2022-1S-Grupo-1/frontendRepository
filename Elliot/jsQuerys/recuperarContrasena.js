function recuperarCuenta() {
    let nombre = '#formLogin';
    let datos = $(nombre).serialize();
    document.getElementById("envioEmail").disabled = true;
    $.ajax({
        type: "POST",
        url: "partials/recuperarCuenta.php",
        data: datos,
        success: function(r) {
            switch (r) {
                case '1':
                    $.ajax({
                        type: "POST",
                        url: "partials/emailRecuperar.php",
                        data: datos,
                        success: function(r) {}
                    });
                    swal("Perfecto", "Si el correo existe, el Token habrá sido enviado con exito :D", "success")
                        .then((value) => {
                            location.href = "ingresoToken.html";
                        });
                    break;
                case '2':
                    swal("Upps...", "Ha ocurrido un error al conectar con la Base de Datos... \n\n Contacta a Soporte :s (Codigo error R-101)", "error");
                    break;
                case '9':
                    swal("Perfecto", "Si el correo existe, el Token habrá sido enviado con exito :D", "success")
                        .then((value) => {
                            location.href = "ingresoToken.html";
                        });
                    break;
                default:
                    swal(r);
                    swal("Upps...", "Ha ocurrido un error al conectar con el servidor! \n\n Contacta a Soporte :s (Codigo error R-102)", "error");
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
        recuperarCuenta();
    }
}