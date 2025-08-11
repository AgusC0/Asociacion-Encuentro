<?php
session_start();
include('include/conexion.php');
if(strlen($_SESSION['perfil'])== "Vendedor")
		{
header('location:https://www.encuentrocomunitario.com.ar/internoencuentro');
}
else{
date_default_timezone_set('America/Argentina/Buenos_Aires');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
}
?>	



<?php 
		$conn_db = mysql_connect("localhost","u545591534_noticiasasc","C7n1*LR>h") or die();
		$sel_db = mysql_select_db("u545591534_noticiasasc",$conn_db) or die();
		if(isset($_POST['re_password']))
		{
		$old_pass=$_POST['old_pass'];
		$new_pass=$_POST['new_pass'];
		$iduser = $_SESSION['id'];
		$re_pass=$_POST['re_pass'];
		$chg_pwd=mysql_query("select * from usuarios where id='$iduser'");
		$chg_pwd1=mysql_fetch_array($chg_pwd);
		$data_pwd=$chg_pwd1['password'];
		if($data_pwd==$old_pass){
		if($new_pass==$re_pass){
			$update_pwd=mysql_query("update usuarios set password='$new_pass' where id='$iduser'");
			echo "<script>alert('Clave actualizada'); window.location='logout.php'</script>";
		}
		else{
			echo "<script>alert('Tu nueva y tu antigua clave no coinciden'); window.location='cambiar-clave.php'</script>";
		}
		}
		else
		{
		echo "<script>alert('Tu antigua clave es incorrecta'); window.location='cambiar-clave.php'</script>";
		}}
	?>