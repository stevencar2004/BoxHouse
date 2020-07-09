<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" href="img/icon 2.ico" />
		<title>BoxHouse</title>
		<link rel="stylesheet" href="css/menu.css" />
		<link rel="stylesheet" href="css/banner.css" />
		<link rel="stylesheet" href="css/inicio.css" />
		<link rel="stylesheet" href="css/disciplina.css" />
		<link rel="stylesheet" href="css/horarios.css" />
		<link rel="stylesheet" href="css/agendar.css" />
		<link rel="stylesheet" href="css/footer__about.css" />
		<link rel="stylesheet" href="css/normalize.min.min.css" />
		<link
			href="https://fonts.googleapis.com/css?family=Spartan:100,200,300,regular,500,600,700,800,900"
			rel="stylesheet"
		/>
		<link
			href="https://fonts.googleapis.com/css?family=Cambay:regular,italic,700,700italic"
			rel="stylesheet"
		/>
		<script
			src="https://kit.fontawesome.com/6fc7def821.js"
			crossorigin="anonymous"
		></script>
	</head>

	<body>
		<!--HEADER: Etiqueta usada para el encabezazdo de la pagina-->
		<header class="header">
			<div class="header__content__title">
				<a href="#home" class="header__content__link">
					<h1 class="header__title"><span class="highlight"> Box</span>House</h1>
				</a>
			</div>
			<!-- NAV: etiqueta usada solo para la navegacion -->
			<nav class="header__navigation">
				<ul class="navigation__list">
					<li class="navigation__items">
						<a class="navigation__link" href="#inicio"> Inicio </a>
					</li>
					<li class="navigation__items">
						<a class="navigation__link " href="#disciplinas">Disciplinas</a>
					</li>
					<li class="navigation__items">
						<a class="navigation__link" href="#horarios">Horarios</a>
					</li>
					<li class="navigation__items">
						<a class="navigation__link " href="#agendar">Agenda Tu Clase</a>
					</li>
					<li class="navigation__items">
						<a class="navigation__link" href="#testimonios">Testimonios</a>
					</li>
				</ul>
			</nav>
		</header>

		<div class="container">

			<?php
			  require_once "banner.php";
			?>
			<section class="content__body" id="inicio">
				<?php
				 require_once "inicio.php" ;
				?>
			</section>

			<section class="content__body" id="disciplinas">
				<?php
				 require_once "disciplina.php" ;
				?>
			</section>

			<section class="content__body" id="horarios">
				<?php
				 require_once "horarios.php" ;
				?>
			</section>

			<section class="content__body" id="agendar">
				<?php
				 require_once "agendar.php" ;
				?>
			</section>

			<section class="content__body" id="testimonios">
				<?php
				 require_once "footer__about.php" ;
				?>
			</section>
		</div>
	</body>
</html>
