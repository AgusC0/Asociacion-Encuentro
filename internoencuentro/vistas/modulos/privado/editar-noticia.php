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
header('location:https://www.encuentrocomunitario.com.ar/internoencuentro');
}
else{
	$pid=intval($_GET['id']);// product id
if(isset($_POST['submit']))
{
    $id=$_POST['urlNotificacion'];
	$titulonoticia=$_POST['tituloNoticia'];
	$copetenoticia=$_POST['copeteNoticia'];
	$categorianoticia=$_POST['categoriaNoticia'];
	$cuerponoticia=$_POST['cuerpoNoticia'];
	$autornoticia=$_POST['autorNoticia'];
    $videoyoutube=$_POST['videoYoutube'];
	$query=mysql_query("select tituloNoticia from noticias where id='pid'");
	$result=mysql_fetch_row($query);
	$pname=$result['tituloNoticia'];
	
rename("productimages/$pname","productimages/$productname");
$sql=mysql_query("update noticias set tituloNoticia='$titulonoticia',copeteNoticia='$copetenoticia',categoriaNoticia='$categorianoticia',cuerpoNoticia='$cuerponoticia',autorNoticia='$autornoticia',videoYoutube='$videoyoutube' where id='$pid' ");
$_SESSION['msg']="Noticia actualizada exitosamente !!";

}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php include('include/titulo.php');?>  | Editar noticia</title>
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
								<h3>Editar Noticia</h3>
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

$query=mysql_query("select * from noticias where id='$pid'");
$cnt=1;
while($row=mysql_fetch_array($query))
{
  


?>
<div class="control-group">
<label class="control-label" for="basicinput">ID de la noticia</label>
<div class="controls">
<input type="text"    name="id"  value="<?php echo htmlentities($row['id']);?>" class="span8 tip" readonly>
</div>
</div>

 


 
 
<div class="control-group">
<label class="control-label" for="basicinput">Título de la noticia</label>
<div class="controls">
<input type="text" name="tituloNoticia"  placeholder="Ingresar el título de la noticia" value="<?php echo htmlentities($row['tituloNoticia']);?>" class="span8 tip" requerid>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Resumen de la noticia (MÁX. 200 CARACTERES)
</label>
<div class="controls">
<textarea name="copeteNoticia"  placeholder="Ingresar el resumen de la noticia" rows="6" class="span8 tip">
<?php echo htmlentities($row['copeteNoticia']);?>
</textarea>  
</div>
</div>
<?php } ?>
<div class="control-group">
<label class="control-label" for="basicinput">Categoría</label>
<div class="controls">

<select   name="categoriaNoticia"  id="categoriaNoticia" class="span8 tip" required>
<?php 
$ret=mysql_query("select * from noticias where id='$pid'");
while($row=mysql_fetch_array($ret))
{

?>
<option value="<?php echo htmlentities($row['categoriaNoticia']);?>"><?php echo htmlentities($row['categoriaNoticia']);?></option>
<?php } ?>
<?php 
$ret=mysql_query("select * from category ");
while($row=mysql_fetch_array($ret))
{

?>
<option value="<?php echo htmlentities($row['categoryName']);?>"><?php echo htmlentities($row['categoryName']);?></option>

<?php   } ?>
</select>
</div>
</div>
									
<?php 

$query=mysql_query("select * from noticias where id='$pid'");
$cnt=1;
while($row=mysql_fetch_array($query))
{
  


?> 

<div class="control-group">
<label class="control-label" for="basicinput">Cuerpo de la noticia</label>
<div class="controls">
<textarea  name="cuerpoNoticia"  placeholder="Ingresar el cuerpo de la noticia" rows="6" class="span8 tip">
<?php echo htmlentities($row['cuerpoNoticia']);?>
</textarea>  
</div>
</div>
 <?php

          if($_SESSION["perfil"] =="Administrador" || $_SESSION["perfil"] =="Vendedor"){

             echo '
<div class="control-group" style="display:none;">
<label class="control-label" for="basicinput">Autor</label>
<div class="controls">
<input type="text" name="autorNoticia"  placeholder="Ingresar el autor" value="' .$_SESSION["nombre"].'" class="span8 tip" requerid>
</div>
</div>
';
}
?>
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
<p>Ejemplo: Copiar y pegar sólo la terminación resaltada https://www.youtube.com/watch?v=<strong style="color:#000;">LEWFAC1-LXY</strong></p>
</div>
</div>
</br>
 


<div class="control-group">
<label class="control-label" for="basicinput">Imagen de portada (Formato horizontal recomendado)
</label>
<div class="controls">
<img src="productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" width="200" height="100"> <a href="update-image1.php?id=<?php echo $row['id'];?>">Cambiar imagen</a>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Imagen 2</label>
<div class="controls">
<img src="productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage2']);?>" width="200" height="100"> <a href="update-image2.php?id=<?php echo $row['id'];?>">Cambiar imagen</a>
</div>
</div>
 
<div class="control-group">
<label class="control-label" for="basicinput">Imagen 3</label>
<div class="controls">
<img src="productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage3']);?>" width="200" height="100"> <a href="update-image3.php?id=<?php echo $row['id'];?>">Cambiar imagen</a>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Imagen 4</label>
<div class="controls">
<img src="productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage4']);?>" width="200" height="100"> <a href="update-image4.php?id=<?php echo $row['id'];?>">Cambiar imagen</a>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Imagen 5</label>
<div class="controls">
<img src="productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage5']);?>" width="200" height="100"> <a href="update-image5.php?id=<?php echo $row['id'];?>">Cambiar imagen</a>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Imagen 6</label>
<div class="controls">
<img src="productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage6']);?>" width="200" height="100"> <a href="update-image6.php?id=<?php echo $row['id'];?>">Cambiar imagen</a>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Imagen 7</label>
<div class="controls">
<img src="productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage7']);?>" width="200" height="100"> <a href="update-image7.php?id=<?php echo $row['id'];?>">Cambiar imagen</a>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Imagen 8</label>
<div class="controls">
<img src="productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage8']);?>" width="200" height="100"> <a href="update-image8.php?id=<?php echo $row['id'];?>">Cambiar imagen</a>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Imagen 9</label>
<div class="controls">
<img src="productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage9']);?>" width="200" height="100"> <a href="update-image9.php?id=<?php echo $row['id'];?>">Cambiar imagen</a>
</div>
</div>
<br>
 
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