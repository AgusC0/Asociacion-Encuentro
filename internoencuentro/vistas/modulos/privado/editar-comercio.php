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
    $nombreComercio = $_POST['nombreComercio'];
    $rubroComercio = $_POST['rubroComercio'];   
    $descuentoComercio = $_POST['descuentoComercio'];
    $direccionComercio = $_POST['direccionComercio'];
    $textoComercio = $_POST['textoComercio'];
 
	$query=mysql_query("select nombreComercio from comercios where id='pid'");
	$result=mysql_fetch_row($query);
	$pname=$result['nombreComercio'];
	
rename("imagenes_comercios/$pname","imagenes_comercios/$productname");
$sql=mysql_query("update comercios set nombreComercio='$nombreComercio',rubroComercio='$rubroComercio',descuentoComercio='$descuentoComercio',direccionComercio='$direccionComercio',textoComercio='$textoComercio' where id='$pid' ");
$_SESSION['msg']="Comercio actualizado exitosamente !!";

}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php include('include/titulo.php');?>  | Editar comercio</title>
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
								<h3>Editar Comercio</h3>
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

$query=mysql_query("select * from comercios where id='$pid'");
$cnt=1;
while($row=mysql_fetch_array($query))
{
  


?>
 
 


 
 
<div class="control-group">
<label class="control-label" for="basicinput">Nombre del comercio</label>
<div class="controls">
<input type="text" name="nombreComercio"  placeholder="Ingresar el nombre del comercio" value="<?php echo htmlentities($row['nombreComercio']);?>" class="span8 tip" requerid>
</div>
</div>

 <?php   } ?>
<div class="control-group">
    <label class="control-label" for="basicinput">Categoría</label>
    <div class="controls">
        <select name="rubroComercio" id="rubroComercio" class="span8 tip" required>
            <?php 
            // Obtener el rubro actual del comercio
            $ret = mysql_query("SELECT rubroComercio FROM comercios WHERE id='$pid'");
            $comercioActual = mysql_fetch_array($ret);
            $rubroActual = $comercioActual['rubroComercio'];

            // Obtener todos los rubros disponibles
            $retRubros = mysql_query("SELECT * FROM rubros");
            while ($row = mysql_fetch_array($retRubros)) {
                // Si el id del rubro coincide con el del comercio, marcarlo como seleccionado
                $selected = ($row['id'] == $rubroActual) ? "selected" : "";
            ?>
                <!-- Guardar el ID del rubro y mostrar el nombre -->
                <option value="<?php echo htmlentities($row['id']); ?>" <?php echo $selected; ?>>
                    <?php echo htmlentities($row['nombreRubro']); ?>
                </option>
            <?php } ?>
        </select>
    </div>
</div>


									
<?php 

$query=mysql_query("select * from comercios where id='$pid'");
$cnt=1;
while($row=mysql_fetch_array($query))
{
  


?> 


<div class="control-group">
<label class="control-label" for="basicinput">Descuento</label>
<div class="controls">
<input type="text" name="descuentoComercio"  placeholder="Ingresar el descuento" value="<?php echo htmlentities($row['descuentoComercio']);?>" class="span8 tip" requerid>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Dirección del comercio</label>
<div class="controls">
<input type="text" name="direccionComercio"  placeholder="Ingresar la dirección del comercio" value="<?php echo htmlentities($row['direccionComercio']);?>" class="span8 tip" requerid>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Descripción e info</label>
<div class="controls">
<textarea  name="textoComercio"  placeholder="Ingresar descripción e info" rows="6" class="span8 tip">
<?php echo htmlentities($row['textoComercio']);?>
</textarea>  
</div>
</div>
 
 

 
 


<div class="control-group">
<label class="control-label" for="basicinput">Logo
</label>
<div class="controls">
<img src="../../../../imagenes_comercios/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['imagenComercio']);?>" width="200" height="100"> <a href="update-image-comercio.php?id=<?php echo $row['id'];?>">Cambiar imagen</a>
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