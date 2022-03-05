<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>EXAMEN</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a  class="logo">
									<span class="symbol"><img src="/images/logo1.svg" alt="" /></span><span class="title">INGENIERIA EN SOFTWARE</span>
								</a>
							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>
								<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="/">INICIO</a></li>
							<li>Integrantes</li>
							<li>Dania Yanin Chavez Zavala</li>
							<li>Brandon Duran Rocha</li>
							<li>Christian Jahir Garcia Jardinez</li>
						</ul>
					</nav>
						</div>
					</header>
				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Temario</a>.</h1>
								<p>Temario de la unidad I y II de la materia Cliente Servidor</p>
							</header>
							<h1>UNIDAD I</h1>
							<section class="tiles">
							@foreach($publicaciones as $publicacion)
							@if($loop->index <=6)
								<article class="style2">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="{{route('mostrar.publicacion',$publicacion->slug)}}">
										<h2>{{$publicacion->titulo}}</h2>
										
									</a>
								</article>
								@endif
								@endforeach
							</section>
							<h1>UNIDAD II</h1>
							<section class="tiles">
							@foreach($publicaciones as $publicacion)
							@if($loop->index >=7)
								<article class="style4">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="{{route('mostrar.publicacion',$publicacion->slug)}}">
										<h2>{{$publicacion->titulo}}</h2>
									</a>
								</article>
								@endif
								@endforeach
							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="https://twitter.com/UPTecamac" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/UniversidadPolitecnicadeTecamac" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="https://instagram.com/uptecamac?utm_medium=copy_link" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="https://github.com/BrandonD96/examen2" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; UPT. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>