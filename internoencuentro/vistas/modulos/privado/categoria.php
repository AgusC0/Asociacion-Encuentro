<?php
include('includes/config.php');
$cid=intval($_GET['cid']);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>AMCeP | Beneficios</title>
<link rel="stylesheet" href="../estilo.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style-responsive.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../responsive.css">
	<link rel="stylesheet" href="../fonts.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="../main.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Khula' rel='stylesheet' type='text/css'>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="../img/favicon.png" /> 
<script src="../script.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="../bjqs.min.js"></script>
<script src="../scriptt.js"></script>
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
 

        

</head>
            <!--FAE - Federico Echevarria - Desarollo web - Webmaster-->
<body> 

<div id="header">
<figure>
      <a href="../index" > <img id="fotos" src="../img/logo.jpg"  alt="Amcep" title="La mutual de la familia"></a>
    </figure>
    <a id="logo-header">

			<p class="site-name">La mutual de la familia</p>

 </a>

  </div>

   

	
<header>
		<div class="menu_bar">
					<a name="0" href="#0" class="bt-menu"><span class="icon-list2"><img src="nav.png" alt="Menú"></span></a>
		</div>
 
		<nav>
			<ul>
				<li><a name="1" href="../index"><span class="icon-house"></span>Inicio</a></li>
                <li><a href="../noticias"><span class="icon-mail"></span>Noticias</a></li>
			    <li class="submenu">
					<a name="2" href="#2"><span class="icon-rocket"></span>Sobre nosotros<span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
						<li><a href="../autoridades">Autoridades <span class="icon-dot"></span></a></li>
						<li><a href="../historia">Historia <span class="icon-dot"></span></a></li>
						<li><a href="../memorias">Memoria<span class="icon-dot"></span></a></li>
                        <li><a href="../estatutosocial">Estatuto Social<span class="icon-dot"></span></a></li>
                        <li><a href="../video">Video Institucional<span class="icon-dot"></span></a></li>
					</ul>
				</li>
                <li class="submenu">
				<a name="3" href="#3"><span class="icon-rocket"></span>Servicios<span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
                        <li><a href="../ayudaeconomica">Ayuda economica<span class="icon-dot"></span></a></li>
						<li><a href="../salud">Salud <span class="icon-dot"></span></a></li>
						<li><a href="../subsidios">Subsidios<span class="icon-dot"></span></a></li>
                        <li><font color="#333333" size="5">Recreación:</font><span class="icon-dot"></span></li>
                        <li><a href="../complejo">    •Camping y Complejo recreativo <span class="icon-dot"></span></a></li> 
                        <li><a href="../escuela">        •Escuela de verano <span class="icon-dot"></span></a></li>
						<li><a href="../salonamcep">    •Salón AMCeP<span class="icon-dot"></span></a></li>
                        <li><a href="../cumpleanos">    •Cumpleaños Asociados<span class="icon-dot"></span></a></li>
                         <li id="li-1"><a title="Red de comercios adheridos - ¡Descuentos y promociones!" href="../beneficios"><span class="icon-mail"></span> <img src="../img/mas.png"  width=15 height=15 /><font color="#008F4F"> Beneficios AMCeP</font></a></li>
                 	</ul>
				</li>   
                <li class="submenu">
					<a name="4" href="#4"><span class="icon-rocket"></span>Mutualismo<span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
						<li><a href="../mutual">Las mutuales somos... <span class="icon-dot"></span></a></li>
						<li><a href="../simbolos">Símbolos <span class="icon-dot"></span></a></li>
						<li><a href="../mutualismo">Mutualismo<span class="icon-dot"></span></a></li>
                        <li><a href="../cancion">Canción del mutualismo<span class="icon-dot"></span></a></li>
					</ul>
				</li> 
                <li><a href="../asociese"><span class="icon-mail"></span>Asociese</a></li>
				<li><a href="../contacto"><span class="icon-mail"></span>Contactos</a></li>
                <li id="li-1"><a title="Red de comercios adheridos - ¡Descuentos y promociones!"  href="beneficios"><span class="icon-mail"></span> <img src="../img/mas.png"  width=15 height=15 /><font color="#008F4F"> Beneficios AMCeP</font></a></li>
			</ul>
			
		</nav>
	</header>
<div id="contenedor">
<div>
 <img id="portadacomercio" src="img-beneficios/portada-beneficios.jpg" alt="Beneficios AMCeP" title="Beneficios AMCeP">               
 </div>   
 <div>
 <img id="portadacomercio-res" src="img-beneficios/beneficios-2.jpg" alt="Beneficios AMCeP" title="Beneficios AMCeP">               
 </div>  
<div id="cuerpo-ben-1">
<p id="menu-op"><a href="index.php"  >Todos</a></p>
<div class="sidebar-widget-body m-t-10">
	         <?php $sql=mysql_query("select id,categoryName  from category ORDER BY categoryName ASC");
