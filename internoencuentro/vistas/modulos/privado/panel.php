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
date_default_timezone_set('America/Argentina/Buenos_Aires');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

if(isset($_GET['del']))
		  {
		          mysql_query("delete from noticias where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Entrada eliminada!";
		  }

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Encuentro Comunitario | Administrar Noticias</title>
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
								<h3>Administrar Noticias</h3>
							</div>
							<div class="module-body table">
	<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong></strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

							
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display " width="100%">
									<thead>
										<tr>
                                            <th>Acción</th>
											<th>ID</th>
											<th>Título</th>
											<th>Categoría</th>
										    <th>Autor</th>
                                            <th>Fecha de carga</th>
										</tr>
									</thead>
									<tbody>

<?php $query=mysql_query("select * from noticias order by id DESC");
$cnt=1;
while($row=mysql_fetch_array($query))
{
?>											
										<tr>
                                            <td>
											<a href="editar-noticia.php?id=<?php echo $row['id']?>" ><i title="Editar noticia" class="icon-edit"></i></a>
                                             
											<a href="panel.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Estas seguro que quieres eliminar la noticia de la base de datos??')"><i title="Eliminar noticia" class="icon-remove-sign"></i></a></td>
											<td><?php echo htmlentities($row['id']);?></td>
											<td><?php echo htmlentities($row['tituloNoticia']);?></td>
											<td><?php echo htmlentities($row['categoriaNoticia']);?></td>
											<td> <?php echo htmlentities($row['autorNoticia']);?></td>
											<td><?php echo htmlentities($row['fechaNoticia']);?></td>
                                         
										</tr>
										<?php $cnt=$cnt+1; } ?>
										
								</table>
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