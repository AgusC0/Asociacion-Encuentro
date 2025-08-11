<?php
error_reporting(0);
session_start();
$_SESSION['perfil']=="";
session_unset();
//session_destroy();
$_SESSION['errmsg']="Sesión cerrada correctamente";
?>
<script language="javascript">
document.location="../../../index.php";
</script>