while($row=mysql_fetch_array($sql))
{
    ?>
		<div class="accordion" >
	    	<div class="accordion-group">
	            <div class="accordion-heading">
	              <p id="menu-op">    <a href="categoria.php?cid=<?php echo $row['id'];?>" > <?php echo $row['categoryName'];?> </a></p>
	            </div>  
	        </div>
	    </div>
	    <?php } ?>
	</div><!-- /.sidebar-widget-body -->
    </div>	
     <div id="menu-responsive">
    <div class="accordion-container" style="background-color: #a9cf46;">
        <a href="#" class="accordion-titulo" style="font-family:'Source Sans Pro', sans-serif; ">Ver Rubros <span class="toggle-icon"></span><br></a>
        <div class="accordion-content">
        <div id="cuerpo-ben-1-res">
        <p id="menu-op"><a href="index.php"  >Todos</a></p>
<div class="sidebar-widget-body m-t-10">
	         <?php $sql=mysql_query("select id,categoryName  from category ORDER BY categoryName ASC");
while($row=mysql_fetch_array($sql))
{
    ?>
		<div class="accordion" >
	    	<div class="accordion-group">
	            <div class="accordion-heading">
	              <p id="menu-op">    <a href="categoria.php?cid=<?php echo $row['id'];?>" > <?php echo $row['categoryName'];?> </a></p>
	            </div>  
	        </div>
	    </div>
	    <?php } ?>
	</div><!-- /.sidebar-widget-body -->
    </div>
    </div>
    </div>
    </div>
  <div id="cuerpo-ben-3">
<!-- formulario de contacto -->
<p>Sumá a tu comercio a +Beneficios AMCeP!</p>
	<form action="envia.php" method="post" class="form-consulta"> 
		<label>
			<input type="text" name="comercio" placeholder="Comercio o Servicio" class="campo-form" required>
		</label>
        <label>
			<input type="text" name="nombre" placeholder="Nombre de contacto" class="campo-form" required>
		</label>
		<label>
			<input type="text" name="localidad" placeholder="Localidad del comercio" class="campo-form" required>
		</label>
        <label>
			<input type="tel" name="telefono" placeholder="Telefono" class="campo-form" norequired>
		</label>
		<label>
			<input type="email" name="email" placeholder="Email" class="campo-form" required>
		</label>
		
		

		<input type="submit" value="Enviar" class="btn-form">
	</form>

<!-- formulario -->
</div>	
<div id="cuerpo-ben-2">
 <div class="topnav">
 <div class="search-container">


  <form method="POST" action="search.php" class="navbar-search pull-left">
                                    <input type="text" name="search" class="search-query" placeholder="Buscar...">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
     </div>                             
</div> 



	
 <div id="titulo-comercio2">
  <?php $sql=mysql_query("select categoryName  from category where id='$cid'");
while($row=mysql_fetch_array($sql))
{
    ?>
    <h1 id="name"><?php echo htmlentities($row['categoryName']);?></h1>	<?php } ?>
 </div>
 <div id="descripcion-comercio">
	
     
 
			<?php
$ret=mysql_query("select * from products where category='$cid' ORDER BY id DESC");
$num=mysql_num_rows($ret);
if($num>0)
{
while ($row=mysql_fetch_array($ret)) 
{?>		
<div id="cuadricula">			
	 <p><a href="c?pid=<?php echo $row['id'];?>"><img src="admin/productimages/<?php echo $row['productImage1'];  ?>" width="130" height="130"></a></p>
                    <p><strong><font color="#000"><?php echo $row['productName'];  ?></font></strong></p>
                    <p><font size="+2"><strong><?php echo $row['productCompany1']; ?></strong></font></p>
                    <p><strong><font color="#0098db">Descuento</font></strong></p>
                    <p><a href="c?pid=<?php echo $row['id'];?>">Ver detalles</a></p>
 
      </div>
         <div id="responsive-comercio">
                     <p><a href="c?pid=<?php echo $row['id'];?>"><img src="admin/productimages/<?php echo $row['productImage1'];  ?>" width="130" height="130"></a></p>
                    <p><strong><font color="#000"><?php echo $row['productName'];  ?></font></strong></p>
                    <p><font size="+2"><strong><?php echo $row['productCompany1']; ?></strong></font></p>
                    <p><strong><font color="#0098db">Descuento</font></strong></p>
                    <p><a href="c?pid=<?php echo $row['id'];?>">Ver detalles</a></p>
                </div>
           
         
        


  

   
				
		
	  <?php } } else {?>
	
		<div class="col-sm-6 col-md-4 wow fadeInUp"> <h3>No existen comercios para el rubro</h3>
		</div>
        
		
<?php } ?>	
		
	
		
		
	
		
	
		
	
		
								

		</table>
	</div>
    </div>    
    <div id="cuerpo-ben-3-res">
