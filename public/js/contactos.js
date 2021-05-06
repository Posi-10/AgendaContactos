$(document).ready(function() {
    $('#cargaTablaContactos').load('vistas/contactos/tablaContactos.php')
});

const SwalColors = {
    rojo: "rgba(250, 0, 0, 0.45)",
    verde: "rgba(0, 250, 0, 0.45)",
    amarillo: "rgba(255, 233, 0, 0.45)"
};

function SwalOverlayColor(color) {
    setTimeout(function() {
        $(".swal-overlay").css({ "background-color": SwalColors[color] });
    }, 10);
}

function eliminarConctacto() {
    SwalOverlayColor("amarillo");
    swal({
        title: "Alvertencia",
        text: "Estas seguro de borrar este archivo\n¡¡Una vez eliminado no hay vuelta atras!!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            SwalOverlayColor("verde");
            swal({
                title: "Correcto",
                text: "!Se a eliminado correctamente¡",
                icon: "success",
                button: false,
                timer: 1500,
            });
        }
    });
}