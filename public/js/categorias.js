$(document).ready(function() {
    $('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
    $('#btnGuardarCategoria').click(function() {
        agregarCategoria();
    });

});
const SwalColors = {
    rojo: "rgba(250, 0, 0, 0.45)",
    verde: "rgba(0, 255, 0, 0.45)",
    amarillo: "rgba(255, 233, 0, 0.45)"
};

function SwalOverlayColor(color) {
    setTimeout(function() {
        $(".swal-overlay").css({ "background-color": SwalColors[color] });
    }, 10);
}

function agregarCategoria() {
    $.ajax({
        type: "POST",
        data: $('#frmAgregarCategoria').serialize(),
        url: "procesos/categorias/agregarCategoria.php",
        success: (r) => {
            r = r.trim();
            if (r == 1) {
                $('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
                $('#frmAgregarCategoria')[0].reset();
                SwalOverlayColor("verde");
                swal({
                    title: "Correcto",
                    text: "!Se agrego con exito¡",
                    icon: "success",
                    button: false,
                    timer: 1500,
                });
            } else {
                SwalOverlayColor("rojo");
                swal({
                    title: "Error",
                    text: "!Error al agregar¡",
                    icon: "error",
                    button: false,
                    timer: 1500,
                });
            }
        }
    });
}

function eliminarCategoria(id_categoria) {
    SwalOverlayColor("amarillo");
    swal({
        title: "Alvertencia",
        text: "Estas seguro de borrar este archivo\n¡¡Una vez eliminado no hay vuelta atras!!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                type: "POST",
                data: "id_categoria=" + id_categoria,
                url: "procesos/categorias/eliminarCategoria.php",
                success: (r) => {
                    if (r == 1) {
                        $('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
                        SwalOverlayColor("verde");
                        swal({
                            title: "Correcto",
                            text: "!Se elimino con exito¡",
                            icon: "success",
                            button: false,
                            timer: 1500,
                        });
                    } else {
                        SwalOverlayColor("rojo");
                        swal({
                            title: "Error",
                            text: "!Error al eliminar¡",
                            icon: "error",
                            button: false,
                            timer: 1500,
                        });
                    }
                }
            });
        }
    });
}