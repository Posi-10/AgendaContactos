$(document).ready(() => {
    $('#cargaTablaContactos').load('vistas/contactos/tablaContactos.php');
    $('#btnAgregarContacto').click(() => {
        if ($('#id_categoriaSelect').val() == 0) {
            SwalOverlayColor("amarillo");
            swal({
                title: "Alvertencia",
                text: `No haz colocado nada en Categoria`,
                icon: "warning",
                button: false,
                timer: 1500,
            });
            return false;
        } else if ($('#nombre').val() == "" || $('#nombre').val() == " ") {
            SwalOverlayColor("amarillo");
            swal({
                title: "Alvertencia",
                text: `No haz colocado nada en Nombre`,
                icon: "warning",
                button: false,
                timer: 1500,
            });
            return false;
        } else if ($('#apaterno').val() == "" || $('#apaterno').val() == " ") {
            SwalOverlayColor("amarillo");
            swal({
                title: "Alvertencia",
                text: `No haz colocado nada en Apellido Paterno`,
                icon: "warning",
                button: false,
                timer: 1500,
            });
            return false;
        } else if ($('#amaterno').val() == "" || $('#amaterno').val() == " ") {
            SwalOverlayColor("amarillo");
            swal({
                title: "Alvertencia",
                text: `No haz colocado nada en Apellido Materno`,
                icon: "warning",
                button: false,
                timer: 1500,
            });
            return false;
        }
        agregarContacto();
    });
    $('#btnActualizarContacto').click(() => {
        if ($('#id_categoriaSelectU').val() == 0) {
            SwalOverlayColor("amarillo");
            swal({
                title: "Alvertencia",
                text: `No haz colocado nada en Categoria`,
                icon: "warning",
                button: false,
                timer: 1500,
            });
            return false;
        } else if ($('#nombreU').val() == "" || $('#nombreU').val() == " ") {
            SwalOverlayColor("amarillo");
            swal({
                title: "Alvertencia",
                text: `No haz colocado nada en Nombre`,
                icon: "warning",
                button: false,
                timer: 1500,
            });
            return false;
        } else if ($('#apaternoU').val() == "" || $('#apaternoU').val() == " ") {
            SwalOverlayColor("amarillo");
            swal({
                title: "Alvertencia",
                text: `No haz colocado nada en Apellido Paterno`,
                icon: "warning",
                button: false,
                timer: 1500,
            });
            return false;
        } else if ($('#amaternoU').val() == "" || $('#amaternoU').val() == " ") {
            SwalOverlayColor("amarillo");
            swal({
                title: "Alvertencia",
                text: `No haz colocado nada en Apellido Materno`,
                icon: "warning",
                button: false,
                timer: 1500,
            });
            return false;
        }
        actualizarContacto();
    });
});

const SwalColors = {
    rojo: "rgba(250, 0, 0, 0.45)",
    verde: "rgba(0, 250, 0, 0.45)",
    amarillo: "rgba(255, 233, 0, 0.45)"
};

function SwalOverlayColor(color) {
    setTimeout(() => {
        $(".swal-overlay").css({ "background-color": SwalColors[color] });
    }, 10);
}

function agregarContacto() {
    $.ajax({
        type: "POST",
        url: "procesos/contactos/agregarContacto.php",
        data: $('#frmAgregarContacto').serialize(),
        success: (r) => {
            r = r.trim();
            if (r == 1) {
                $('#frmAgregarContacto')[0].reset();
                $("#cargaTablaContactos").load('vistas/contactos/tablaContactos.php');
                SwalOverlayColor("verde");
                swal({
                    title: "Correcto",
                    text: "¡Se agrego con exito!",
                    icon: "success",
                    button: false,
                    timer: 1500,
                });
            } else {
                SwalOverlayColor("rojo");
                swal({
                    title: "Error",
                    text: "¡Error al agregar!",
                    icon: "error",
                    button: false,
                    timer: 1500,
                });
            }
        }
    });
}

function actualizarContacto() {
    $.ajax({
        type: "POST",
        url: "procesos/contactos/actualizarContactos.php",
        data: $('#frmActualizarContacto').serialize(),
        success: (r) => {
            r = r.trim();
            if (r == 1) {
                $('#cargaTablaContactos').load('vistas/contactos/tablaContactos.php');
                $('#modalActualizarContacto').modal("toggle");
                SwalOverlayColor("verde");
                swal({
                    title: "Correcto",
                    text: "¡Se actualizo con exito!",
                    icon: "success",
                    button: false,
                    timer: 1500,
                });
            } else {
                SwalOverlayColor("rojo");
                swal({
                    title: "Error",
                    text: "¡Error al actualizar!",
                    icon: "error",
                    button: false,
                    timer: 1500,
                });
            }
        }
    });
}

function eliminarConctacto(id_agenda) {
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
                data: "id_agenda=" + id_agenda,
                url: "procesos/contactos/eliminarContacto.php",
                success: (r) => {
                    r = r.trim();
                    if (r == 1) {
                        $("#cargaTablaContactos").load('vistas/contactos/tablaContactos.php');
                        SwalOverlayColor("verde");
                        swal({
                            title: "Correcto",
                            text: "¡Se elimino con exito!",
                            icon: "success",
                            button: false,
                            timer: 1500,
                        });
                    } else {
                        SwalOverlayColor("rojo");
                        swal({
                            title: "Error",
                            text: "¡Error al eliminar!",
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

function obtenerDatosContacto(id_agenda) {
    $.ajax({
        type: "POST",
        data: "id_agenda=" + id_agenda,
        url: "procesos/contactos/obtenerDatosContacto.php",
        success: (r) => {
            r = jQuery.parseJSON(r);
            id_categoria = r['id_categoria'];
            $('#nombreU').val(r['nombre']);
            $('#apaternoU').val(r['paterno']);
            $('#amaternoU').val(r['materno']);
            $('#telefonoU').val(r['telefono']);
            $('#emailU').val(r['email']);
            $('#id_agendaU').val(r['id_agenda']);
            $('#id_categoriasU').load("vistas/contactos/selectCategoriasUpdate.php?id_categoria=" + id_categoria);
        }
    });
}