function updateCamara(cam) {
    let nombre = '#formActualizarCamara' + cam;
    let datos = $(nombre).serialize();
    $.ajax({
        type: "POST",
        url: "partials/updateCamara.php",
        data: datos,
        success: function(r) {
            switch (r) {
                case '1':
                    swal("Perfecto", "Cambios registrados con éxito :D", "success")
                        .then((value) => {
                            location.reload();
                        });
                    break;
                case '2':
                    swal("Upps...", "Ha ocurrido un error al conectar con la Base de Datos... \n\n Contacta a Soporte :s (Codigo error C-101)", "error");
                    break;
                default:
                    swal("Upps...", r, "error");
                    //swal("Upps...", "Ha ocurrido un error al conectar con el servidor! \n\n Contacta a Soporte :s (Codigo error C-102)", "error");
                    break;
            }
        }
    });
}

function crearCamara() {
    if (crearDireccionIPCamara.value == "" || crearAliasCamara.value == "" || crearSerialCamara.value == "" || crearMarcaCamara.vale == "") {
        swal("Upps...", "Llena el formulario antes de enviar la información!", "warning");
        return false;
    }
    let nombre = '#formCamara';
    let datos = $(nombre).serialize();
    $.ajax({
        type: "POST",
        url: "partials/createCamara.php",
        data: datos,
        success: function(r) {
            switch (r) {
                case '1':
                    swal("Perfecto", "Cámara registrada con éxito :D", "success")
                        .then((value) => {
                            location.reload();
                        });
                    break;
                case '2':
                    swal("Upps...", "Ha ocurrido un error al conectar con la Base de Datos... \n\n Contacta a Soporte :s (Codigo error C-101)", "error");
                    break;
                default:
                    swal("Upps...", r, "error");
                    //swal("Upps...", "Ha ocurrido un error al conectar con el servidor! \n\n Contacta a Soporte :s (Codigo error C-102)", "error");
                    break;
            }
        }
    });
}

//Función para envío de formulario crearCamara con tecla enter
document.querySelector('#formCamara').addEventListener('keypress', function(e) {
    validarCamara(e);
})

function validarCamara(e) {
    let tecla = (document.all) ? e.keyCode : e.which;
    if (tecla == 13) {
        crearCamara();
    }
}