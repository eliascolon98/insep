var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function () {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/5d925564db28311764d6963a/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();


$('.owl-banner').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 38989800,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});
$('.owl-empleados').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 1800,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});
$('.owl-certificaciones').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 2800,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 2
        }
    }
});

$('.owl-servicios-h').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 2800,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 2
        }
    }
});

$('.owl-d-noticias').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 2800,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});


$(document).ready(function () {

    $('#whatsapp').click(function () {
        $('body, html').animate({
            scrollTop: '0px'
        }, 300);
    });

    $(window).scroll(function () {

    });

});

$(window).scroll(function () {
    if ($(window).scrollTop() > 25) {
        $(".navbar").addClass("nav-sombra");
    } else if ($(window).scrollTop() < 25) {
        $(".navbar").removeClass("nav-sombra");
    }
});

// window.onscroll = function () {
//     console.log("Vertical: " + window.scrollY);
//     console.log("Horizontal: " + window.scrollX);

// };
$(window).load(function () {
    function form_inv() {
        //servicios generales
        var contenido = '<div id="contenedor" class="">' +
            '<div class="row row-modal">' +
            '<h5 id="btn-cerrar" class="btn-cerrar">X</h5>' +
            '<div class="portafolio modal-serv-g"></div>' +
            '</div>' +
            '</div>';

        $('.cont-modal-1').append(contenido);
        $('.cont-modal-1').css({
            'display': 'flex'
        });

        $(".btn-cerrar").click(function () {
            $('.cont-modal-1').css({
                'display': 'none'
            });
        });
        $(".modal-serv-g").click(function () {
            window.open("docs/PRESENTACION SEG PRIVADA.pptx", '_blank');
        });
    }


});


$(".serv-1").click(function () {
    window.open("insep_seguridad_privada.html", '_blank');
});
$(".serv-2").click(function () {
    window.open("insep_tecnologia.html", '_blank');
});
$(".serv-3").click(function () {
    window.open("insep_servicios_generales.html", '_blank');
});

$(".btn-archivo").click(function(){
    $(".col-formatos").addClass("dis-n");
    $(".col-archivo").removeClass("dis-n");
})

$(".btn-formato").click(function(){
    $(".col-archivo").addClass("dis-n");
})

$(".btn-enviar-inv").click(function(){
    
    var datos = $(".formINV").serialize();
    $.ajax({
        url: 'js/enviarHV.php',
        type: 'POST',
        data: datos,
        success: function(r){
            console.log(r);
            alert("enviando..");
            if(r == 1){
                alert("Enviado con exito");
                // reload();
            }else{
                // alert("error al enviar");
                // reload();
                location.href = "js/mailInvestigaciones.php";
            }
            function reload(){
                location.reload();
            }
        }

    });
    return false;
});

$('.collapse').collapse({ toggle: false });
function myfunction(){
   $('.collapse').collapse('show');
}
function myfunction2(){
  $('.collapse').collapse('hide');
}

