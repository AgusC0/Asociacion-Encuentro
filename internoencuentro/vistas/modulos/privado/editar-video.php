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
	
	$nombrevideo=$_POST['nombreVideo'];
	$videoyoutube=$_POST['videoYoutube'];

$sql=mysql_query("update videos set nombreVideo='$nombrevideo',videoYoutube='$videoyoutube' where id='$pid' ");
$_SESSION['msg']="Propiedad actualizada exitosamente !!";

}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php include('include/titulo.php');?>  | Editar Propiedad</title>
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
								<h3>Editar Video</h3>
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
$ret=mysql_query("select * from videos where id='$pid'");
while($row=mysql_fetch_array($ret))
{

?>

<div class="control-group">
<label class="control-label" for="basicinput">Titulo</label>
<div class="controls">
<input type="text"    name="nombreVideo"  placeholder="Ingresar título del video" value="<?php echo htmlentities($row['nombreVideo']);?>" class="span8 tip" requerid>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Video YouTube</label>
<div class="controls">
<iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo htmlentities($row['videoYoutube']);?>"  allowfullscreen></iframe>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Código video YouTube</label>
<div class="controls">
<input type="text"    name="videoYoutube"  placeholder="Ingresar código de YouTube" value="<?php echo htmlentities($row['videoYoutube']);?>" class="span8 tip" norequired>
<br>
<p>Ejemplo: Copiar y pegar sólo la terminación resaltada https://www.youtube.com/watch?v=<strong>LEWFAC1-LXY</strong></p>
</div>
</div>
</br>
 
 
	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Actualizar</button>
											</div>
										</div>
									</form>
							</div>
						</div>

<?php } ?>
						
						
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