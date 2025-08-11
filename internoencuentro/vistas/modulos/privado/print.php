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
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Listado Imprimir </title>
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="../main.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Khula' rel='stylesheet' type='text/css'>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="../admin/img/favicon.png" /> 

<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<script language='javascript' type='text/javascript'>
var arriba;
function subir() {
if (document.body.scrollTop != 0 || document.documentElement.scrollTop != 0) {
window.scrollBy(0, -15);
arriba = setTimeout('subir()', 8);
}
else clearTimeout(arriba);
}
</script>
 <script type="text/javascript">
function imprSelec(imp)
{var ficha=document.getElementById(imp);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();}
</script> 
<style>
#contenedor{
	text-align:center;
	font-family:Arial, Helvetica, sans-serif;
	
}
#imp-1{
	text-align:left;
	
		
}
</style>
        

</head>
            <!--FAE - Federico Echevarria - Desarollo web - Webmaster-->
<body> <p><a style="text-align:left;" href="javascript:imprSelec('imp')" class="btn btn-success pull-left"><span class="glyphicon glyphicon-print"></span>Imprimir</a></p><p style="text-align:right;"><a  href="panel.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span>Volver</a></p>
<br><br>
<div id="imp">
<img width="118" height="70" src="images/logo.png">
<?php 
$ret=mysql_query("select * from informacion");
$num=mysql_num_rows($ret);
if($num>0)
{
while ($row=mysql_fetch_array($ret)) 
{?>
<p style="font-size: 10px; line-height:-20px;"><?php echo $row['datoDireccion'];?></p>
<p style="font-size: 10px;line-height:-20px;"><?php echo $row['datoTelefono'];?></p>

           <?php } } else {?>
	 
		 <div style="display:none;" class="alert alert-info" role="alert"><h3>Aún no hay videos.</h3></div>
	 
        
		
<?php } ?>
<p style="font-size: 10px;line-height:-20px;">www.inmobiliarialedesma.com</p>
<?php $fecha = date('j-m-Y'); echo "<p align='right' style='margin-top:-25px'>$fecha</p>" ;?> 
<h2 align="center" style="font-family:Arial, Helvetica, sans-serif;"><font color="#000000">LISTADO TOTAL DE PROPIEDADES CARGADAS</font></h2>
<br>
<?php 
$ret=mysql_query("select * from products   ");
while($row=mysql_fetch_array($ret))
{

?>

<div id="contenedor" style="font-family:Arial, Helvetica, sans-serif; font-size:16px;">




<p align="center" style="font-size:20px;"><strong><?php echo htmlentities($row['productName']);?> </strong> </p>



<div id="imp-1" >

<p><strong>Nº de propiedad:</strong><?php echo htmlentities($row['id']);?>  </p>
<p><strong>Dirección:</strong>  <?php echo htmlentities($row['productCompany']);?>  </p>
<p><strong>Habitaciones:</strong>  <?php echo htmlentities($row['cantidadHabitaciones']);?>  </p>
<p><strong>Baños:</strong>  <?php echo htmlentities($row['cantidadBanos']);?>  </p>
<p><strong>Espacio Edificación:</strong>  <?php echo htmlentities($row['productName2']);?> m² </p>
<p><strong>Espacio Lote:</strong>  <?php echo htmlentities($row['productName3']);?> m² </p>
<p><strong>Estado:</strong>  <?php if($row['category2']==1)
											{
												echo "En Venta";
											}
											else
											{
												echo "En Alquiler";
											}

											?>  </p>
<p><strong>Valor:</strong>  <?php echo htmlentities($row['productPrice']);?></p>
<p><strong>Descripción:</strong>  <?php echo $row['productDescription'];?></p>
<img id="logo-detalle" src="productimages/<?php echo htmlentities($row['productImage1']);?>" data-echo="productimages/<?php echo htmlentities($row['productImage1']);?>"  width="100" height="100" alt="" title="<?php echo htmlentities($row['productName']);?>">
<p>------------------------------------------------------------------------------------------------------------------------</p>
</div></div>
<?php   } ?>
	</div>
</body>
</html>