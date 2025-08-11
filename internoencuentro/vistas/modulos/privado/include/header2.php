<script type="text/javascript">
var tstampActual = 0;
var comprobar = 300000;

function actividad() {

var tstamp = new Date().getTime();

if (Math.abs(tstampActual - tstamp) > comprobar) {

window.location.href="logout.php"

} else {

document.getElementById('expirado').style.display = 'none';

}
}


window.addEventListener('load', function() {

document.body.addEventListener('mousemove', function() {

tstampActual = new Date().getTime();

}, false);

setInterval(actividad, comprobar);
});


</script>


<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" style="margin-top:25px;" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="menu.php">
			  	<img src="images/logo.png"   width="150">
			  	</a>
 
				<div class="nav-collapse collapse navbar-inverse-collapse"  >
					<ul class="nav pull-right" style="margin-top:15px; ">
	 

       
						<li class="nav-user dropdown" >
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" >
								<img src="images/user.png" class="nav-avatar" />
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="cambiar-clave.php">Cambiar contraseña</a></li>
								<li class="divider"></li>
								<li><a href="logout.php">Cerrar Sesión</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->
