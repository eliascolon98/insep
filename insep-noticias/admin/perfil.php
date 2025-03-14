<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--><?php require("seguridad.php");
require_once("conexion.php"); ?> 
<!DOCTYPE HTML>
<html>
<head>
<title>INSEP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script src="tinymce/js/tinymce/tinymce.js"></script>
<script>tinymce.init({ 
    selector:'textarea' 
});</script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts-->  
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>
</head>
<body>
<?php
	
     @session_start(); 
    
            $user= $_SESSION["usuarioactual"] ;
            $con=Conect();
            $qry="SELECT * FROM usuarios where usuario ='$user'";
            $sql=mysqli_query($con,$qry);
            $res=  mysqli_fetch_array($sql) ;                            
        ?>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><em>Inversiones y</em>Construcciones</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                    <img src="images/favicon.png"></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Cuenta</strong>
						</li>
						<li class="m_2"><a href="perfil.php"><i class="fa fa-user"></i> Perfil</a></li>
							<li class="m_2"><a href="../salir.php"><i class="fa fa-lock"></i> Salir</a></li>		
	        		</ul>
	      	</li>
			</ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Panel de Control</a>
                        </li>
                        <li>
                            <a href="noticias.php"><i class="fa fa-indent nav_icon"></i>Gestionar Noticias<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="noticias.php">Listar Noticias</a>
                                </li>
                                <li>
                                    <a href="addnoticia.php">Agregar Noticias</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="actualizarMencion.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Mención de honor</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                <form class="form-horizontal" method="post" action="updateperfil.php" enctype="multipart/form-data" >
                    <div class="form-group"  style="display:none;" >
                        <label for="focusedinputw" class="col-sm-2 control-label">ID</label>
                        <div class="col-sm-8" >
                            <input type="text" class="form-control1" name="id" value="<?php echo $res[0]; ?>" id="id">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Usuario</label>
                        <div class="col-sm-8">
                            <input class="form-control1"id="titulo" type="text" name="usuario" id="usuario" value="<?php echo $res[1]; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="disabledinput" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" name="pass" id="pass" value="<?php echo $res[2]; ?>"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="disabledinput" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" name="nombre" id="nombre" value="<?php echo $res[3]; ?>"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="disabledinput" class="col-sm-2 control-label">Teléfono</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" name="telefono" id="telefono" value="<?php echo $res[4]; ?>"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="disabledinput" class="col-sm-2 control-label">Cargo</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" name="cargo" id="cargo" value="<?php echo $res[5]; ?>"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="disabledinput" class="col-sm-2 control-label">Dependencia</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" name="dependencia" id="dependencia" value="<?php echo $res[6]; ?>"  required>
                        </div>
                    </div>
                    <div class="bs-example" data-example-id="form-validation-states">
                    <div class="form-group">
                        <label for="noticia" class="col-sm-2 control-label">Imagen Perfil Actual</label>
                        <div class="col-sm-8">
                            <img width="30%" height="30%" src="<?php echo $res[7];?>">
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="noticia">Subir Nueva Imagen</label>
                        <input type="file" name="imagen" id="imagen">
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn-success btn">Actualizar Perfil</button>
                                <button class="btn-default btn">Cancelar</button>
                            </div>
                        </div>
                    </div>
					</div>
                </form>
            </div>
        </div>  
    </div>
    </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
