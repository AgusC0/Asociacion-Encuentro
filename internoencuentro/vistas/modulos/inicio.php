 
<?php
error_reporting(0);
session_start();
include('include/config.php');
include('include/conexion.php');
    if($_SESSION["perfil"] =="Administrador"){
		

  echo '<script>';
  echo 'window.location.href="https://www.encuentrocomunitario.com.ar/internoencuentro/vistas/modulos/privado/panel.php";';
  echo '</script>';

    }
?>
<?php
 
          if($_SESSION["perfil"] =="Especial" || $_SESSION["perfil"] =="Vendedor"){

          	 echo '<script>';
                echo  'window.location.href="https://www.redmoderna.com.ar/internomoderna/ingreso/panel.php"';
                echo '</script>';
  
}
?>