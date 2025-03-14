<?php
require_once("js/conexion.php");


$codigo = $_GET["codigo"];

$link = conectar();

    $sql = "SELECT * FROM noticias WHERE id = $codigo";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    while ($field = mysqli_fetch_array($result)) {
        $nombre = $field['nombre'];
        $id = $field['id'];
        $descripcion = $field['descripcion'];
        $imagen = $field['imagen'];
        $archivo = $field['archivo'];
        $video = $field['video'];
        $noticia = $field['noticia'];
        $fecha_complete = strtotime($field['fecha']);
    }
    
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">


<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="images/flavicon.png">

	<title>INSEP</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="js/ie-emulation-modes-warning.js"></script>


	<!-- Custom Fonts -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
		integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<link href="vendor/themify-icons/themify-icons.css" rel="stylesheet" type="text/css">

	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="vendor/revolution-slider/revolution/css/settings.css">

	<!-- REVOLUTION LAYERS STYLES -->
	<link rel="stylesheet" type="text/css" href="vendor/revolution-slider/revolution/css/layers.css">

	<!-- REVOLUTION NAVIGATION STYLES -->
	<link rel="stylesheet" type="text/css" href="vendor/revolution-slider/revolution/css/navigation.css">

	<!-- PARTICLES ADD-ON FILES -->
	<link rel="stylesheet" type="text/css"
		href="vendor/revolution-slider/revolution-addons/particles/css/revolution.addon.particles4bf4.css?ver=1.0.3" />

	<!-- template CSS -->
	<link href="css/style-demo-31.css" rel="stylesheet">
	<link href="css/style-demo-2.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/animation.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="css/custom.css" rel="stylesheet">

	<!-- Animation -->
	<link rel="stylesheet" href="css/animate.css">

	<script src="js/wow.js"></script>
	<script>
		new WOW().init();
	</script>

</head>

