<?php
// Desactivar toda notificación de error
error_reporting(0);
?>
<?php
session_start();
include('include/config.php');
include('include/conexion.php');
?>
<?php 

          if($_SESSION["perfil"] =="Especial" || $_SESSION["perfil"] =="Vendedor"){

             $redirect_page = "denegado.php";
header("Location:"  .$redirect_page);
die();

          } ?>

 <?php      
if(strlen($_SESSION['perfil'])== "Administrador" )
		{
header('location:https://www.redmoderna.com.ar/internomoderna');
}
else{
date_default_timezone_set('America/Argentina/Buenos_Aires');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

if(isset($_GET['del']))
		  {
		          mysql_query("delete from products where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Entrada eliminada!";
		  }

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php include('include/titulo.php');?>  | Cambiar contraseña </title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

	<div class="module">
							<div class="module-head">
								<h3>Cambiar contraseña</h3>
							</div>
							<div class="module-body table" style="margin-left: 3%;">
	<h2>
			   <?php

          if($_SESSION["perfil"] =="Administrador" || $_SESSION["perfil"] =="Vendedor"){

             echo 'Usuario DNI: ' .$_SESSION["usuario"].' ';

          }

          ?>
		</h2>

<div style="width:30%;">
<form method="post" action="change-password.php">
  <div class="form-group">
    <label for="exampleInputPassword1" style="color:black;">Contraseña actual</label>
    <input type="password" class="form-control" name="old_pass" id="exampleInputPassword1" placeholder="Ingresar contraseña actual">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" style="color:black;">Contraseña nueva</label>
    <input type="password" class="form-control" name="new_pass" id="exampleInputPassword1" placeholder="Ingresar contraseña nueva">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" style="color:black;">Reingresar contraseña nueva</label>
    <input type="password" class="form-control" name="re_pass" id="exampleInputPassword1" placeholder="Reingresar contraseña nueva">
  </div>
  <button type="submit" name="re_password" class="btn btn-danger">  Actualizar</button>
</form>
</div>
							</div>
						</div>						
	 
		
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
<br><br><br><br>
<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
    <script>
    $(".accordion-titulo").click(function(){
		
   var contenido=$(this).next(".accordion-content");
			
   if(contenido.css("display")=="none"){ //open		
      contenido.slideDown(250);			
      $(this).addClass("open");
   }
   else{ //close		
      contenido.slideUp(250);
      $(this).removeClass("open");	
  }
							
});
</script>
    
</body>
<?php } ?>