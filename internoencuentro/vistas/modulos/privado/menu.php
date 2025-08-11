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
header('location:https://www.encuentrocomunitario.com.ar/internoalfonso');
}
else{
date_default_timezone_set('America/Argentina/Buenos_Aires');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

if(isset($_GET['del']))
		  {
		          mysql_query("delete from products where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Entrada eliminada !!";
		  }

?>
<style>
*
{ 
   margin:0px; 
   padding:0px; 
   box-sizing:border-box; 
   -moz-box-sizing:border-box; 
   -ms-box-sizing:border-box; 
   -o-box-sizing:border-box; 
   -webkit-box-sizing:border-box;

}
#contenedor-home{ 
  max-width:98.5%;

}
#contenedor-footer{ 
  margin-top:0%;

}
.card {
  background-color: #FFF;
  color: white;
  padding: 4rem;
  height: 15rem;
 
}
.card2 {
  background-color: #0d8548;
  color: white;
  padding: 2rem;
  text-decoration: none;
  height: 26rem;
  box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}
.card2:hover {
  background-color: #169e59;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  text-decoration: none;

}
.cards {
  max-width: 1000px;
  margin: 0 auto;
  display: grid;
  grid-gap: 1rem;
  text-align: center;  margin-left:-10px;
  text-decoration: none;
}

/* Screen larger than 600px? 2 column */
@media (min-width: 600px) {
  .cards { grid-template-columns: repeat(2, 1fr); }
  
}

/* Screen larger than 900px? 3 columns */
@media (min-width: 900px) {
  .cards { grid-template-columns: repeat(2, 1fr); }
}
.item{
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 3rem;
}

#item5, #item6, #item7{
    color: #000;
}

/********************************************************
********************* TABLET VIEW ***********************
********************************************************/
@media (max-width: 719px){
   
   
    #item1{
  
        grid-row: 1;
        grid-column-start: 1;
        grid-column-end: 2;
        color:#000;
 
    }
     #item1 strong, b {
    color: #000;
     }
  
  

}
}
/********************************************************
********************* TABLET VIEW ***********************
********************************************************/
@media (min-width: 720px) and (max-width: 1023px){
    #container{
        display: grid;
        width: 100%;
        height: 20vh;
        margin: 0;
        padding: 0;
        grid-template-columns: 20% 60% 20%; /*3 columnas 20% 60% 20%*/
        grid-template-rows: 10% 25% 25% 20% 20%; /*5 filas de 10% 30% 20% 20% 20%*/
    }

    #item1{
        color:#000;
        grid-row: 1;
        grid-column-start: 1;
        grid-column-end: 4;
    }
     #item1 strong, b {
    color: #000;
     }
   
}

/********************************************************
******************* DESKTOP VIEW ************************
********************************************************/
@media (min-width: 1024px) {
    #container{
        display: grid;
        width: 100%;
        height: 100vh;
        margin: 0;
        padding: 0;
        grid-template-columns: 34% 0% 65% 0%; /*4 columnas de 25 % cada una*/
        padding-top:-50%;
        
    }

    #col-sm-4{
        background-color: #5d5c5c;
        text-align:center;
        height: 84vh;
        color: #FFF; 
     
    }
        #col-sm-8{
    
        text-align:center;
        margin-top: 1.5%;
     
     
    }
       #col-sm-4 p{
        
        color: #FFF; 
        margin-top:45%;
     
    }
    #col-sm-4 strong, b {
    color: #FFF;
}
    #item2{
 
        grid-row: 1; /* fila1 */
        grid-column-start: 2; /* coge de la columna 2 */
        grid-column-end: 5; /* hasta la columna 5 (la columna 5 no incluida) */
        margin-top:-10%;
 
    }

    #item3{
        background-color: #4685C4;
        grid-row: 2; /* fila2 */
        grid-column-start: 1; /* coge de la columna 1 */
        grid-column-end: 5; /* hasta la columna 5 (la columna 5 no incluida) */
    }

    #item3{
        background-color: #4685C4;
        grid-row: 2; /* fila2 */
        grid-column-start: 1; /* coge de la columna 1 */
        grid-column-end: 5; /* hasta la columna 5 (la columna 5 no incluida) */
    }

    #item4{
        background-color: #223349;
        grid-row-start: 3;
        grid-row-end: 5;
        grid-column-start: 1;
        grid-column-end: 3;
    }

    #item5{
        background-color: #BEE3E5;
        grid-row: 3;
        grid-column-start: 4;
        grid-column-end: 4;
    }

    #item6{
        background-color: #47BD99;
        grid-row: 4;
        grid-column-start: 4;
        grid-column-end: 4;
    }

    #item7{

        background-color: #FFD170;
        grid-row: 5;
        grid-column-start: 1;
        grid-column-end: 5;
    }
}
</style>
 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php include('include/titulo.php');?>  - CMS</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link href="images/favicon.png" rel="icon">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="cssbtn/btn-estilo.css">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
 <script src="https://kit.fontawesome.com/39c28581d5.js" crossorigin="anonymous"></script>



</head>
<body>
<?php include('include/header2.php');?>
 
 <div id="contenedor-home">
<div class="row">
       <div class="col-sm-4" id="col-sm-4">

<p style="text-align: center;   font-size: 23px; line-height:150%;">¡Bienvenido/a <strong>	 <?php

          if($_SESSION["perfil"] =="Administrador" || $_SESSION["perfil"] =="Vendedor"){

             echo '	
							' .$_SESSION["nombre"].'';

          }

          ?></strong>!, <br> ¿Qué vamos a hacer hoy? </p>


</div>
        <div class="col-sm-8" id="col-sm-8" >

<div class="cards">
  <a href="ingresar-noticia.php"> 
  <div class="card2"><br>
   <h1 style="color:#FFF;"><i class="fa-solid fa-plus fa-3x"></i></h1>       
  <h2 style="color:#FFF;">Agregar nueva noticia</h2><br>
  </div>
  </a> 
   <a href="panel.php"> 
  <div class="card2"><br>
   <h1 style="color:#FFF;"><i class="fa-solid fa-pen-to-square fa-3x"></i></h1>      
  <h2 style="color:#FFF;">Editar noticias</h2><br>
    
  </div>
  </a> 
 
  <a href="ingresar-comercio.php"> 
  <div class="card2"  title="Presionar aquí para ir a convenios"><br>
   <h1 style="color:#FFF;">  <i class="fas fa-store-alt fa-3x"></i> </h1>
   <h2 style="color:#FFF;"> Ingresar convenio</h2><br>
  
  </div> </a> 
  <a href="logout.php"> <div class="card2" title="Presionar aquí para cerrar sesión"><br>
   <h1 style="color:#FFF;">  <i class="fa-solid fa-right-from-bracket fa-3x"></i> </h1>     
  <h2 style="color:#FFF;">Cerrar Sesión</h2>
  
  </div>
  </a>
  
  </div> 
   </div></div></div>
 
 
  <div id="contenedor-footer">
<?php include('include/footer.php');?>
</div>
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