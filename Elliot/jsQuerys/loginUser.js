function loginUser() {
    let nombre = '#formLogin';
    let datos = $(nombre).serialize();
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
                    swal("Perfecto", "Sesión iniciada con exito :D", "success");
                    break;
                case '2':
                    swal("Upps...", "Ha ocurrido un error al conectar con la Base de Datos... \n\n Contacta a Soporte :s (Codigo error 101)", "error");
                    break;
                case '9':
                    swal("Upps...", "Contraseña Incorrecta... \n\n Intenta de Nuevo :c", "error");
                    break;
                default:
                    alert(r);
                    swal("Upps...", "Ha ocurrido un error al conectar con el servidor! \n\n Contacta a Soporte :s (Codigo error 102)", "error");
                    break;
            }
        }
    });
}