$(".btn-enviar").click(function () {
    var nombre = $("#nombre").val();
    var telefono = $("#telefono").val();
    var mensaje = $("#mensaje").val();
    var email = $('#email').val();


    $.ajax({
        url: "js/Mailcontacto.php",
        type: "POST",
        data: {
            email: email,
            nombre: nombre,
            telefono: telefono,
            mensaje: mensaje,

        },
        dataType: "html",
        success: function (data) {
            console.log(data),
                console.log("sending...");
            if (data == 1) {
                alert("Mensaje enviado");
                setTimeout(() => {
                    console.log(1)
                    redirect();
                }, 1000);

                function redirect() {
                    location.reload();
                }

            }else{
                alert("Error al enviar");
            }
        }
    });
    return false;
})