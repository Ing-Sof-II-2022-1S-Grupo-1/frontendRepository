function logout() {
    swal({
            title: "¿Ya te vas?",
            text: "¿Seguro que deseas cerrar sesión?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((value) => {
            if (value) {
                swal("Listo", "Sesión cerrada con éxito", "success").then((value2) => {
                    location.href = "partials/logoutUser.php";
                });
            } else {
                return null;
            }
        });
}