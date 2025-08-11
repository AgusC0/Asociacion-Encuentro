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
    $nombreComercio = $_POST['nombreComercio'];
    $rubroComercio = $_POST['rubroComercio'];   
    $descuentoComercio = $_POST['descuentoComercio'];
    $direccionComercio = $_POST['direccionComercio'];
    $textoComercio = $_POST['textoComercio'];
	$productimage1=$_FILES["productimage1"]["name"];
  
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
 
    $dir="../../../../imagenes_comercios/$id"; 
	mkdir($dir);// directory creation for product images
	move_uploaded_file($_FILES["productimage1"]["tmp_name"],"../../../../imagenes_comercios/$id/$nuevoNameFoto");
 
 
$sql=mysql_query("insert into comercios (nombreComercio,rubroComercio,descuentoComercio,direccionComercio,textoComercio,imagenComercio) values('$nombreComercio', '$rubroComercio', '$descuentoComercio', '$direccionComercio', '$textoComercio', '$nuevoNameFoto')");
$_SESSION['msg']="Comercio agregado exitosamente!";

}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php include('include/titulo.php');?>  | Agregar Comercio</title>
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
								<h3>Agregar nuevo comercio</h3>
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

<?php $query=mysql_query("SELECT MAX(id)+1 ultimo FROM comercios ");
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
<label class="control-label" for="basicinput">Nombre del Comercio</label>
<div class="controls">
<input type="text" name="nombreComercio"  placeholder="Ingresar el nombre del comercio" class="span8 tip" required>
</div>
</div>
 

<div class="control-group">
<label class="control-label" for="basicinput">Categoría</label>
<div class="controls">
<select name="rubroComercio" class="span8 tip" onChange="getSubcat(this.value);"  required>
<option value="">Seleccionar Categoría</option> 
<?php $query=mysql_query("select * from rubros ");
while($row=mysql_fetch_array($query))
{?>

<option value="<?php echo $row['id'];?>"><?php echo $row['nombreRubro'];?></option>
<?php } ?>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Descuento</label>
<div class="controls">
<input type="text" name="descuentoComercio"  placeholder="Ingresar el descuento" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Dirección del Comercio</label>
<div class="controls">
<input type="text" name="direccionComercio"  placeholder="Ingresar la dirección del comercio" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Descripción del Comercio</label>
<div class="controls">
<textarea  name="textoComercio"  placeholder="Ingresar info del comercio" rows="6" class="span8 tip">
</textarea>  
</div>
</div>

 
 

<div class="control-group">
<label class="control-label" for="basicinput">Logo</label>
<div class="controls">
<input type="file" name="productimage1" id="productimage1" value="" class="span8 tip" required>
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