<body>

	<!-- <div class="se-pre-con"></div> -->

	<!-- Start top area -->
	<div class="top-container">
		<div class="container">
			<div class="row">
				<div class="top-column-left">
					<ul class="contact-line">
							<li><i class="fa fa-envelope"></i> atencionalcliente@insep.com.co </li>
							<li><i class="fa fa-phone"></i> <a href="tel:0356466069">035 6466069</a></li>
					</ul>
				</div>
				<div class="top-column-right">
					<div class="top-social-network">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End top area -->

	<div class="clearfix"></div>

	<!-- Start Nav bar -->
	<nav class="navbar navbar-default navbar-fixed no-background dark divinnav">
		<div class="container bg-menu">


			<div class="inside-menu">


				<!-- Start Header Navigation -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="ti-align-left"></i>
					</button>
					<a class="navbar-brand" href="index.html">
						<img src="images/ORGANIZACION INSEP HORIZONTAL2.png" class="logo logo-display" alt="INSEP">
						<img src="images/ORGANIZACION INSEP HORIZONTAL2.png" class="logo logo-scrolled" alt="INSEP">

					</a>
				</div>
				<!-- End Header Navigation -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
						<li class="dropdown megamenu-fw active">
							<a href="index.html" class="nav-link">Inicio</a>

						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle">Servicios</a>
							<ul class="dropdown-menu">
								<li><a href="insep_seguridad_privada.html">SEGURIDAD</a></li>
								<li><a href="insep_tecnologia.html">TECNOLOGÍA</a></li>
								<li><a href="insep_servicios_generales.html">SERVICIOS GENERALES</a></li>
								<li><a href="investigaciones.html">INVESTIGACIONES</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="quienes_somos.html" class="nav-link">Quiénes somos</a>

						</li>
						<li class="dropdown">
								<a href="bienestar.html" class="nav-link">Bienestar corporativo</a>
	
							</li>
						<li class="dropdown">
							<a href="contactanos.html" class="nav-link">Contáctanos</a>

						</li>

					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
		</div>
	</nav>
	<!-- End Nav bar -->

    
    <!-- Start Slider -->
    <section class="dart-no-padding-tb" id="slider">

        <article class="content" style="height: 495px;">

            <div id="rev_slider_348_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="overexposure"
                data-source="gallery" style="background:transparent;padding:0px;">
                <!-- START REVOLUTION SLIDER 5.4.3.3 fullscreen mode -->
                <div id="rev_slider_348_1" class="rev_slider fullscreenbanner" data-version="5.4.3.3">
                    <div class="owl-carousel owl-theme owl-banner">
                        <div class="item">
                            <img src="images/demo-31/slider-1.jpg" alt="" style="height: 495px;">
                            <div class="content-txt">
                                BOLETÍN DE NOTICIAS
                            </div>
                        </div>
                        <div class="item"> <img src="images/demo-31/slider-1.jpg" alt="" style="height: 495px;"></div>
                    </div>
                </div>
            </div><!-- END REVOLUTION SLIDER -->

        </article>

    </section>
	<section class="contactus-one">
			<!-- Section id-->
			<div class="container">
				<div class="row">
					<div class="col-md-8">
                        <div class="imagen-n"></div>
                        <div class="titulo-n"></div>
                        <p class="detalle-n"></p>
                        <div class="arc"></div>
                    </div>

                    <div class="col-md-4 col-twitter">
					<a class="twitter-timeline" href="https://twitter.com/Insep8?ref_src=twsrc%5Etfw">Tweets by Insep8</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
				</div>
			</div>
		</section>
		<!--Start Footer -->
		<footer class="footerOneWhite">
		<div class="footer-bottom-section">
				<div class="container">
					<div class="row">
						<hr class="tail">
						
						<div class="col-md-12">
							<div class="copyright">
								<p style="text-align:center;">Copyright 2019 <a href="https://biinyu.com.co/" style="color:black;"> Biinyu Games </a>| Todos Los Derechos Reservados</p>
							</div>
							<div class="social">
								<ul class="list-inline">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<a href="#"><i class="fa fa-instagram"></i></a>
								</ul>
							</div>
						</div>
					</div>
				</div>
		</div>
		</footer>
	<a id="whatsapp" href="https://wa.me/573125392596" target="h_blank"><img src="images/whatsapp.png" alt="whatsapp"></a>


	<div class="col-inv">
		<div class=" serv-4">
			<img src="images/fondo_titulo.png" alt="" class="img-inv">
			<i class="fas fa-arrow-right i-hide dis-n"></i>
			<i class="fas fa-arrow-left i-show"></i>
			<h3 class="txt-serv txt-inv-t dis-n">cotizacion</h3>
			<h3 class="txt-serv txt-inv-tv ">investigaciones</h3>
			<div class="row content-inv dis-n">
				<div class="col-md-8">
					<a href="#" class="fancy-button medium half-left-rounded amethyst bell" data-toggle="modal"
						data-target="#invModal">
						Solicitar cotización
						<span class="icon">
							<i class="fas fa-file"></i>
						</span>
					</a>
				</div>
				<div class="col-md-8">
					<a href="#" class="fancy-button medium half-left-rounded amethyst bell">
						Consultar resultado
						<span class="icon">
							<i class="fas fa-bell"></i>
						</span>
					</a>
				</div>
				<img src="images/icon_list.png" alt="" class="img-content-inv">
			</div>

		</div>
	</div>
	<div class="modal fade" id="invModal" tabindex="-1" role="dialog" aria-labelledby="invModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title" id="" style="font-weight: 700;">Solicitar de cotización</h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<form id="form_cot">
						<div class="form-group">
							<label for="">Nombre:</label>
							<input type="text" class="form-control" id="nombre" name="nombre"
								placeholder="Nombre completo" required>
						</div>
						<div class="form-group">
							<label for="">Teléfono:</label>
							<input type="number" class="form-control" id="telefono" name="telefono"
								placeholder="Número celular o Teléfono" required>
						</div>
						<div class="form-group">
							<label for="">Correo electrónico</label>
							<input type="email" class="form-control" id="email" name="email" required
								aria-describedby="emailHelp" placeholder="Escriba su correo por favor">
						</div>

						<div class="row services-r">
							<div class="col-md-4">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" name="chkb1" id="chkb1"
										value="Seguridad Privada">
									<label class="form-check-label" for="inlineRadio1">Seguridad Privada</label>
								</div>
							</div>
							<div class="col-md-5 srv1">
								<select class="form-control" id="producto1" name="producto1" disabled>
									<option value="" id="pd1">Producto</option>
									<option value="100">Vigilancia Fija</option>
									<option value="200">Vigilancia Movil</option>
									<option value="300">Escolta de Personas</option>
									<option value="400">Seguridad en Exportaciones</option>
									<option value="500">Estudio de seguridad a instalaciones</option>
									<option value="600">Estudio de seguridad a personas
									</option>
								</select>
							</div>
							<div class="col-md-3">
								<input type="number" class="form-control" name="cantidad1" id="cantidad1"
									placeholder="Cantidad" disabled>
							</div>
						</div>
						<div class="row services-r">
							<div class="col-md-4">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" name="chkb2" id="chkb2"
										value="Servicios Generales">
									<label class="form-check-label" for="inlineRadio2">Servicios Generales</label>
								</div>
							</div>
							<div class="col-md-5 srv1">
								<select class="form-control" id="producto2" name="producto2" disabled>
									<option value="" id="pd2">Producto</option>
									<option value="100">Servicios generales 1</option>
									<option value="200">Servicios generales 2</option>
								</select>
							</div>
							<div class="col-md-3">
								<input type="number" class="form-control" name="cantidad2" id="cantidad2"
									placeholder="Cantidad" disabled>
							</div>
						</div>
						<div class="row services-r">
							<div class="col-md-4">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" name="chkb3" id="chkb3"
										value="Tecnología">
									<label class="form-check-label" for="inlineRadio3">Tecnología</label>
								</div>
							</div>
							<div class="col-md-5 srv1">
								<select class="form-control" id="producto3" name="producto3" disabled>
									<option value="" id="pd3">Producto</option>
									<option value="100">Tecnología 1</option>
									<option value="200">Tecnología 2</option>
								</select>
							</div>
							<div class="col-md-3">
								<input type="number" class="form-control" name="cantidad3" id="cantidad3"
									placeholder="Cantidad" disabled>
							</div>
						</div>
						<div class="form-group dis-n col-cotizar">
							<label for="">Total de cotizacion:</label>
							<input type="text" class="form-control" id="total" name="total" value="" placeholder=""
								readonly>
						</div>
						<br>
						<input type="button" style="display:none" class="btn_validar">
						<button type="button" class="btn btn-danger btn_cotizar">Cotizar</button>
						
					</form>
				</div>
				<!-- <div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

				</div> -->
			</div>
		</div>
	</div>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>

	<!-- jQuery -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="js/noticias.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Nav JavaScript -->
	<script src="js/divineartnav.js"></script>

	<!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js">
	</script>
	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
	<script type="text/javascript"
		src="vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript"
		src="vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript"
		src="vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript"
		src="vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript"
		src="vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript"
		src="vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript"
		src="vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript"
		src="vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript"
		src="vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>

	<!-- PARTICLES ADD-ON FILES -->
	<script type="text/javascript"
		src="vendor/revolution-slider/revolution-addons/particles/js/revolution.addon.particles.min4bf4.js?ver=1.0.3">
	</script>

	<!-- custom JavaScript -->
	<script src="js/custom.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/cotizaciones.js"></script>
	<!-- template JavaScript -->
	<script src="js/template-demo-31.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/scripts.js"></script>
	<style>
	.content-txt {
            font-family: 'Raleway', sans-serif;
            width: 50%;
			height: 19%;
			margin-top: 10%;

        }
        .owl-banner>div:nth-child(2) .owl-prev span {
			bottom: 47%;
			left: 93%;
		}

		.owl-banner>div:nth-child(2) .owl-next span {
			bottom: 47%;
			left: 93%;
        }
        .titulo-n{
            padding: 20px;
            font-size: 20px;
        }
