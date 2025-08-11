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
if(strlen($_SESSION['perfil'])== "Administrador")
		{
header('location:https://www.redmoderna.com.ar/internomoderna');
}
else{
	$pid=intval($_GET['id']);// product id
if(isset($_POST['submit']))
{
	$categoryname=$_POST['categoryName'];
	$id=$_POST['idEntrada'];
    $productimage1=str_replace(" ", "",$_FILES["productimage1"]["name"]);
	$dir="productimages/$id";
	mkdir($dir);// directory creation for product images
 
	move_uploaded_file($_FILES["productimage1"]["tmp_name"],"productimages/$id/".$_FILES["productimage1"]["name"]);

$sql=mysql_query("insert into imagenes(categoryName,idEntrada,productImage1) values('$categoryname','$idEntrada','$productimage1')");
$_SESSION['msg']="¡Ingreso correcto!";

}
if(isset($_GET['del']))
		  {
		          mysql_query("delete from convenios where id = '".$_GET['pid']."'");
                  $_SESSION['delmsg']="Entrada eliminada!";
		  }



?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php include('include/titulo.php');?>  | Agregar Imagenes</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>

 <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
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

<style>
  #container-main{
    margin:30px auto;
    width:95%;
    min-width:320px;
    max-width:960px;
}

#container-main h1{
    font-size: 20px;
    text-shadow:4px 4px 5px #16a085;
}

.accordion-container {
    width: 85%;
    margin: 0 0 5px;
    clear:both;
}

.accordion-titulo {
    position: relative;
    display: block;
    padding: 20px;
    font-size: 15px;
    font-weight: 300;
    background: #2c3e50;
    color: #fff;
    text-decoration: none;
}
.accordion-titulo.open {
    background: #16a085;
    color: #fff;
}
.accordion-titulo:hover {
    background: #1abc9c;
    text-decoration:none;
}

.accordion-titulo span.toggle-icon:before {
    content:"+";
}

.accordion-titulo.open span.toggle-icon:before {
    content:"-";
}

.accordion-titulo span.toggle-icon {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 25px;
    font-weight:bold;
}

.accordion-content {
    display: none;
    padding: 20px;
    overflow: auto;
}

.accordion-content p{
    margin:0;
}

.accordion-content img {
    display: block;
    float: left;
    margin: 0 15px 10px 0;
    width: 50%;
    height: auto;
}


@media (max-width: 767px) {
    .accordion-content {
        padding: 10px 0;
    }
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
<?php $pid=intval($_GET['pid']); $query=mysql_query("select * from products where id = $pid");
while($row=mysql_fetch_array($query))
{?> 		<h3>Imagenes > <?php echo $row['productName'];?> | Prop <?php echo $row['id'];?> </h3>  <?php   } ?>
							</div>

							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Muy bien!</strong><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
									
								 
	<script language="javascript">
                window.history.back();
                </script>
									</div>
<?php } ?>
									 
	</div>    
									<br />
									
									<div id="container-main">
									    
<h3 style="text-align: center;">Agregar imagenes</h3>	
</br>
			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

<div class="control-group">
<label class="control-label" for="basicinput">Propiedad</label>
<div class="controls">
<select name="categoryName" id="categoryName" class="span8 tip" onChange="getSubcat(this.value);"  readonly>
 
<?php $pid=intval($_GET['pid']); $query=mysql_query("select * from products where id = $pid");
while($row=mysql_fetch_array($query))
{?>

<option value="<?php echo $row['id'];?>"><?php echo $row['productName'];?></option>
<?php } ?>
</select>
</div>
</div>

<?php 

$query=mysql_query("select * from products where id='$pid'");
$cnt=1;
while($row=mysql_fetch_array($query))
{
  


?>
<div class="control-group" style="display:none;">
<label class="control-label" for="basicinput">Nº Propiedad</label>
<div class="controls">
<input type="text"    name="idEntrada" id="idEntrada"   value="<?php echo $row['id'];?>" class="span8 tip" readonly>
</div>
</div>									
 <?php } ?>

<div class="control-group">
<label class="control-label" for="basicinput">Agregar Imagen</label>
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
<h3 style="text-align: center;">Imagenes ingresadas</h3>	
</br>
   <?php 
$pid=intval($_GET['pid']);
$ret=mysql_query("select * from imagenes where categoryName = $pid  ");
$num=mysql_num_rows($ret);
if($num>0)
{
while ($row=mysql_fetch_array($ret)) 
{?>	
<div style="display:inline-block;" >
<div >
 
<div>
<a href="editar-imagen.php?pid=<?php echo $row['categoryName']?>&pib=<?php echo $row['id']?>" ><img   src="productimages/<?php echo htmlentities($row['categoryName']);?>/<?php echo htmlentities($row['productImage1']);?>" width="200" height="100">   <button class="btn btn-danger"> Cambiar</button>
 </div>
 <br>
</div>
            
             

     	
   	  <?php } } else {?>
	 
		 <div class="alert alert-info" role="alert"><h3>Aún no hay imagenes cargadas.</h3></div>
	 
        
		
<?php } ?>	
</div>    
    
   
    
     
  
    
 
   
</div>
	 	<br /> 
	 	
	  			

							</div>
						</div>
	</div></div>

	
						
						
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