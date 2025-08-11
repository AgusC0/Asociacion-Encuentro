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
if(isset($_POST['submit']))
{
    $id=$_POST['urlNotificacion'];
	$titulonoticia=$_POST['tituloNoticia'];
	$copetenoticia=$_POST['copeteNoticia'];
	$categorianoticia=$_POST['categoriaNoticia'];
	$cuerponoticia=$_POST['cuerpoNoticia'];
	$autornoticia=$_POST['autorNoticia'];
	$fechanoticia=$_POST['fechaNoticia'];
    $videoyoutube=$_POST['videoYoutube'];
	$productimage1=$_FILES["productimage1"]["name"];
	$productimage2=$_FILES["productimage2"]["name"];
	$productimage3=$_FILES["productimage3"]["name"];
	$productimage4=$_FILES["productimage4"]["name"];
	$productimage5=$_FILES["productimage5"]["name"];
	$productimage6=$_FILES["productimage6"]["name"];
	$productimage7=$_FILES["productimage7"]["name"];
	$productimage8=$_FILES["productimage8"]["name"];
	$productimage9=$_FILES["productimage9"]["name"];
    $filename= $_FILES['productimage1']['name'];
    $sourceFoto= $_FILES['productimage1']['tmp_name'];
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    setlocale(LC_ALL,"es_ES");
    $fecha_imagen= date("d/m/Y h:i A");
    $logitudPass= 10;
    $newNameFoto= substr( md5(microtime()), 1, $logitudPass);
    $explode= explode('.', $filename);
    $extension_foto = array_pop($explode);
    $nuevoNameFoto  = $newNameFoto.'.'.$extension_foto;
    $filename2= $_FILES['productimage2']['name'];
    $sourceFoto2= $_FILES['productimage2']['tmp_name'];
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    setlocale(LC_ALL,"es_ES");
    $fecha_imagen2= date("d/m/Y h:i A");
    $logitudPass2= 10;
    $newNameFoto2= substr( md5(microtime()), 1, $logitudPass2);
    $explode2= explode('.', $filename2);
    $extension_foto2 = array_pop($explode2);
    $nuevoNameFoto2  = $newNameFoto2.'.'.$extension_foto2;
       $filename3= $_FILES['productimage3']['name'];
    $sourceFoto3= $_FILES['productimage3']['tmp_name'];
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    setlocale(LC_ALL,"es_ES");
    $fecha_imagen3= date("d/m/Y h:i A");
    $logitudPass3= 10;
    $newNameFoto3= substr( md5(microtime()), 1, $logitudPass3);
    $explode3= explode('.', $filename3);
    $extension_foto3 = array_pop($explode3);
    $nuevoNameFoto3  = $newNameFoto3.'.'.$extension_foto3;
       $filename4= $_FILES['productimage4']['name'];
    $sourceFoto3= $_FILES['productimage4']['tmp_name'];
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    setlocale(LC_ALL,"es_ES");
    $fecha_imagen4= date("d/m/Y h:i A");
    $logitudPass4= 10;
    $newNameFoto4= substr( md5(microtime()), 1, $logitudPass4);
    $explode4= explode('.', $filename4);
    $extension_foto4 = array_pop($explode4);
    $nuevoNameFoto4  = $newNameFoto4.'.'.$extension_foto4;
       $filename5= $_FILES['productimage5']['name'];
    $sourceFoto5= $_FILES['productimage5']['tmp_name'];
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    setlocale(LC_ALL,"es_ES");
    $fecha_imagen5= date("d/m/Y h:i A");
    $logitudPass5= 10;
    $newNameFoto5= substr( md5(microtime()), 1, $logitudPass5);
    $explode5= explode('.', $filename5);
    $extension_foto5= array_pop($explode5);
    $nuevoNameFoto5  = $newNameFoto5.'.'.$extension_foto5;
       $filename6= $_FILES['productimage6']['name'];
    $sourceFoto6= $_FILES['productimage6']['tmp_name'];
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    setlocale(LC_ALL,"es_ES");
    $fecha_imagen6= date("d/m/Y h:i A");
    $logitudPass6= 10;
    $newNameFoto6= substr( md5(microtime()), 1, $logitudPass6);
    $explode6= explode('.', $filename6);
    $extension_foto6 = array_pop($explode6);
    $nuevoNameFoto6  = $newNameFoto6.'.'.$extension_foto6;
       $filename7= $_FILES['productimage7']['name'];
    $sourceFoto7= $_FILES['productimage7']['tmp_name'];
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    setlocale(LC_ALL,"es_ES");
    $fecha_imagen7= date("d/m/Y h:i A");
    $logitudPass7= 10;
    $newNameFoto7= substr( md5(microtime()), 1, $logitudPass7);
    $explode7= explode('.', $filename7);
    $extension_foto7 = array_pop($explode7);
    $nuevoNameFoto7  = $newNameFoto7.'.'.$extension_foto7;
       $filename8= $_FILES['productimage8']['name'];
    $sourceFoto8= $_FILES['productimage8']['tmp_name'];
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    setlocale(LC_ALL,"es_ES");
    $fecha_imagen8= date("d/m/Y h:i A");
    $logitudPass8= 10;
    $newNameFoto8= substr( md5(microtime()), 1, $logitudPass8);
    $explode8= explode('.', $filename8);
    $extension_foto8 = array_pop($explode8);
    $nuevoNameFoto8  = $newNameFoto8.'.'.$extension_foto8;
       $filename9= $_FILES['productimage9']['name'];
    $sourceFoto9= $_FILES['productimage9']['tmp_name'];
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    setlocale(LC_ALL,"es_ES");
    $fecha_imagen9= date("d/m/Y h:i A");
    $logitudPass9= 10;
    $newNameFoto9= substr( md5(microtime()), 1, $logitudPass9);
    $explode9= explode('.', $filename9);
    $extension_foto9 = array_pop($explode9);
    $nuevoNameFoto9  = $newNameFoto9.'.'.$extension_foto9;
	$dir="productimages/$id";
	mkdir($dir);// directory creation for product images
	move_uploaded_file($_FILES["productimage1"]["tmp_name"],"productimages/$id/$nuevoNameFoto");
	move_uploaded_file($_FILES["productimage2"]["tmp_name"],"productimages/$id/$nuevoNameFoto2");
	move_uploaded_file($_FILES["productimage3"]["tmp_name"],"productimages/$id/$nuevoNameFoto3");
	move_uploaded_file($_FILES["productimage4"]["tmp_name"],"productimages/$id/$nuevoNameFoto4");
	move_uploaded_file($_FILES["productimage5"]["tmp_name"],"productimages/$id/$nuevoNameFoto5");
	move_uploaded_file($_FILES["productimage6"]["tmp_name"],"productimages/$id/$nuevoNameFoto6");
	move_uploaded_file($_FILES["productimage7"]["tmp_name"],"productimages/$id/$nuevoNameFoto7");
	move_uploaded_file($_FILES["productimage8"]["tmp_name"],"productimages/$id/$nuevoNameFoto8");
	move_uploaded_file($_FILES["productimage9"]["tmp_name"],"productimages/$id/$nuevoNameFoto9");
 
$sql=mysql_query("insert into noticias(tituloNoticia,copeteNoticia,categoriaNoticia,cuerpoNoticia,autorNoticia,fechaNoticia,videoYoutube,productImage1,productImage2,productImage3,productImage4,productImage5,productImage6,productImage7,productImage8,productImage9) values('$titulonoticia','$copetenoticia','$categorianoticia','$cuerponoticia','$autornoticia','$fechanoticia','$videoyoutube','$nuevoNameFoto','$nuevoNameFoto2','$nuevoNameFoto3','$nuevoNameFoto4','$nuevoNameFoto5','$nuevoNameFoto6','$nuevoNameFoto7','$nuevoNameFoto8','$nuevoNameFoto9')");
$_SESSION['msg']="Noticia ingresada exitosamente !!";

}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php include('include/titulo.php');?>  | Agregar Propiedad</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

   <script>