<!-- formulario de contacto -->
<p>Sumá a tu comercio a +Beneficios AMCeP!</p>
	<form action="envia.php" method="post" class="form-consulta"> 
		<label>
			<input type="text" name="comercio" placeholder="Comercio o Servicio" class="campo-form" required>
		</label>
        <label>
			<input type="text" name="nombre" placeholder="Nombre de contacto" class="campo-form" required>
		</label>
		<label>
			<input type="text" name="localidad" placeholder="Localidad del comercio" class="campo-form" required>
		</label>
        <label>
			<input type="tel" name="telefono" placeholder="Telefono" class="campo-form" norequired>
		</label>
		<label>
			<input type="email" name="email" placeholder="Email" class="campo-form" required>
		</label>
		
		

		<input type="submit" value="Enviar" class="btn-form">
	</form>

<!-- formulario -->
</div>		

<div id="cajon3"></div>
</div>
</div>
</div>
  <div class="social">
		<ul>
			<li><a href="https://www.facebook.com/mutualamcep" target="_blank" class="icon-facebook"><img src="../img/fb.png" title="Pagina en Facebook AMCEP"></a></li>
		
			<li><a href="https://www.instagram.com/mutualamcep" target="_blank" class="icon-googleplus"><img src="../img/google.png"title="Instagram oficial AMCEP"></a></li>
		    <li><a href="https://www.youtube.com/channel/UCTuNUZZoa9gWVfwcNUIT6Yg/feed" target="_blank" class="icon-youtube"><img  src="../img/youtube.png" title="Canal de Youtube AMCEP"> </a></li>
	        <li><a href="contacto#wsp" class="icon-pinterest"><img  src="../img/whatsapp.png" title="Linea directa WhatsApp"> </a></li>
          
		</ul>
	</div>
<div id="logos">
<a href="http://www.inaes.gov.ar/" target="_blank"> <img id="inaes22" src="../img/inaes.png"  title="Inaes">  </a>

<a href="http://www.femucor.org/" target="_blank"> <img id="femucor2" src="../img/femucor.png"  title="Femucor">  </a>
 <a href="#" onclick='subir();return false' > <img src="../img/flecha.png" align="right" title="Ir arriba">  </a>
</div>
<div id="publicidad-what">
<p><a href= "https://api.whatsapp.com/send?phone=543548400644">¿Alguna consulta? Contactanos por WhatsApp <i class="fa fa-whatsapp"></i></a></p>
</div>
<footer>
 <p> Mutual AMCeP | <?php echo date("Y");?> | <a href="#" onclick='subir();return false'> mutualamcep.org.ar</a> | <a href= "../mapasitio" > Mapa del sitio</a> |<a href= "#"onclick='subir();return false' > Subir</a> </p>
 <p><i class="fa fa-map-marker"></i>
Alsina 40, Valle Hermoso, Córdoba | <i class="fa fa-phone"></i> 03548 - 470-122 / 470-575 | <i class="fa fa-user-plus"></i> Lunes a Viernes de 8:30 a 12:30 hs. </p>
<p id="inscripta">Inscripta en INAES M 417/86 y Dirección de Cooperativas y Mutuales de la Provincia de Córdoba Afiliada a la Federación Provincial de Mutualidades de Córdoba</p>
<figure id="iso-logos">
<img id="logo-amcep" src="../img/logos/30.png" alt="asociacion mutual del centro de punilla" title="AMCeP - Asociacion Mutual del Centro de Punilla">
</figure>
<div id="sub-footer">
  <p id="sub1"><img src="../img/logo.png" border=0 width=70 height=25 alt="asociacion mutual del centro de punilla" title="AMCeP - Asociación Mutual del Centro de Punilla"/></p>
<p id="autores"><font color="#FFF"> <a href= "http://www.federicoechevarria.com" target="_blank" ><img src="../img/fae2.png" border=0 width=50 height=25 title="Federico Echevarria - Diseño Web - Webmaster"/></a> <a href= "https://www.facebook.com/Viky_desingart-599371556920234/" target="_blank" ><img src="../img/victoriareyes.png" border=0 width=70 height=25 title="Victoria Reyes - Diseño gráfico y arte"/></a></font></p>
</div>
<div id="sub-footer-res">
<p>Versión adaptable a móviles y dispositivos portatiles</p>
</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(function() {

        var btn_movil = $('#nav-mobile'),
            menu = $('#menu').find('ul');

   
        btn_movil.on('click', function (e) {
            e.preventDefault();

            var el = $(this);

            el.toggleClass('nav-active');
            menu.toggleClass('open-menu');
        })

    });
</script>

<script>
$(function(){
  $(".accordion-titulo").click(function(e){
           
        e.preventDefault();
    
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
});
</script>

	
</body>
</html>