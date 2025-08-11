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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
<title>Ficha Imprimir </title>

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
<script src="../script.js"></script>
<script type="text/javascript">
function imprSelec(imp)
{var ficha=document.getElementById(imp);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();}
</script> 
<script>
    function pruebaDivAPdf() {
        var pdf = new jsPDF('p', 'pt', 'letter');
        source = $('#imp')[0];

        specialElementHandlers = {
            '#bypassme': function (element, renderer) {
                return true
            }
        };
        margins = {
            top: 80,
            bottom: 60,
            left: 40,
            width: 522
        };

        pdf.fromHTML(
            source, 
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width, 
                'elementHandlers': specialElementHandlers
            },

            function (dispose) {
                pdf.save('comercio.pdf');
            }, margins
        );
    }
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
<body> 
<p style="text-align:left;"><a href="javascript:imprSelec('imp')"  title="Click para imprimir ficha" class="btn btn-success pull-left"><span class="glyphicon glyphicon-print"></span>Imprimir</a><p>
<!--<p><a href="javascript:pruebaDivAPdf()" class="button">Pasar a PDF</a></p>-->
<?php 
$ret=mysql_query("select * from products where id='$pid' ");
while($row=mysql_fetch_array($ret))
{

?><p style="text-align:right;"><a  href="panel.php?pid=<?php echo htmlentities($row['id']);?>" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span>Volver</a><?php   } ?></p><br><br>
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
<p style="font-size: 10px;line-height:-20px;">www.inmobiliariaricardoalfonso.com.ar</p>
<?php $fecha = date('j-m-Y'); echo "<p align='right' style='margin-top:-25px'>$fecha</p>" ;?> 

<?php 
$pid=intval($_GET['pid']);// product id
$ret=mysql_query("select * from products where id='$pid' ");
while($row=mysql_fetch_array($ret))
{

?>

<div id="contenedor" style="font-family:Arial, Helvetica, sans-serif; font-size:16px;">



<br><br>
<h3 align="center" ><strong><?php echo html_entity_decode($row['productName']);?> </strong> </h3>

<br><br>

<div id="imp-1" >

<p><strong>Nº de propiedad:</strong><?php echo html_entity_decode($row['id']);?>  </p>
<p><strong>Dirección:</strong>  <?php echo html_entity_decode($row['productCompany']);?>  </p>
<p><strong>Habitaciones:</strong>  <?php echo html_entity_decode($row['cantidadHabitaciones']);?>  </p>
<p><strong>Baños:</strong>  <?php echo html_entity_decode($row['cantidadBanos']);?>  </p>
<p><strong>Espacio Edificación:</strong>  <?php echo html_entity_decode($row['productName2']);?> m² </p>
<p><strong>Espacio Lote:</strong>  <?php echo html_entity_decode($row['productName3']);?> m² </p>
<p><strong>Estado:</strong>  <?php if($row['category2']==1)
											{
												echo "En Venta";
											}
											else
											{
												echo "En Alquiler";
											}

											?>  </p>
<p><strong>Valor:</strong>  <?php echo html_entity_decode($row['productPrice']);?></p>
<p><strong>Descripción:</strong>  <?php echo html_entity_decode ($row['productDescription']);?></p>

<img id="logo-detalle" src="productimages/<?php echo html_entity_decode($row['productImage1']);?>" data-echo="productimages/<?php echo html_entity_decode($row['productImage1']);?>"  width="100" height="100" alt="" title="<?php echo html_entity_decode($row['productName']);?>">

</div></div>
<?php   } ?>
	</div>
</body>
</html>