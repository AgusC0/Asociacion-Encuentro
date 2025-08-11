<?php
error_reporting(0);
session_start();
include('include/config.php');
include('include/conexion.php');
    if($_SESSION["perfil"] =="Administrador"){
		

      $redirect_page = 'menu.php';
header('Location:'  .$redirect_page);
die();

    }
?>
<?php
 
          if($_SESSION["perfil"] =="Especial" || $_SESSION["perfil"] =="Vendedor"){

             $redirect_page = '../../../ingreso/panel.php';
header('Location:'  .$redirect_page);
die(); 
}
?>

   
