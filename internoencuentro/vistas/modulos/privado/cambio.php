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
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

if(isset($_GET['del']))
		  {
		          mysql_query("delete from products where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Vehículo eliminado !!";
		  }

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ERP Red Moderna | Administrar </title>
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
								<h3>Administrar Cargas</h3>
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
										 
											<th>Nombre de OS/ART</th>
											<th>Categoría</th>
											
                                            <th>Cobertura</th>
                                            <th>Descuento</th>
                                            <th>Estado</th>
											<!--<th>Fecha de carga</th>-->
										</tr>
									</thead>
									<tbody>

<?php $query=mysql_query("select products.*,category.categoryName from products join category on category.id=products.category  ORDER BY productname ASC ");
$cnt=1;

while($row=mysql_fetch_array($query))
{
?>	 								<tr>
                                            <td>
												<?php
                                        $nro=  ($row['id']);
                                        $operacion = ($row['category']);
                                     
                                        if($operacion == "7")
                                        {
                                        echo "<a href='editar-obrasocial.php?id=$nro' ><i title='Editar' class='icon-edit'></i>  </a>";
                                        } else {
                                         echo "<a href='editar-art.php?id=$nro' ><i title='Editar' class='icon-edit'></i> </a>  ";
                                        }

                                        ?> 
											<!--<a href="editar-vehiculo.php?id=<?php echo $row[ id ]?>" ><i title="Editar service" class="icon-edit"></i></a>-->
                                             
                                             <a href="imprimir-ficha.php?pid=<?php echo $row['id']?>" ><i title="Imprimir ficha" class="icon-print"></i></a>
											<a href="panel.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Estas seguro que quieres eliminar la carga de la base de datos?')"><i title="Eliminar carga" class="icon-remove-sign"></i></a></td>
										 
											<td><?php echo htmlentities($row['productName']);?></td>
											<td><?php echo htmlentities($row['categoryName']);?></td>
									
                                            <td><?php echo htmlentities($row['tipoCobert']);?>%</td>
                                            <td><?php echo htmlentities($row['tipoDescuento']);?>%</td>
                                            <td><?php echo htmlentities($row['estadoVigencia']);?></td>
											<!--<td><?php echo htmlentities($row['fechaVigencia']);?></td>-->
											
										</tr>
										<?php $cnt=$cnt+1; } ?>
										
								</table>
							</div>
						</div>						
	<a href="print.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> IMPRIMIR LISTADO TOTAL</a>	
    <br><br>
		
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