</style>
	
    <?php echo "<script>var data =' " . $field . "';</script>"; ?>   
    <?php echo "<script>var titulo =' " . $nombre . "';</script>"; ?>
    <?php echo "<script>var id =' " . $id . "';</script>"; ?>
    <?php echo "<script>var descripcion =' " . $descripcion . "';</script>"; ?>
    <?php echo "<script>var imagen ='" . $imagen . "';</script>"; ?>
    <?php echo "<script>var noticia =' " . addslashes($noticia)  . "';</script>"; ?>
    <?php echo "<script>var video =' " . $video . "';</script>"; ?>
    <?php echo "<script>var archivo =' ".str_replace(" ","",$archivo) ."';</script>"; ?>
    <?php echo "<script> var anio = ".date('Y', $fecha_complete).";</script>";?>
    <?php echo "<script> var mes = ".date('m', $fecha_complete).";</script>";?>
    <?php echo "<script> var dia = ".date('d', $fecha_complete).";</script>";?>
    <script>
  

        var imagen = 'insep-noticias/admin/' + imagen + '';
        var archivo = 'insep-noticias/admin/' + archivo + '';
        var video = 'insep-noticias/admin/' + video + '';

        imagen = imagen.replace(/\s/g, '');
        archivo = archivo.replace(/\s/g, '');
        video = video.replace(/\s/g, '');
        
            var res= "";
           
            res+=   '<img src="'+ imagen +'" style="width: 100%;">';

            date = '<span class="gdlr-core-blog-info gdlr-core-blog-info-font'+
             'gdlr-core-skin-caption gdlr-core-blog-info-date">' + dia + '/' + mes + '/' + anio + '</span>';
            
            title = ' <h3 >'+titulo+'</h3>';
            
            txt = '<p>'+noticia+'</p>';
            arc = '<br><br><a href="'+archivo+'" style="font-size: 20px; border: 1px dashed; padding: 5px 10px;">Ver más</a>';          
            $(".imagen-n").append(res);

            $(".titulo-n").append(title);
            $(".date-n").append(date);
            $(".detalle-n").append(txt);

                $(".arc").append(arc);
    </script>

</body>

</html>