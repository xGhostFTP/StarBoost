@extends('layouts.app')

@section('content')


<style>.border-box{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.reset-list{margin:0;padding:0;list-style:none;background:0}body{font-family:"Lato",Helvetica,Arial,sans-serif;color:#7e89a3;font-weight:300;font-size:17px;font-size:1.0625rem;line-height:1.8em}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}h1{font-size:2.5em;font-weight:300;text-transform:uppercase}h2{font-size:1.3em;font-weight:700;text-transform:uppercase;color:#50c5ab}h3{font-size:1.4em;font-weight:300}h4{font-size:1em;font-weight:700}h5{font-size:1em;font-weight:300;font-style:italic}h6{font-size:.7em;font-weight:300;text-transform:uppercase;font-weight:300}h1,h2,h3,h4,h5,h6{margin:0 0 1em 0;line-height:1.3em}p{margin:0 0 1.7em 0}p:first-child{margin-top:0}p:last-child{margin-bottom:0}a{color:#50c5ab;text-decoration:none;-webkit-transition:all .3s linear;-moz-transition:all .3s linear;-o-transition:all .3s linear;-ms-transition:all .3s linear;transition:all .3s linear}a:hover{text-decoration:underline}img{display:inline-block;max-width:100%;height:auto}figure{margin:0;padding:0}pre{padding:2em;background:#f6f6f8}table{width:100%}table th{background:#f6f6f8;padding:.5em;border-right:.0625rem solid white}table td{border-bottom:solid .0625rem #bdbdcb;padding:.5em}blockquote{font-style:italic;font-weight:400;margin:0;color:#babfcd;text-align:center;font-size:1.2em;line-height:1.5em;padding:1em 0}hr{content:" ";display:block;width:4em;height:.0625rem;border:0;border-top:solid .0625rem #f6f6f8;margin:2em 0;clear:both}hr.center{margin-left:auto;margin-right:auto}.text-center{text-align:center}@media only screen and (max-width: 35.6rem){body{ font-size:16px;font-size:1rem;line-height:1.8em}p{margin:1.5em 0}blockquote{font-size:1.2em;padding:1.3em 0}blockquote .alignleft{float:left}}.fl{float:left}.fr{float:right}.cf:before,.cf:after{content:" ";display:table}.cf:after{clear:both}.cf{*zoom:1}.cols{text-align:left}.cols .col2{float:left;width:48%;margin-right:4%;margin-bottom:3em}.cols .col2:nth-child(2n){margin-right:0}.cols .col2:nth-child(2n+3){clear:left}.cols .col3{float:left;width:30%;margin-right:5%;margin-bottom:3em}.cols .col3:nth-child(3n){margin-right:0}.cols .col3:nth-child(3n+4){clear:left}.cols .col3x2{float:right;width:65%;clear:right;margin-bottom:3em}.cols .col4{float:left;width:21.25%;margin-right:5%;margin-bottom:3em}.cols .col4:nth-child(4n){margin-right:0}.cols .col4:nth-child(4n+5){clear:left}.cols:before,.cols:after{content:" ";display:table}.cols:after{clear:both}.cols{*zoom:1}.alignleft{float:left;margin:0 1em .5em 0;max-width:50%}.alignright{float:right;margin:0 0 .5em 1em;max-width:50%}.aligncenter{display:block;margin:1.5em auto}@media only screen and (max-width: 29.8rem){.alignleft,.alignright{ float:none;display:block;margin:25px auto;max-width:100%;width:auto}.cols .col3,.cols .col4,.cols .col3x2{float:none;margin-right:0;width:100%}}.container{width:90%;max-width:75rem;margin-left:auto;margin-right:auto}#main-header{display:table}#main-header .menu-trigger{display:none}.logo-header{display:table-cell;width:27%;padding:1.5em 0}.logo-header .logo,.logo-header .slogan{margin:0;display:block}.logo-header .logo{font-size:2.5em;line-height:1.2em}.logo-header .slogan{font-size:.7em;text-align:center;font-weight:300;text-transform:uppercase;line-height:1.2em}.logo-header:hover{text-decoration:none}#main-menu{display:table-cell;width:73%;text-align:right;vertical-align:middle;line-height:1.3em}#main-menu ul,#main-menu li{margin:0;padding:0;list-style:none;background:0}#main-menu ul li{display:inline-block}#main-menu ul li a{padding:.5em 1.5em;background:transparent;-webkit-border-radius:10em;-moz-border-radius:10em;-ms-border-radius:10em;-o-border-radius:10em;border-radius:10em;color:#7e89a3;display:block}#main-menu ul li a:hover{background:#f6f6f8;text-decoration:none}#main-menu ul li.featured a{background:#50c5ab;color:#fff}#main-menu ul li.featured a:hover{background:#329780}@media only screen and (max-width: 53.125rem){.logo-header{ width:35%}#main-menu{width:65%}#main-menu ul li a{padding:.5em 1em}}@media only screen and (max-width: 46.25rem){#main-header{ display:block}#main-header .menu-trigger{display:block;float:right;padding:2.5em 1em 1em 1em;cursor:pointer;width:20%;text-align:right}.logo-header{width:80%;float:left;display:block;text-align:left}.logo-header .slogan{text-align:left}#main-menu{width:100%;clear:both;text-align:center;background:#f6f6f8;border:solid .0625rem #d9d9e2;padding:.5em;margin-bottom:2em}#main-menu.open{display:block}#main-menu.closed{display:none}#main-menu ul li{display:block;width:100%}#main-menu ul li a{padding:.5em 1em}#main-menu ul li a:hover{background:#d9d9e2}#main-menu ul li.featured a{background:0;color:#7e89a3}#main-menu ul li.featured a:hover{background:#d9d9e2}}#main-footer{border-top:solid .125rem #282f40}.footer-call-to-action{text-align:center;background:#282f40;color:#fff;padding:3em 0}.footer-call-to-action .btn{margin-left:1em}#bottom-footer{display:table}#bottom-footer .copyright,#bottom-footer #footer-menu{display:table-cell;width:50%;padding:2em 0}#footer-menu{text-align:right}#footer-menu ul,#footer-menu li{margin:0;padding:0;list-style:none;background:0}#footer-menu ul li{display:inline-block}#footer-menu ul li::before{content:"/";padding:0 .7em}#footer-menu ul li a{color:#7e89a3}@media only screen and (max-width: 56.25rem){#bottom-footer{ display:block;padding:1em 0}#bottom-footer .copyright,#bottom-footer #footer-menu{display:block;width:100%;padding:.5em 0;text-align:left}}#testimonios-area{background:#7e89a3;color:#fff;padding:4em 0 4em 0;position:relative}#testimonios-area .container{padding:0 6em}#testimonios-area .flex-direction-nav{margin:0;padding:0;list-style:none;background:0;position:absolute;top:45%;width:100%;left:0;height:2rem}#testimonios-area .flex-direction-nav a{width:2rem;height:2rem;overflow:hidden;text-indent:-999px;display:block;position:absolute;top:0}#testimonios-area .flex-direction-nav a.flex-prev{left:1em;background:url(../img/arrow-left.svg) left center no-repeat}#testimonios-area .flex-direction-nav a.flex-next{right:1em;background:url(../img/arrow-right.svg) right center no-repeat}.testimonio{padding:0}.testimonio::before{content:"\201C";display:block;text-align:center;font-size:5em;font-family:Georgia,'Times new roman',serif;opacity:.3;line-height:1em;margin-bottom:-.5em}.testimonio blockquote{color:#fff}.testimonio cite{max-width:22rem;margin:0 auto;display:block;text-align:left;font-size:.75em;line-height:1.3em;font-style:normal;font-weight:300}.testimonio cite strong{font-weight:900;display:block;padding-top:.5em}.testimonio cite img{-webkit-border-radius:10em;-moz-border-radius:10em;-ms-border-radius:10em;-o-border-radius:10em;border-radius:10em;border:solid .125rem white}@media only screen and (max-width: 45rem){#testimonios-area .container{ padding:0 3em}}@media only screen and (max-width: 30rem){#testimonios-area .container{ padding:0 2em}.testimonio cite{text-align:center}.testimonio cite img{float:none;margin:0 auto}}input,textarea{background:#fff;border:.0625rem solid #d9d9e2;padding:1em;-webkit-transition:all .3s linear;-moz-transition:all .3s linear;-o-transition:all .3s linear;-ms-transition:all .3s linear;transition:all .3s linear;max-width:100%;color:#7e89a3;display:block;width:100%;-webkit-border-radius:.3rem;-moz-border-radius:.3rem;-ms-border-radius:.3rem;-o-border-radius:.3rem;border-radius:.3rem;background:#f6f6f8;margin-bottom:1em}input:focus,textarea:focus{border-color:#50c5ab;outline:0;background:#fff}textarea{width:100%}input[type="submit"],input[type="button"]{background:#50c5ab;border:0;color:#fff;display:inline-block;width:auto;line-height:1.5em}.btn{padding:.5em 1.5em;background:#50c5ab;-webkit-border-radius:10em;-moz-border-radius:10em;-ms-border-radius:10em;-o-border-radius:10em;border-radius:10em;display:inline-block;color:#fff}.btn:hover{background:#329780;text-decoration:none}.btn.btn-light{background:#fff;border:solid .0625rem #d9d9e2;color:#7e89a3}.btn.btn-light:hover{background:#f6f6f8}.alerta{background:#fffaf9;color:tomato;padding:1em 2em;-webkit-border-radius:.5em;-moz-border-radius:.5em;-ms-border-radius:.5em;-o-border-radius:.5em;border-radius:.5em;border:solid .0625rem #ff6347;margin-bottom:1em}.page-header{background:#7e89a3;padding:3em 0;color:#fff;text-align:center}.page-header h1{margin:0 0 .7em 0}.page-header p{font-size:1.2em;line-height:1.5em}.container.page-content{max-width:46.25rem}.container.page-content,.container.list-content{margin-top:4em;margin-bottom:4em}#hero-container{background:#f6f6f8;border-bottom:solid .0625rem #d9d9e2;border-top:solid .0625rem #d9d9e2;padding:5em 0 8em 0;position:relative}#hero{padding-right:55%}#hero .dispositivos{background:url(../img/home-dispositivos.png) left center no-repeat;position:absolute;right:0;top:0;width:55%;height:100%}#hero .dispositivos img{display:none}#hero h2{color:#7e89a3;font-weight:300;font-size:2.5em;text-transform:none;margin:0}#hero p{margin:1em 0}@media only screen and (max-width: 61.25rem){#hero{ padding-right:40%}#hero .dispositivos{width:40%}}@media only screen and (max-width: 45.625rem){#hero{ padding-right:0}#hero .dispositivos{background:0;position:static;width:100%;height:auto}#hero .dispositivos img{display:block;margin:0 auto 1em auto}}.detalle-servicio{display:table;margin-bottom:3em}.detalle-servicio .icono,.detalle-servicio .text{display:table-cell;vertical-align:top}.detalle-servicio .icono{width:12rem}.servicio-resumen{text-align:center}.servicio-resumen .icono{display:block}.servicio-resumen .icono .icono-servicio{margin:0 auto}.servicio-resumen h2{margin-top:1em}#servicios-home{padding:4em 0}.icono-servicio{width:10rem;height:10rem;line-height:10rem;-webkit-border-radius:10rem;-moz-border-radius:10rem;-ms-border-radius:10rem;-o-border-radius:10rem;border-radius:10rem;background:#f6f6f8;border:solid .0625rem #d9d9e2;text-align:center}.icono-servicio img{vertical-align:middle}@media only screen and (max-width: 33.125rem){.detalle-servicio{ display:block}.detalle-servicio .icono,.detalle-servicio .text{display:block;text-align:center;width:100%}.detalle-servicio .icono-servicio{margin:0 auto 1em auto}}.portafolio-resumen{text-align:center}.portafolio-resumen h2{margin:1em 0 .5em 0}.portafolio-resumen p{margin:0 0 1em 0}.portafolio-detalle .page-header{padding:3em 0 18em 0;margin-bottom:-15em}.portafolio-detalle .imagen-destacada{margin-bottom:1.5em}.portafolio-detalle .container.page-content{margin-top:0}</style>

<body>

<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  chat-icon="https:&#x2F;&#x2F;images-ext-1.discordapp.net&#x2F;external&#x2F;79A0M4AT_Bzl6h5hPW0_jhZ-_cQLYyn-xOJW4hL1yE0&#x2F;%3Fwidth%3D671%26height%3D671&#x2F;https&#x2F;media.discordapp.net&#x2F;attachments&#x2F;896167705227448360&#x2F;939291820310007838&#x2F;gaming-logo-template-featuring-cuphead-inspired-graphics-2957.png"
  intent="WELCOME"
  chat-title="StarBot"
  agent-id="03aaca33-c928-46dc-a86d-ff9141524d1d"
  language-code="es"
></df-messenger>
	
	<section id="main-header" class="container cf">
		
		<a class="logo-header" href="home" title="Inicio">
			<span class="logo"><img src="img/logo2.png" alt="logo" width="200" height="40"></span>
			<span class="slogan"></span>
		</a><!-- /#logo-header -->
		
		<span class="menu-trigger"><img src="img/menu-responsive.svg" alt="Abrir menú" /></span>
		
		<nav id="main-menu" role="navigation" class="closed">
			<ul>
				<li><a href="home">Inicio</a></li>
				<li><a href="servicios">Servicios</a></li>
				<li><a href="evaluacion_servicio">Calificanos</a></li>
				<li><a href="estadisticas">Estadisticas</a></li>
				
				<li class="featured"><a href="contactanos">Contacto</a></li>
			</ul>
		</nav><!-- /#main-menu -->
		
	</section><!-- /#main-header -->
	
	<main id="content-area">
	
		<article class="single-page">
			
			
			<header class="page-header">
				<div class="container">
					
					<h1>Servicios</h1>
					
					<p>Aqui encontraras los servicios disponibles  </p>
				
				</div>
			</header><!-- /.page-header -->
			
			
			
			<div class="container page-content">
			
				<section class="detalle-servicio">
					<div class="icono">
						<figure class="icono-servicio">
							<img src="img/oro.png" alt="Consultoría" />
						</figure><!-- /.icono-servicio -->
					</div><!-- /.icono -->
					<div class="text">
						
						<h2>Oro</h2>
						
						<p>Apartir de Hierro se cobrara $350.</p>
						<p>Apartir de Bronce se cobrara $250.</p>
						<p>Apartir de Plata se cobrara $150.</p>
					</div><!-- /.text -->
				</section><!-- /.detalle-servicio -->
				
				
				
				<section class="detalle-servicio">
					<div class="icono">
						<figure class="icono-servicio">
							<img src="img/platino.png" alt="Diseño" />
						</figure><!-- /.icono-servicio -->
					</div><!-- /.icono -->
					<div class="text">
						
						<h2>Platino</h2>

						<p>Apartir de Bronce se cobrara $450.</p>
						<p>Apartir de Plata se cobrara $350.</p>
						<p>Apartir de Oro se cobrara $300.</p>

					</div><!-- /.text -->
				</section><!-- /.detalle-servicio -->
				
				
				<section class="detalle-servicio">
					<div class="icono">
						<figure class="icono-servicio">
							<img src="img/diamante.png" alt="Desarrollo" />
						</figure><!-- /.icono-servicio -->
					</div><!-- /.icono -->
					<div class="text">
						
						<h2>Diamante</h2>

						<p>Apartir de Plata se cobrara $550.</p>
						<p>Apartir de Oro se cobrara $350.</p>
						<p>Apartir de Platino se cobrara $250.</p>
						
					</div><!-- /.text -->
				</section><!-- /.detalle-servicio -->
				
							
			</div><!-- /.content -->
			
		</article><!-- /#single-page -->
	</main><!-- /#content-area -->
	
	
	<footer id="main-footer">
		
		<div class="footer-call-to-action">
			
			<p class="container">¿Estás listo para recibir el mejor eloboost de tu vida? <a href="contacto.html" class="btn">Trabajemos juntos</a></p>
			
		</div><!-- /.footer-call-to-action -->
		
		<div id="bottom-footer" class="container cf">
			
			<div class="copyright">
				&copy; 2021 Diseño y desarrollo por <a href="">Star Eloboost Universidad Politécnica de Querétaro</a>
			</div><!-- /.copyright -->
			
			<nav id="footer-menu">
				<ul>
					<li><a href="home">Inicio</a></li>
					<li><a href="servicios">Servicios</a></li>
					
					<li><a href="contactanos">Contacto</a></li>
				</ul>
			</nav><!-- /#footer-menu -->
			
		</div><!-- /#bottom-footer -->
		
	</footer><!-- /#main-footer -->


	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/rem.min.js"></script>
	<script src="js/functions.js"></script>
	
</body>
@section('content')
</html>
