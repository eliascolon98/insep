setTimeout(function(){
    $.ajax({
        url: "js/noticiasJSON.php",
        dataType: "json",
        success: function(data){
            var res = "";
            var j = 0;
            for(var j in data){
                res =
                '<div class="item">'+
                    '<div class="col-12 col-home">'+
                        '<div class="cont-n-home">'+
                            '<img style="height: 190px;; width:100%;" src="insep-noticias/admin/' + data[j].imagen + '">'+
                            '<div class="desc-n">'+
                                '<div class="fecha-n">'+ data[j].fecha + '</div>'+
                                '<h5 class="title-news">' + data[j].titulo + '</h5>'+
                                '<p class="p-noti">' + data[j].descripcion + ' </p>'+
                            '</div>'+
                            '<div class="ver_mas"> '+
                            '<a href="detalle_noticia.php?codigo=' + data[j].id + '"> Ver más</a>'+
                            '</div>'+
                        '</div>'+
                    '<div>'+
                '</div>';
   
                j++;
                $(".owl-noticias").prepend(res);
            }

            carousel();
        },
        
    });
}, 1200);
$.ajax({
    url: "js/mencionesJSON.php",
    dataType: "json",
    success: function(data){
        var res = "";
        var j = 0;
        console.log(data);
        for(var j in data){
            res +=
            '<div class="cuadro_honor">'+
            '<img src="insep-noticias/admin/' + data[j].imagen + '" alt="">'+
            '<div class="txt_honor">'+
                '<h3>' + data[j].titulo + ' </h3>'+
                '<div>'+
                '<p>' + data[j].descripcion + '</p>'+
                '</div>'+
            '</div>'+
            '</div>';

            if(j > 1){
                break;
            }
           
        }
        $(".app_h").append(res);
    },
    
});
function carousel(){
    $('.owl-noticias').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
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
}
 
$(".l1").click(function(){
    $(".img-1").removeClass("dis-n");
    $(".img-2").addClass("dis-n");
    $(".img-3").addClass("dis-n");
});

$(".l2").click(function(){
    $(".img-2").removeClass("dis-n");
    $(".img-3").addClass("dis-n");
    $(".img-1").addClass("dis-n");
});


$(".l3").click(function(){
    $(".img-3").removeClass("dis-n");
    $(".img-2").addClass("dis-n");
    $(".img-1").addClass("dis-n");
});


// window.onscroll = function () {
//     console.log("Vertical: " + window.scrollY);
//     console.log("Horizontal: " + window.scrollX);

// };

$(window).scroll(function (){
    if ($(window).scrollTop() > 658){
        $(".img-1").removeClass("efectRight");
        $(".img-1").addClass("efectRightOn");
    }
    if ($(window).scrollTop() > 1518){
        $(".li1").removeClass("efectRight");
        $(".li1").addClass("efectRightOn");
    }
    if ($(window).scrollTop() > 1552){
        $(".li2").removeClass("efectRight");
        $(".li2").addClass("efectRightOn");
    }
    if ($(window).scrollTop() > 1604){
        $(".li3").removeClass("efectRight");
        $(".li3").addClass("efectRightOn");
    }
    if ($(window).scrollTop() > 1638){
        $(".li4").removeClass("efectRight");
        $(".li4").addClass("efectRightOn");
    }
    if ($(window).scrollTop() > 1678){
        $(".li5").removeClass("efectRight");
        $(".li5").addClass("efectRightOn");
    }
    if ($(window).scrollTop() > 1698){
        $(".li6").removeClass("efectRight");
        $(".li6").addClass("efectRightOn");
    }

    if ($(window).scrollTop() > 1902){
        $(".txt-empleados").removeClass("efectLeft");
        $(".txt-empleados").addClass("efectLeftOn");
    }
    

    if ($(window).scrollTop() > 2183){
        $(".certi1").removeClass("efectLeft");
        $(".certi1").addClass("efectLeftOn");
    }
    if ($(window).scrollTop() > 2423){
        $(".certi2").removeClass("efectRight");
        $(".certi2").addClass("efectRightOn");
    }
    if ($(window).scrollTop() > 2653){
        $(".certi3").removeClass("efectLeft");
        $(".certi3").addClass("efectLeftOn");
    }
});










