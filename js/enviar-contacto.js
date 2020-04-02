
function enviarc() {
    var email = $("#email").val();
    var nombre = $("#nombre").val();
    var telefono = $("#telefono").val();
    var mensaje = $("#message").val();
    var asunto = $("#asunto").val();
    $.ajax({
        url: "mail/mail-correo.php",
        type: "POST",
        data: {
            email: email,
            nombre: nombre,
            telefono: telefono,
            asunto: asunto,
            mensaje: mensaje
        },
        dataType: "html",
        success: function (data) {
            console.log("sending...");
            var x = Math.random();
            if (data == 1) {
                modal = '<div class="modal' + x + ' fade" tabindex="-1" role="dialog" id="modalemail">' +
                    '<div class="modal-dialog" role="document">' +
                    '<div class="modal-content">' +
                    '<div class="modal-header">' +
                    '<button type="button" class="close " data-dismiss="modal"><span aria-hidden="true">&times;</span></button>' +
                    '<h4 class="modal-title">Conaltura</h4>' +
                    '</div>' +
                    '<div class="modal-body">' +
                    '<p>Querido cliente, nos comunicaremos a ' + email + ' para dar pronta respuesta a su inquietud </p>' +
                    '</div>' +
                    '<div class="modal-footer">' +
                    '<button type="button" class="btn btn-default " data-dismiss="modal">Cerrar</button>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>';
                $("#email").val("");
                $("#nombre").val("");
                $("#telefono").val("");
                $("#asunto").val("");
                $("#mensaje").val("");
                $("body").append(modal);
                $('#modalemail').modal();

                setTimeout(() => {
                    console.log(1)
                    redirect();
                }, 3000);

                function redirect() {
                    location.reload();
                }
            }

        }
    });
    return false;
}
