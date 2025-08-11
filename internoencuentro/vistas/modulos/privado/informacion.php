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
header('location:https://www.inmobiliariaricardoalfonso.com/internoalfonso');
}
else{
	$pid=intval($_GET['id']);// product id
if(isset($_POST['submit']))
{
	$horariosemana=$_POST['horarioSemana'];
	$horariofinde=$_POST['horarioFinde'];
	$datotelefono=$_POST['datoTelefono'];
	$datomail=$_POST['datoMail'];
	$datodireccion=$_POST['datoDireccion'];
	$nrowhatsapp=$_POST['nroWhatsapp'];
	$sobrenosotros=$_POST['sobreNosotros'];
	$cuentafacebook=$_POST['cuentaFacebook'];
 	$cuentainstagram=$_POST['cuentaInstagram'];
 	$cuentayoutube=$_POST['cuentaYoutube'];
 
$sql=mysql_query("update informacion set horarioSemana='$horariosemana',horarioFinde='$horariofinde',datoTelefono='$datotelefono',datoMail='$datomail',datoDireccion='$datodireccion',nroWhatsapp='$nrowhatsapp',sobreNosotros='$sobrenosotros',cuentaFacebook='$cuentafacebook',cuentaInstagram='$cuentainstagram',cuentaYoutube='$cuentayoutube'  where id='1' ");
$_SESSION['msg']="Datos actualizados exitosamente !!";

}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php include('include/titulo.php');?>  | Información</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<style>
.iframe-responsivo {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}
</style>
    

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
								<h3>Información general</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Muy bien!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Alerta!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

<?php 

$query=mysql_query("select * from informacion where id = '1'");
$cnt=1;
while($row=mysql_fetch_array($query))
{
  


?>
<div class="controls"> 
<h3>Home (página de inicio)</h3>
</div>
</br>
<div class="control-group">
<label class="control-label" for="basicinput">Imagenes página principal (Home)</label>
<div class="controls">
  <p style="text-aling:right;"> <a   href="slide.php" ><button type="button" class="btn btn-primary"><i title="Editar" class="icon-edit"></i> VER/CAMBIAR PROPIEDADES</button></a> </p>
            <p>								
</div>
</div>			
</br>

<div class="controls"> 
<h3>Horario</h3>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Lunes a Viernes</label>
<div class="controls">
<input type="text"    name="horarioSemana"  placeholder="Ingresar horario" value="<?php echo htmlentities($row['horarioSemana']);?>" class="span8 tip" requerid>
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Sábado y Domingo</label>
<div class="controls">
<input type="text"    name="horarioFinde"  placeholder="Ingresar horario" value="<?php echo htmlentities($row['horarioFinde']);?>" class="span8 tip" required>
</div>
</div>
<br>
<div class="controls"> 
<h3>Contacto</h3>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Teléfono</label>
<div class="controls">
<input type="text"    name="datoTelefono"  placeholder="Ingresar Telefono" value="<?php echo htmlentities($row['datoTelefono']);?>" class="span8 tip" requerid>
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Mail</label>
<div class="controls">
<input type="text"    name="datoMail"  placeholder="Ingresar mail" value="<?php echo htmlentities($row['datoMail']);?>" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">WhatsApp</label>
<div class="controls">
<input type="text"    name="nroWhatsapp"  placeholder="Ingresar WhatsApp" value="<?php echo htmlentities($row['nroWhatsapp']);?>" class="span8 tip" required>
</div>
</div>

<br>
<div class="controls"> 
<h3>Dirección</h3>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Dirección</label>
<div class="controls">
<input type="text"    name="datoDireccion"  placeholder="Ingresar dirección" value="<?php echo htmlentities($row['datoDireccion']);?>" class="span8 tip" requerid>
</div>
</div>
<br>
<div class="controls"> 
<h3>Sobre Nosotros</h3>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Texto Sobre nosotros</label>
<div class="controls">
<textarea  name="sobreNosotros"  placeholder="Ingresar informacion" rows="6" class="span8 tip">
<?php echo htmlentities($row['sobreNosotros']);?></textarea>
</div>
</div> 
<br>
<div class="controls"> 
<h3>Redes sociales</h3>
</div>
<div class="control-group">
<label class="control-label" for="basicinput"><a href="https://www.facebook.com/<?php echo htmlentities($row['cuentaFacebook']);?>" target="blank_">Facebook</a></label>
<div class="controls">
@ <input type="text"    name="cuentaFacebook"  placeholder="Ingresar cuenta" value="<?php echo htmlentities($row['cuentaFacebook']);?>" class="span8 tip" requerid>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput"><a href="https://www.instagram.com/<?php echo htmlentities($row['cuentaInstagram']);?>" target="blank_">Instagram</a></label>
<div class="controls">
@ <input type="text"    name="cuentaInstagram"  placeholder="Ingresar cuenta" value="<?php echo htmlentities($row['cuentaInstagram']);?>" class="span8 tip" requerid>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput"><a href="<?php echo htmlentities($row['cuentaYoutube']);?>" target="blank_">YouTube</a></label>
<div class="controls">
<input type="text"    name="cuentaYoutube"  placeholder="Ingresar link, ej: https://www.youtube.com/channel/UCzsPeKlnydSKiLYH385ZAfw" value="<?php echo htmlentities($row['cuentaYoutube']);?>" class="span8 tip" requerid>
</div>
</div>
<?php } ?>
	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Actualizar</button>
											</div>
										</div>
									</form>
							</div>
						</div>


						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

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
</body>
<?php } ?>