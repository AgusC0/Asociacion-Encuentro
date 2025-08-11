<?php
session_start();
$cid=intval($_GET['cid']);
include("include/config.php");
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
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
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Khula' rel='stylesheet' type='text/css'>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="../admin/img/favicon.png" /> 
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
<body> <p><a style="text-align:left;" href="javascript:imprSelec('imp')" class="btn btn-success pull-left"><span class="glyphicon glyphicon-print"></span>Imprimir</a></p><p style="text-align:right;"><a  href="category.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span>Volver</a></p>
<br><br>
<div id="imp">

<img width="148" height="53" src="images/logo.png">
<?php $fecha = date('j-m-Y'); echo "<p align='right' style='margin-top:-25px'>$fecha</p>" ;?> 




  <?php $sql=mysql_query("select categoryName  from category where id='$cid'");
while($row=mysql_fetch_array($sql))
{
    ?>
<h2 align="center" style="font-family:Arial, Helvetica, sans-serif;"><font color="#000000">Listado de <?php echo htmlentities($row['categoryName']);?>
</font>| INTERNO</h2><?php } ?>

<br>
<?php 
$ret=mysql_query("select * from products where category='$cid' ");
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
<p><strong>Espacio Edificiación:</strong>  <?php echo htmlentities($row['productName2']);?> m² </p>
<p><strong>Espacio lote:</strong>  <?php echo htmlentities($row['productName3']);?> m² </p>
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
<p><strong>Propietario:</strong>  <?php echo $row['productPropietario'];?></p>
<p><strong>Telefono propietario:</strong>  <?php echo htmlentities($row['productName4']);?> </p>
<p><strong>Descripción:</strong>  <?php echo $row['productDescription'];?></p>
<p><strong>Comentario:</strong>  <?php echo $row['productComentario'];?></p>
<img id="logo-detalle" src="productimages/<?php echo htmlentities($row['productImage1']);?>" data-echo="productimages/<?php echo htmlentities($row['productImage1']);?>"  width="100" height="100" alt="" title="<?php echo htmlentities($row['productName']);?>">
<p>------------------------------------------------------------------------------------------------------------------------------</p>
</div></div>
<?php   } ?>
	</div>
</body>
</html>