function getSubcat(val) {
	$.ajax({
	type: "POST",
	url: "get_subcat.php",
	data:'cat_id='+val,
	success: function(data){
		$("#subcategory").html(data);
	}
	});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>	


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
								<h3>Agregar nueva noticia</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<script language="javascript">
                                    window.location.href="panel.php";
                                    </script>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Atención!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">


 
<?php $query=mysql_query("SELECT MAX(id)+1 ultimo FROM noticias ");
$cnt=1;
while($row=mysql_fetch_array($query))
{
?>	

<div class="control-group" style="display:none;">
<label class="control-label" for="basicinput">ID Oculto</label>
<div class="controls">
<input type="text"    name="urlNotificacion"  placeholder="" value="<?php echo html_entity_decode($row['ultimo']);?>" class="span8 tip" requerid>
</div>
</div>
<?php } ?>
</br>

 

<div class="control-group">
<label class="control-label" for="basicinput">Título de la noticia</label>
<div class="controls">
<input type="text" name="tituloNoticia"  placeholder="Ingresar el título de la noticia" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Resumen de la noticia (MÁX. 200 CARACTERES)</label>
<div class="controls">
<textarea  name="copeteNoticia"  placeholder="Ingresar resumen de la noticia. MÁXIMO 200 CARÁCTERES" rows="6" class="span8 tip">
</textarea>  
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Categoría</label>
<div class="controls">
<select name="categoriaNoticia" class="span8 tip" onChange="getSubcat(this.value);"  required>
<option value="">Seleccionar Categoría</option> 
<?php $query=mysql_query("select * from category ");
while($row=mysql_fetch_array($query))
{?>

<option value="<?php echo $row['categoryName'];?>"><?php echo $row['categoryName'];?></option>
<?php } ?>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Cuerpo de la noticia</label>
<div class="controls">
<textarea  name="cuerpoNoticia"  placeholder="Ingresar cuerpo de la noticia" rows="6" class="span8 tip">
</textarea>  
</div>
</div>


	 <?php

          if($_SESSION["perfil"] =="Administrador" || $_SESSION["perfil"] =="Vendedor"){

             echo '<div class="control-group" style="display:none;">
<label class="control-label" for="basicinput">Autor</label>
<div class="controls">
<input type="text"    name="autorNoticia" value="' .$_SESSION["nombre"].'" placeholder="Ingresar autor" class="span8 tip" required>
</div>
</div> ';
}
?>

 

 <div class="control-group" style="display:none;">
<label class="control-label" for="basicinput">Fecha Noticia</label>
<div class="controls">
<input type="datetime" name="fechaNoticia"  value="<?php echo date("Y-m-d");?>"  class="span8 tip" required>
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Video (link de YouTube)</label>
<div class="controls">
<input type="text"    name="videoYoutube"  placeholder="Ingresar link de YouTube" class="span8 tip" norequired>
<br>
<p>Ejemplo: Copiar y pegar sólo la terminación resaltada https://www.youtube.com/watch?v=<strong>LEWFAC1-LXY</strong></p>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Imagen 1 - Portada (Formato horizontal recomendado)</label>
<div class="controls">
<input type="file" name="productimage1" id="productimage1" value="" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Imagen 2</label>
<div class="controls">
<input type="file" name="productimage2" id="productimage2" value="" class="span8 tip">
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Imagen 3</label>
<div class="controls">
<input type="file" name="productimage3" id="productimage3" value="" class="span8 tip">
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Imagen 4</label>
<div class="controls">
<input type="file" name="productimage4" id="productimage4" value="" class="span8 tip" >
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Imagen 5</label>
<div class="controls">
<input type="file" name="productimage5" id="productimage5" value="" class="span8 tip">
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Imagen 6</label>
<div class="controls">
<input type="file" name="productimage6" id="productimage6" value="" class="span8 tip" >
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Imagen 7</label>
<div class="controls">
<input type="file" name="productimage7" id="productimage7" value="" class="span8 tip" >
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Imagen 8</label>
<div class="controls">
<input type="file" name="productimage8" id="productimage8" value="" class="span8 tip" >
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Imagen 9</label>
<div class="controls">
<input type="file" name="productimage9" id="productimage9" value="" class="span8 tip" >
</div>
</div>
 


 

	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Agregar</button>
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