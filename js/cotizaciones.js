$(document).ready(function () {
    if (screen.width > 414) {
        $(".i-show").click(function () {
            $(".col-inv").css({
                'width': '34%'
            });
            $(".serv-4").css({
                'height': '300px',
                'border-radius': '12px 12px 0px 0px'
            });
            $(".img-inv").css({
                'border-radius': '0px',
                'height': '54px'
            });
            $(".txt-inv-t").removeClass("dis-n");
            $(".txt-inv-tv").addClass("dis-n");
            $(".img-content-inv").css('display', 'block');
            setTimeout(function () {
                $(".content-inv").removeClass("dis-n");
                $(".i-show").addClass("dis-n");
                $(".i-hide").removeClass("dis-n");
            }, 500);

        });
        $(".i-hide").click(function () {

            $(".content-inv").addClass("dis-n");
            $(".i-hide").addClass("dis-n");
            $(".i-show").removeClass("dis-n");

            $(".col-inv").css({
                'width': '4%'
            });
            $(".serv-4").css({
                'ransition': '0.5s',
                'height': '30px',
                'border-radius': '40px 40px 0px 0px'
            });
            $(".img-inv").css({
                'border-radius': '27px',
                'height': '300px'
            });
            $(".txt-inv-t").addClass("dis-n");
            $(".txt-inv-tv").removeClass("dis-n");
        });

    } else if (screen.width <= 414) {
        $(".i-show").click(function () {
            $(".col-inv").css({
                'width': '84%'
            });
            $(".serv-4").css({
                'height': '300px',
                'border-radius': '12px 12px 0px 0px'
            });
            $(".img-content-inv").css('display', 'none');
            $(".img-inv").css({
                'border-radius': '0px',
                'height': '54px'
            });
            $(".txt-inv-t").removeClass("dis-n");
            $(".txt-inv-tv").addClass("dis-n");

            setTimeout(function () {
                $(".content-inv").removeClass("dis-n");
                $(".i-show").addClass("dis-n");
                $(".i-hide").removeClass("dis-n");
            }, 500);

        });
        $(".i-hide").click(function () {

            $(".content-inv").addClass("dis-n");
            $(".i-hide").addClass("dis-n");
            $(".i-show").removeClass("dis-n");

            $(".col-inv").css({
                'width': '12%'
            });
            $(".serv-4").css({
                'ransition': '0.5s',
                'height': '30px',
                'border-radius': '40px 40px 0px 0px'
            });
            $(".img-inv").css({
                'border-radius': '27px',
                'height': '300px'
            });
            $(".txt-inv-t").addClass("dis-n");
            $(".txt-inv-tv").removeClass("dis-n");
        });

    }
    setInterval(() => {
        $('.btn_validar').trigger("click");
    }, 10);
});

function cotizar() {
    var opt1 = $('select[name=producto1]').val();
    var cant1 = $("#cantidad1").val();
    var opt2 = $('select[name=producto2]').val();
    var cant2 = $("#cantidad2").val();
    var opt3 = $('select[name=producto3]').val();
    var cant3 = $("#cantidad3").val();
    total = (opt1 * cant1) + (opt2 * cant2) + (opt3 * cant3);
    $("#total").val("$" + total);
}

function validarEmail(email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test(email);
}

function validacion() {
    if ($('#nombre').val() == '') {
        alert("Por favor ingrese su nombre");
        return false;
    }else if ($('#telefono').val() == '') {
        alert("Por favor ingrese su télefono o celular");
        return false;
    }else if ($('#email').val() == '') {
        alert("Por favor ingrese su correo electrónico");
        return false;
    }else if ($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1) {
            alert("email invalido");
            return false;
    }else{
        return true;
    }
    
}
function validacion_hv() {
    if ($('#nombre_hv').val() == '') {
        alert("Por favor ingrese su nombre");
        return false;
    }else if ($('#email_hv').val() == '') {
        alert("Por favor ingrese su correo electrónico");
        return false;
    }else if ($("#email_hv").val().indexOf('@', 0) == -1 || $("#email_hv").val().indexOf('.', 0) == -1) {
            alert("email invalido");
            return false;
    }else if ($('#archivo').val() == '') {
        alert("Por favor Agregue su hoja de vida");
        return false;
    }else{
        return true;
    }
    
}
$(".btn_validar").click(function () {
    if (document.getElementById("chkb1").checked == false) {
        $('#producto1').attr("disabled", "disabled");
        $('#cantidad1').attr("disabled", "disabled");
    } else {
        $('#producto1').removeAttr("disabled", "disabled");
        $('#cantidad1').removeAttr("disabled", "disabled");
    }
    if (document.getElementById("chkb2").checked == false) {
        $('#producto2').attr("disabled", "disabled");
        $('#cantidad2').attr("disabled", "disabled");
    } else {
        $('#producto2').removeAttr("disabled", "disabled");
        $('#cantidad2').removeAttr("disabled", "disabled");
    }
    if (document.getElementById("chkb3").checked == false) {
        $('#producto3').attr("disabled", "disabled");
        $('#cantidad3').attr("disabled", "disabled");
    } else {
        $('#producto3').removeAttr("disabled", "disabled");
        $('#cantidad3').removeAttr("disabled", "disabled");
    }
    cotizar();
});

$(".btn-calcular").click(function () {
    if ($('#chkb1').prop('checked') || $('#chkb2').prop('checked') || $('#chkb3').prop('checked')) {
        cotizar();
        $(".col-cotizar").removeClass("dis-n");
    } else {
        alert("Por favor debe seleccionar alguno de los servicios.");
    }

});

$(".btn_cotizar").click(function () {
    if(validacion() == true){
        if ($('#chkb1').prop('checked') || $('#chkb2').prop('checked') || $('#chkb3').prop('checked')) {
            var datos = $("#form_cot").serialize();
            $.ajax({
                url: "js/guardarInv.php",
                type: "POST",
                data: datos,
                dataType: "html",
                success: function (data) {
                    console.log(data),
                        console.log("sending...");
                    if (data == 1) {
                        alert("Cotinzacion éxitosa");
                        redirect();
                    } else {
                        alert("Error al cotizar");
                        redirect();
                    }
        
                    function redirect() {
                        location.reload();
                    }
                }
            });
        } else {
            alert("Por favor debe seleccionar alguno de los servicios.");
        }
    }
    return false;
});


// $(".btn-hv").click(function () {
//     if(validacion_hv() == true){
//         var nombre_hv = $("#nombre_hv").val();
//         var email_hv = $("#email_hv").val();
//         var archivo_hv = $("#archivo_hv").val();
//         alert(archivo_hv);
//             $.ajax({
//                 url: "js/enviarHV.php",
//                 type: "POST",
//                 data: {
//                     nombre_hv: nombre_hv,
//                     email_hv: email_hv,
//                     archivo_hv: archivo_hv,
//                 },
//                 dataType: "html",
//                 success: function (data) {
//                     console.log(data);
//                     if (data == 1) {
//                         alert("Hoja de vida enviada con éxito");
//                         redirect();
//                     } else {
//                         alert("Error al enviar Hoja de Vida");
//                         redirect();
//                     }
//                     function redirect() {
//                         location.reload();
//                     }
//                 }
//             });
//     }
//     return false;
// });
$(".btn-formato").click(function(){
    $(".col-formatos").removeClass("dis-n");
    $(".col-archivo").addClass("dis-n");
});